<?php
defined('BASEPATH') or exit('No se permite acceso directo');

class UsuariosModel extends Model
{

    /* Función para validar entrada */
    public function validaEntrada($filtro, $dato)
    {
        if (preg_match("/^" . $filtro . "$/", $dato)) {
            return false;
        } else {
            return true;
        }
    }

    public function revisaUsuario($correo)
    {
        $sentencia = $this->db->prepare("SELECT idusuarios FROM `usuarios` WHERE correo = ? ;");
        $sentencia->execute([$correo]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function nuevo($nombre, $correo, $pass)
    {
        $sentencia = $this->db->prepare("INSERT INTO `usuarios` (nombre, correo, clave) VALUES (?, ?, ?) ;");
        $pass = password_hash(md5($pass), PASSWORD_DEFAULT);
        return $sentencia->execute([$nombre, $correo, $pass]);
    }

    public function actualizar($id, $nombre, $correo)
    {
        $sentencia = $this->db->prepare("UPDATE `usuarios` SET nombre = ?, correo = ? WHERE idusuarios = ? ;");
        return $sentencia->execute([$nombre, $correo, $id]);
    }

    public function todos()
    {
        $sentencia = $this->db->prepare("SELECT idusuarios, nombre, correo, estado FROM `usuarios`;");
        $sentencia->execute([]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }


    public function porId($id)
    {
        $sentencia = $this->db->prepare("SELECT idusuarios, nombre, correo FROM `usuarios` WHERE idusuarios = ? ;");
        $sentencia->execute([$id]);
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

    public function eliminar($id)
    {
        $sentencia = $this->db->prepare("UPDATE `usuarios` SET estado = ? WHERE idusuarios = ?;");
        return $sentencia->execute([0, $id]);
    }

    public function actualizaClave(int $id, string $password)
    {
        $pass = password_hash(md5($password), PASSWORD_DEFAULT);
        $request = $this->db->prepare("UPDATE `usuarios` SET clave = ? WHERE idusuarios = ?; ");
        $request->execute([$pass, $id]);
        return $request;
    }
}
