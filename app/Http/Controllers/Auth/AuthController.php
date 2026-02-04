<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\MailService;
use Hash;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Login de usuario usando JWT, por id_ user o email.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $mailService = new MailService();
    
        $request->validate([
            'password' => 'required|string',
            'credential' => 'required|string',
        ]);

        $user = User::when($request->filled('credential'), function ($query) use ($request) {
                return $query->where('id_user', $request->credential)
                             ->orWhere('email', $request->credential);
            })
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Credenciales inválidas'
            ], 401);
        }

        $token = JWTAuth::fromUser($user);
        
        if( !$token ){
            return response()->json([
                'success' => false,
                'message' => 'No se pudo generar el token'
            ], 500);
        }
        
        $mailService->SendLoginAlertEmail($user);

        return response()->json([
            'success' => true,
            'message' => 'Login exitoso',
            'data' => $user,
            'token' => $token
        ]);
    }

}
