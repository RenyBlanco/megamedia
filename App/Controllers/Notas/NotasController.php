<?php

defined('BASEPATH') || exit('No se permite acceso directo');

require_once ROOT . MODL . 'Notas/NotasModel.php';
require_once LIBS_ROUTE . 'Session.php';

/**
 * Controlador de Notas
 */
class NotasController extends Controller
{
    private $model;
    private $session;

    public function __construct()
    {
        $this->model = new NotasModel;
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
        $notas = $this->model->todos();
        $this->render(__CLASS__, $view, array('notas' => $notas, 'alert' => $alert));
    }

    public function guardarNota()
    {
        if (
            isset($_POST["titulo"]) && !empty($_POST["titulo"]) && isset($_POST["nota"])
            && !empty($_POST["nota"]) && isset($_POST["tipo_nota"])
        ) {
            $inserto = $this->model->nuevo($_POST["titulo"], $_POST["tipo_nota"], $_POST['nota'], $_POST["idUsuario"]);
            if ($inserto > 0) {
                $alert = 'registrado';
            } else {
                $alert = 'error1';
            }
        } else {
            $alert = 'error2';
        }
        header('location: ../Notas/?alert=' . $alert);
    }

    public function actualizarNota()
    {
        if (
            isset($_POST["titulo"]) && !empty($_POST["titulo"]) && isset($_POST["idnota"]) && isset($_POST["nota"])
            && isset($_POST["tipo_nota"])
        ) {
            $inserto = $this->model->actualizar($_POST["idnota"], $_POST["titulo"], $_POST['tipo_nota'], $_POST['nota']);
            if ($inserto > 0) {
                $alert = 'modificado';
            } else {
                $alert = 'error1';
            }
        } else {
            $alert = 'error2';
        }
        header('location: ../Notas/?alert=' . $alert);
    }

    public function eliminarNota()
    {
        $alert = '';
        if (isset($_POST["idnota"]) && !empty($_POST["idnota"])) {
            $this->model->eliminar($_POST["idnota"]);
            $alert = 'eliminado';
        }
        header('location: ../Notas/?alert=' . $alert);
    }

    public function nuevoNota()
    {
        $view = 'Crear';
        $this->render(__CLASS__, $view);
        exit();
    }

    public function editarNota()
    {
        if (isset($_POST["idnota"]) && !empty($_POST["idnota"])) {
            $nota = $this->model->porId($_POST['idnota']);
            $view = 'Editar';
            $this->render(__CLASS__, $view, array('nota' => $nota));
        }
        exit();
    }
}
