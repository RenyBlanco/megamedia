<?php

defined('BASEPATH') || exit('No se permite acceso directo');

/**
 * Home Model
 */
class HomeModel extends Model
{
  /**
   * Inicia conexión DB
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Obtiene el usuario de la DB por ID
   */
  public function getUser($id)
  {
    return $this->db->query("SELECT * FROM `usuarios` WHERE `idusuarios` = $id")->fetch_array(MYSQLI_ASSOC);
  }

  public function getValores($id)
  {
    return $this->db->query("SELECT SUM(tipo_nota) FROM notas WHERE idusuarios = $id");
  }
}
