<?php

namespace App\Http\Controllers\Auth;
use App\Models\Employee;
use App\Models\Student;
use App\Models\User;
use App\Services\MailService;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{







    /**
     * Registra un nuevo usuario y, según el rol, lo asocia como estudiante o empleado.
     *
     * Valida los datos de entrada, crea el usuario y luego registra información adicional
     * en la tabla correspondiente (students o employees) según el rol.
     *
     * @param Request $request Los datos de la solicitud HTTP.
     * @return \Illuminate\Http\JsonResponse Respuesta JSON con el resultado del registro.
     */
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'id_role' => 'required|integer|exists:roles,id_role',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            // Campos adicionales para estudiantes
            'id_career' => 'required_if:id_role,7|integer|exists:careers,id_career',
            'emergency_contact' => 'required_if:id_role,7|string|max:255',
            'enrollment_date' => 'required_if:id_role,7|date',
            'afac_user' => 'nullable|string|max:255',
            'afac_password' => 'nullable|string|max:255',
            'afac_emission' => 'nullable|date',
            'afac_expiration' => 'nullable|date',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validación',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->all();
        $userService = new UserService();
        $mailService = new MailService();
        $userCreate = null;
        $individualRegistered = false;

        DB::beginTransaction();
        try {
            $userCreate = User::create([
                'id_user' => $userService->GenerateUserId($data['id_role']),
                'id_role' => $data['id_role'],
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            if(!$userCreate){
                DB::rollBack();
                return response()->json([
                    'success' => false,
                    'message' => 'Error al registrar el usuario'
                ], 500);
            }

            // ============ Registro especifico por rol ============ //
            if($userService->IsUserStudent($data['id_role'])){
                $individualRegistered = $this->registerStudent($request, $userCreate);
                if(!$individualRegistered){
                    DB::rollBack();
                    return response()->json([
                        'success' => false,
                        'message' => 'Error al registrar el estudiante'
                    ], 500);
                }
            }

            if(!$userService->IsUserStudent($data['id_role'])){
                $individualRegistered = $this->registerEmployee($request, $userCreate);
                if(!$individualRegistered){
                    DB::rollBack();
                    return response()->json([
                        'success' => false,
                        'message' => 'Error al registrar el empleado'
                    ], 500);
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Error en el registro',
                'error' => $e->getMessage()
            ], 500);
        }
        
        $mailService->sendWelcomeEmail($userCreate);

        //========================================================= //
        return response()->json([
            'success' => true,
            'message' => 'Usuario registrado exitosamente',
            'data' => $userCreate
        ]);
    }
    
    
    
    
    
    
    
    
    
    
    /**
     * Registra información adicional de un usuario como estudiante.
     *
     * @param Request $request Los datos de la solicitud HTTP.
     * @param User $user El usuario recién creado.
     * @return bool true si el registro fue exitoso, false en caso contrario.
     */
    public function registerStudent(Request $request, User $user): bool
    {
        $studentCreated = Student::create([
            'id_user' => $user->id_user,
            'id_career' => $request->input('id_career'),
            'emergency_contact' => $request->input('emergency_contact'),
            'enrollment_date' => $request->input('enrollment_date'),
            'afac_user' => $request->input('afac_user'),
            'afac_password' => $request->input('afac_password'),
            'afac_emission' => $request->input('afac_emission'),
            'afac_expiration' => $request->input('afac_expiration'),
        ]);
        
        return $studentCreated ? true : false;        
    }
    
    
    
    
    
    
    
    /**
     * Registra información adicional de un usuario como empleado.
     *
     * @param Request $request Los datos de la solicitud HTTP.
     * @param User $user El usuario recién creado.
     * @return bool true si el registro fue exitoso, false en caso contrario.
     */
    public function registerEmployee(Request $request, User $user): bool
    {
        $employeeCreated = Employee::create([
            'id_user' => $user->id_user,
            'weight' => $request->input('weight'),
        ]);
        
        return $employeeCreated ? true : false;
    }
    
    
    
    
    
    
    
}
