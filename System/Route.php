<?php

require_once APPPATH . 'Configs/App.php';

class Route
{
  /**
   * Set Default Controller
   */
  private $Controller;

  /**
   * Set Default Method
   */
  private $Method;

  /**
   * Prepare Params Property
   */
  private $params     = [];

  public function __construct()
  {
    /**
     * Set Default Controller and method on App Config
     */
    $this->Controller = App::$DefaultController;
    $this->Method     = App::$DefaultMethod;

    /**
     * Explode Url and Filter sanitize url special char
     */
    $url = explode('/', filter_var(
      isset($_GET['url']) ? str_replace('//', '/', $_GET['url']) : [],
      FILTER_SANITIZE_URL
    ));

    /**
     * set value of default controller and method
     */
    $this->Controller = key_exists(0, $url) && $url[0] !== "" ? $url[0] : $this->Controller;
    $this->Method     = key_exists(1, $url) && $url[1] !== "" ? $url[1] : $this->Method;

    /**
     * requiring dynamic file
     */
    try {
      if (file_exists(APPPATH . 'Controllers/' . $this->Controller . '.php')) {
        require_once APPPATH . 'Controllers/' . $this->Controller . '.php';
      } else {
        throw new Exception("You sent request to get controller \"{$this->Controller}\" but it\"s not found on your \"" . APPPATH . "\"Controllers/" . $this->Controller . ".php\" path");
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      die;
    }

    $oldControllerName = $this->Controller;

    /**
     * assign route property to be an object property
     */
    $this->Controller = new $this->Controller;

    /**
     * unset unused array to create params
     * unset controller index and method index
     */
    unset($url[0]);
    unset($url[1]);

    /**
     * asign params property by url has unseted index 0 & 1
     */
    $this->params = $url;

    /**
     * call controllers and method
     * and assign params to controller
     * if method on an controller needed params
     */
    try {
      call_user_func_array([$this->Controller, $this->Method], $this->params);
    } catch (Error $e) {
      echo "\"{$oldControllerName}\" controller do not have method \"{$this->Method}()\"";
    }
  }
}