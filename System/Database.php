<?php

require_once APPPATH . 'Configs/App.php';

/**
 * Database Class
 */
class Database
{
  /**
   * Connect To Database
   */
  public static function connect()
  {
    return mysqli_connect(App::$DBHost, App::$DBUser, App::$DBpass, App::$DBName);
  }

  /**
   * Create New Connection To Database
   */
  public static function newConnect(String $DBHost, String $DBUser, String $DBpass, String $DBName)
  {
    return mysqli_connect($DBHost, $DBUser, $DBpass, $DBName);
  }

  /**
   * Query method
   */
  public function query(String $query)
  {
    return self::connect()->query($query);
  }

  public function findAll($table, $limit = 100, $offset = 0)
  {
    return $this->query("SELECT * FROM $table LIMIT $limit, $offset")->fetch_assoc();
  }
}