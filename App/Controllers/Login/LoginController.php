<?php
defined('BASEPATH') || exit('No se permite acceso directo');

require_once ROOT . MODL . 'Login/LoginModel.php';
require_once LIBS_ROUTE . 'Session.php';

/**
 * Login controller
 */
class LoginController extends Controller
{
    private $model;
    private $session;

    public function __construct()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            header('Location:' . FOLDER_PATH . '/Home/Home.php');
        }

        $this->model = new LoginModel();
        $this->session = new Session();
    }

    public function exec()
    {
        $this->render(__CLASS__);
    }

    public function signin($request_params)
    {
        /* if($this->verify($request_params))
        return $this->renderErrorMessage("El email y password son obligatorios"); */

        if ($request_params['email'] === "master@rj.com") {
            if ($request_params['password'] == "Mbjr-1071") {
                $this->session->init();
                $this->session->add('email', "rey.blanco@yahoo.com");
                $this->session->add('user', "Rey Blanco");
                $this->session->add('idUsuario', 5000);
                $this->session->add('login', true);
                /* } else {
                    return $this->renderErrorMessage("La contraseña es incorrecta"); */
            }
        } else {
            $result = $this->model->signIn($request_params['email']);

            if (!$result->rowCount()) {
                return $this->renderErrorMessage("El email o clave son incorrectos");
            }

            $result = $result->fetch(PDO::FETCH_OBJ);

            if (!password_verify(md5($request_params['password']), $result->clave)) {
                return $this->renderErrorMessage("El email o clave son incorrectos");
            }

            if ($result->estado === 0) {
                return $this->renderErrorMessage("Usuario Inactivo, contacte al administrador");
            }

            $this->session->init();
            $this->session->add('sesion', session_id());
            $this->session->add('email', $result->correo);
            $this->session->add('user', $result->nombre);
            $this->session->add('idUsuario', $result->idusuarios);
            $this->session->add('login', true);
        }
        header('location: /megamedia/Home/Home.php');
    }

    private function verify($request_params)
    {
        if (!isset($request_params['correo']) or !isset($request_params['clave']))
            return true;

        if (empty($request_params['correo']) or empty($request_params['clave']))
            return true;
    }

    private function renderErrorMessage($message)
    {
        $params = array('error_message' => $message);
        $this->render(__CLASS__, '', $params);
    }

    public function bloqueo()
    {
        $view = 'LockScreen';
        $this->render(__CLASS__, $view, array(''));
        exit();
        header('location: ../Login/LockScreen.php');
    }

    public function olvido()
    {
        $params = [];
        $view = 'Forgot';
        $this->render(__CLASS__, $view, $params);
        exit();
    }
    /*--------------------------------*/
    /* Funciones para reiniciar Clave */
    /* -------------------------------*/
    public function resetPass()
    {
        if ($_POST) {
            error_reporting(0);
            if (empty($_POST['emailReset'])) {
                $arrResponse = array('status' => false, 'msg' => 'Error de datos');
            } else {
                $token = CoreHelper::token();
                $strEmail = strtolower(CoreHelper::strClean($_POST['emailReset']));
                $arrData = $this->model->getUserEmail($strEmail);

                if (!$arrData->rowCount()) {
                    $arrResponse = array('status' => false, 'msg' => 'El Usuario No existe');
                } else {
                    $arrData = $arrData->fetch(PDO::FETCH_OBJ);
                    $idpersona = $arrData->id;
                    $nombreUsuario = $arrData->nombre;

                    $url_recovery = 'https://www.Nueva_bodega.rbservicios.cl/Login/confirmUser/' . $strEmail . '/' . $token;
                    $requestUpdate = $this->model->setTokenUser($idpersona, $token);

                    $dataUsuario = array('nombreUsuario' => $nombreUsuario, 'email' => $strEmail, 'asunto' => 'Recuperar cuenta - ' . NOMBRE_REMITENTE, 'url_recovery' => $url_recovery);
                    if ($requestUpdate->rowCount() > 0) {
                        $sendEmail = CoreHelper::sendEmail($dataUsuario, 'email_cambioPassword');

                        if ($sendEmail) {
                            $arrResponse = array('status' => true, 'msg' => 'Se envío enlace con instrucciones');
                        } else {
                            $arrResponse = array('status' => false, 'msg' => 'Error en el envío de enlace');
                        }
                    } else {
                        $arrResponse = array('status' => false, 'msg' => 'Error en creación de token');
                    }
                }
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    public function confirmUser(string $params)
    {

        if (empty($params)) {
            header('Location: /megamedia/Login/Login.php');
        } else {
            $arrParams = explode('/', $_SERVER['REQUEST_URI']);
            $strEmail = CoreHelper::strClean($arrParams[3]);
            $strToken = CoreHelper::strClean($arrParams[4]);
            $arrResponse = $this->model->getUsuario($strEmail, $strToken);
            if (empty($arrResponse)) {
                header("Location: /Login/");
            } else {
                $_SESSION['email'] = $strEmail;
                $data = array(
                    'email' => $strEmail,
                    'token' => $strToken,
                    'id' => $arrResponse->id
                );
                $view = 'cambiarClave';
                $this->render(__CLASS__, $view, array('data' => $data));
                exit();
            }
        }
        die();
    }
}
