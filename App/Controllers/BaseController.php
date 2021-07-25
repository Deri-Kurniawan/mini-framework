<?php

require_once 'System/Request.php';

class BaseController
{
    public $request;

    /**
     * use this parent::__construct(); to you controller __construct();
     * so you have access to request var and other
     */
    public function __construct()
    {
        $this->request = new Request;
    }

    /**
     * include view file for templating system
     * it can be used on based App/Controller/$1 and App/Views/$1 file
     */
    public function include($view_file)
    {
        include APPPATH . 'Views/' . $view_file . '.php';
    }
}