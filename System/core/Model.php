<?php

defined('BASEPATH') || exit('No se permite acceso directo');

/**
 * Modelo base
 */
class Model
{
    /**
     * @var object
     */
    protected $db;

    /**
     * Inicializa conexion de la base de datos
     */
    public function __construct()
    {
        try {
            $this->db = new pdo('mysql:host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8', USER, PASSWORD, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false
            ));
        } catch (PDOException $e) {
            $this->db = 'Error en la conexión de la BBDD ' . DB_NAME;
            echo 'Error: ' . $e->getMessage();
        }
    }

    /* Funcion para encriptar */
    public function encryption($string)
    {
        $output = false;
        $key = hash('sha256', KEY);
        $iv = substr(hash('sha256', IV), 0, 16);
        $output = openssl_encrypt($string, METODO, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }

    /* Funcion para desencriptar */
    protected static function decryption($string)
    {
        $key = hash('sha256', KEY);
        $iv = substr(hash('sha256', IV), 0, 16);

        return openssl_decrypt(base64_decode($string), METODO, $key, 0, $iv);
    }

    /**
     * Finaliza conexion
     */
    public function __destruct()
    {
        $this->db = null;
    }
}
