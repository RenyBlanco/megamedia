<?php

defined('BASEPATH') || exit('No se permite acceso directo');

require_once ROOT . MODL . 'Usuarios/UsuariosModel.php';
require_once LIBS_ROUTE . 'Session.php';

/**
 * Controlador de Usuarios
 */
class UsuariosController extends Controller
{
    private $model;
    private $session;

    public function __construct()
    {
        $this->model = new UsuariosModel;
        $this->session = new Session();
        $this->session->init();

        if ($this->session->getStatus() === 1 || empty($this->session->get('email')))
            exit('Acceso denegado');
    }

    public function exec()
    {
        $this->show();
    }

    public function show($view = '', $alert = '')
    {
        $usuarios = $this->model->todos();
        $this->render(__CLASS__, $view, array('usuarios' => $usuarios, 'alert' => $alert));
    }

    public function perfil()
    {
        $view = 'Perfil';
        $this->render(__CLASS__, $view);
        exit();
    }

    public function guardarUsuario()
    {
        if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["correo"])) {
            $existe = $this->model->revisaUsuario($_POST["correo"]);
            if (!$existe) {
                $inserto = $this->model->nuevo($_POST["nombre"], $_POST["correo"], $_POST['pass']);
                if ($inserto > 0) {
                    $alert = 'registrado';
                } else {
                    $alert = 'error1';
                }
            } else {
                $alert = 'errorE';
            }
        } else {
            $alert = 'error2';
        }
        header('location: ../Usuarios/?alert=' . $alert);
    }

    public function actualizarUsuario()
    {
        if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["id"]) && isset($_POST["correo"])) {
            $inserto = $this->model->actualizar($_POST["id"], $_POST["nombre"], $_POST['correo']);
            if ($inserto > 0) {
                $alert = 'modificado';
            } else {
                $alert = 'error1';
            }
        } else {
            $alert = 'error2';
        }
        header('location: ../Usuarios/?alert=' . $alert);
    }

    public function eliminarUsuario()
    {
        $alert = '';
        if (isset($_POST["id"]) && !empty($_POST["id"])) {
            $this->model->eliminar($_POST["id"]);
            $alert = 'eliminado';
        }
        header('location: ../Usuarios/?alert=' . $alert);
    }

    public function nuevoUsuario()
    {
        $view = 'Crear';
        $this->render(__CLASS__, $view);
        exit();
    }

    public function editarUsuario()
    {
        if (isset($_POST["id"]) && !empty($_POST["id"])) {
            $usuario = $this->model->porId($_POST['id']);
            $view = 'Editar';
            $this->render(__CLASS__, $view, array('usuario' => $usuario));
        }
        exit();
    }

    public function setPassword()
    {
        if (empty($_POST['clave1']) || empty($_POST['clave2'])) {
            $arrResponse = array('status' => false, 'msg' => 'Error de datos, Algún campo vacio');
        } else {
            if (!empty($_POST['idUsuario'])) {
                $idUsuario = $_POST['idUsuario'];
            } else {
                $idUsuario = $_SESSION['idUsuario'];
            }
            $strPassword = $_POST['clave1'];
            $strPasswordConfirm = $_POST['clave2'];
            if ($strPassword != $strPasswordConfirm) {
                $arrResponse = array('status' => false, 'msg' => 'Las contraseñas no son iguales.');
            } else {
                $requestPass = $this->model->actualizaClave($idUsuario, $strPassword);
                if ($requestPass->rowCount() > 0) {
                    $arrResponse = array('status' => true, 'msg' => 'Clave reiniciada con éxito!');
                } else {
                    $arrResponse = array('status' => false, 'msg' => 'No es posible realizar el proceso, intente más tarde.');
                }
            }
        }
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        die();
    }
}
