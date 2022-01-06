<?php

require_once SYSTEMPATH . 'Request.php';
require_once SYSTEMPATH . 'Database.php';

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
   * set default index if controller index not found
   */
  public function index()
  {
    // 
  }
}
