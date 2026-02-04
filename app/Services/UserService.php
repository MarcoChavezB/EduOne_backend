<?php

namespace App\Services;

use App\Models\Role;
use App\Models\User;

class UserService{
    /**
     * Genera un identificador de usuario único con el prefijo del rol y un número incremental global.
     *
     * Ejemplo: IV1, JFG2, IM3, etc.
     *
     * @param int|string $idRole El ID del rol para obtener el prefijo correspondiente.
     * @return string El identificador generado, compuesto por el prefijo del rol y el número incremental global.
     */
    public function GenerateUserId($idRole): String {
        $prefix = Role::where('id_role', $idRole)->value('role_prefix');
        $ids = User::pluck('id_user');
        $maxNumber = 0;
        foreach ($ids as $id) {
            if (preg_match('/(\d+)$/', $id, $matches)) {
                $num = (int)$matches[1];
                if ($num > $maxNumber) {
                    $maxNumber = $num;
                }
            }
        }
        $number = $maxNumber + 1;
        return $prefix . $number;
    }
    
    
    /**
     * Verifica si el usuario corresponde al rol de estudiante.
     *
     * @param int|string $idRol El ID del rol a verificar.
     * @return bool true si el rol es estudiante (ID 7), false en caso contrario.
     */
    public function IsUserStudent($idRol): bool{
        return $idRol == 7;
    }
}