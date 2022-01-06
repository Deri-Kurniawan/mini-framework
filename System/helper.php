<?php
require_once APPPATH . 'Configs/App.php';

$GLOBALS['baseUrl'] = App::$BaseUrl;

if (!function_exists('addComponent')) {
  /**
   * include view file for templating system
   * it can be used on based App/Controller/$1 and App/Views/$1 file
   */
  function addComponent($view_file, $title = 'Title not set!')
  {
    include APPPATH . 'Views/' . pathFilter($view_file) . '.php';
  }
}

if (!function_exists('pathFilter')) {
  /**
   * Filter Path '.' and Replace To Directory Separator'/'
   */
  function pathFilter($string)
  {
    return str_replace('.', '/', $string);
  }
}

if (!function_exists('baseUrl')) {
  /**
   * Get your BaseUrl on App Configuration
   * @return String
   */
  function baseUrl(String $urlAfterBaseUrl = '')
  {
    $str = $GLOBALS['baseUrl'] . $urlAfterBaseUrl;
    return pathFilter($str);
  }
}

if (!function_exists('publicUrl')) {
  /**
   * Get your Public path for your assets
   * @return String
   */
  function publicUrl(String $urlAfterPublicUrl = '')
  {
    $str = $GLOBALS['baseUrl'] . PUBLICPATH . $urlAfterPublicUrl;
    return pathFilter($str);
  }
}

if (!function_exists('required')) {

  /**
   * @var folder value = 'c' | based on Controllers
   * @var folder value = 'm' | based on Models
   * @var folder value = 'v' | based on Views
   */
  function required(String $file, String $folder = "v")
  {
    $folder = strtolower($folder);

    if ($folder == 'c') {
      include APPPATH . 'Controllers/' . pathFilter($file) . '.php';
    } else
        if ($folder == 'm') {
      include APPPATH . 'Models/' . pathFilter($file) . '.php';
    }
    if ($folder == 'v') {
      include APPPATH . 'Views/' . pathFilter($file) . '.php';
    }
  }
}

if (!function_exists('redirect')) {
  /**
   * Redirect to $url on you application based on your BaseUrl Config
   */
  function redirect($url)
  {
    return header('location:' . $GLOBALS['baseUrl'] . $url);
  }
}

if (!function_exists('redirectOut')) {
  /**
   * Redirect Out Of Your Page Application
   */
  function redirectOut($url)
  {
    return header('location:' . $url);
  }
}

if (!function_exists('goBack')) {
  /**
   * Go To Previous Page
   */
  function goBack()
  {
    return isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $GLOBALS['baseUrl'];
  }
}

if (!function_exists('view')) {
  /**
   * Show Views
   */
  function view($file, $data = [])
  {
    extract($data);

    require_once APPPATH . 'Views/' . pathFilter($file) . '.php';
  }
}

if (!function_exists('d')) {
  /**
   * Dump Data
   */
  function d($data)
  {
    var_dump($data);
  }
}

if (!function_exists('dd')) {
  /**
   * Dump Data and Die
   */
  function dd($data)
  {
    var_dump($data);
    die;
  }
}

/**
 * Escaped data use htmlspecialchars function
 */
if (!function_exists('esc')) {
  function esc($data)
  {
    return htmlspecialchars($data);
  }
}