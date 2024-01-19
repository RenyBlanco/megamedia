<?php
defined('BASEPATH') or exit('No se permite acceso directo');

class NotasModel extends Model
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

    public function nuevo($titulo, $tipo_nota, $nota, $idUsuario)
    {
        $sentencia = $this->db->prepare("INSERT INTO `notas` (titulo, tipo_nota, nota, idusuarios) VALUES (?, ?, ?, ?) ;");
        return $sentencia->execute([$titulo, $tipo_nota, $nota, $idUsuario]);
    }

    public function actualizar($id, $titulo, $tipo_nota, $nota)
    {
        $sentencia = $this->db->prepare("UPDATE `notas` SET titulo = ?, tipo_nota = ?, nota = ? WHERE idnotas = ? ;");
        return $sentencia->execute([$titulo, $tipo_nota, $nota, $id]);
    }

    public function todos()
    {
        $sentencia = $this->db->prepare("SELECT idnotas, user.nombre, titulo, tipo_nota, nota, fecha FROM `notas`
        INNER JOIN usuarios AS user ON user.idusuarios = notas.idusuarios
        WHERE notas.estado != 0;");
        $sentencia->execute([]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }


    public function porId($id)
    {
        $sentencia = $this->db->prepare("SELECT idnotas, user.nombre, titulo, nota, tipo_nota, fecha FROM `notas` 
        INNER JOIN usuarios AS user ON user.idusuarios = notas.idusuarios 
        WHERE idnotas = ? ;");
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function eliminar($id)
    {
        $sentencia = $this->db->prepare("UPDATE `notas` SET estado = ? WHERE idnotas = ?;");
        return $sentencia->execute([0, $id]);
    }
}
