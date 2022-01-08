<?php

class Request
{
  /**
   * get data value on form of any method
   */
  public function getVar($data)
  {
    return isset($_REQUEST[$data]) ? $_REQUEST[$data] : null;
  }

  /**
   * only get data value on get method
   */
  public function getGet($data)
  {
    return isset($_GET[$data]) ? $_GET[$data] : null;
  }

  /**
   * only get data value on post method
   */
  public function getPost($data)
  {
    return isset($_POST[$data]) ? $_POST[$data] : null;
  }

  /**
   * only get data value on form input files type
   */
  public function getFiles($data)
  {
    return isset($_FILES[$data]) ? $_FILES[$data] : null;
  }

  /**
   * only receive GET method
   */
  public function methodGET($callback, $callbackError = null)
  {
    if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET') {
      $callback();
    } else {
      if (!empty($callbackError)) {
        $callbackError();
      } else {
        $callbackError();
      }
    }
  }

  /**
   * only receive POST method
   */
  public function methodPOST($callback, $callbackError = null)
  {
    if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
      $callback();
    } else {
      if (!empty($callbackError)) {
        $callbackError();
      } else {
        $callbackError();
      }
    }
  }
}