<?php
require_once SYSTEMPATH . 'helper.php';
require_once SYSTEMPATH . 'init.php';

/**
 * App Ingiter and Configuration
 */

class App
{
  /**
   * Your Base Url
   */
  public static $BaseUrl = 'http://localhost/mini-framework/';

  /**
   * Your Default Controller
   */
  public static $DefaultController = 'Users';

  /**
   * Your Default Method
   */
  public static $DefaultMethod     = 'index';

  /**
   * Database Configuration
   */
  public static $DBHost  = 'localhost';
  public static $DBName  = 'mini-framework';
  public static $DBUser  = 'root';
  public static $DBpass  = '';

  /**
   * Application Ignitor
   */
  public static function start()
  {
    /**
     * App main requirements
     * if all your own file writed here, it will included on your system
     * like helper, $var or other what do you want :D
     * and you can use it on your app workspace
     */

    /**
     * Start Routing Manipulation
     */
    new Route();
  }
}
/**
 * Starting Gobal Session
 */
session_start();

/**
 * Starting your application
 * if you comment this
 * your app will not showing
 */
App::start();
