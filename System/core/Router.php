<?php

defined('BASEPATH') || exit('No se permite acceso directo');

/**
 * Identificacion de la URI
 */
class Router
{
    public $uri;
    public $controller;
    public $method;
    public $param;

    /**
     * Inicializa los atributos
     */
    public function __construct()
    {
        $this->setUri();
        $this->setController();
        $this->setMethod();
        $this->setParam();
    }

    /**
     * Asigna la URI completa
     */
    public function setUri()
    {
        $this->uri = explode('/', URI);
    }

    /**
     *Asigna el nombre del controlador
     */
    public function setController()
    {
        $this->controller = $this->uri[2] === '' ? DEFAULT_CONTROLLER : $this->uri[2];
    }

    /**
     * Asigna el nombre del metodo
     */
    public function setMethod()
    {
        $this->method = !empty($this->uri[3]) ? $this->uri[3] : 'exec';
    }

    /**
     * Asigna el valor del parametro si existe segun el metodo de peticion
     */
    public function setParam()
    {
        if (REQUEST_METHOD === 'POST') {
            $this->param = $_POST;
        } elseif (REQUEST_METHOD === 'GET') {
            $this->param = !empty($this->uri[4]) ? $this->uri[4] : '';
        }
    }

    /**
     * @return $uri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return $controller
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return $method
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return $param
     */
    public function getParam()
    {
        return $this->param;
    }
}
