<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    /**
     * Funcion para registro comun.
        request : {
            "name": "string",
            "email": "string",
            "last_name": "string",
            "password": "string",
            "password_confirmation": "string",
            "id_role": integer
        }
     */


    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'id_role' => 'required|integer|exists:roles,id_role',
        ]);
        
        $data = $request->all();
        $userService = new UserService();
        
        $userCreate = User::create([
            'id_user' => $userService->GenerateUserId($data['id_role']),
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
        
        if(!$userCreate){
            return response()->json([
                'success' => false,
                'message' => 'Error al registrar el usuario'
            ], 500);
        }
        
        // ============ Registro especifico por rol ============ //
        if($userService->IsUserStudent($data['id_role'])){
           $studentRegistered = $this->registerStudent($request);
            
            if(!$studentRegistered){
                return response()->json([
                    'success' => false,
                    'message' => 'Error al registrar el estudiante'
                ], 500);
            }
        }
        
        
        if(!$userService->IsUserStudent($data['id_role'])){
           $employeeRegistered = $this->registerEmployee($request);
            
            if(!$employeeRegistered){
                return response()->json([
                    'success' => false,
                    'message' => 'Error al registrar el empleado'
                ], 500);
            }
        }
        
        //========================================================= //
        
        return response()->json([
            'success' => true,
            'message' => 'Usuario registrado exitosamente',
            'data' => $userCreate
        ]);
    }
    
    public function registerStudent(Request $request): bool
    {
    
    }
    
    public function registerEmployee(Request $request): bool
    {
    
    }
    
    public function login(Request $request){
        
    }
}
