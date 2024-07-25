<?php

namespace proyecto\Models;

use PDO;

class RolUsuarioModel extends Models
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Asigna un rol a un usuario en la base de datos.
     * 
     * @param int $id_usuario El ID del usuario.
     * @param int $id_rol El ID del rol.
     * 
     * @return void
     * @throws \Exception Si ocurre un error al ejecutar la consulta.
     */
    public function assignRole($id_usuario, $id_rol) {
        try {
            $stmt = self::$pdo->prepare("INSERT INTO rol_usuario (id_usuario, id_rol) VALUES (:id_usuario, :id_rol)");
            $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
            $stmt->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \Exception("Error al asignar rol al usuario: " . $e->getMessage());
        }
    }
}
