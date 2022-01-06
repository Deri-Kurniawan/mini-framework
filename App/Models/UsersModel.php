<?php
require_once SYSTEMPATH . 'Database.php';

class UsersModel extends Database
{
  private $table = 'users';

  public function getUsers()
  {
    return $this->connect()->query("SELECT * FROM {$this->table}");
  }

  public function saveUser($name)
  {
    return $this->connect()->query("INSERT INTO users VALUES (null, '$name')");
  }

  public function deleteUser($id)
  {
    return $this->connect()->query("DELETE FROM users WHERE id=$id");
  }

  public function getUserById($id)
  {
    return $this->connect()->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
  }
}