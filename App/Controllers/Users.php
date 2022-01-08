<?php

required('BaseController', 'c');
required('UsersModel', 'm');

class Users extends BaseController
{
  private $UsersModel;

  public function __construct()
  {
    $this->UsersModel = new UsersModel;
    parent::__construct();
  }

  public function index()
  {
    $result = $this->UsersModel->getUsers();

    return view('users/index', [
      'title' => 'Users Index',
      'data'  => $result
    ]);
  }

  public function add()
  {
    return view('users.add', ['title' => 'Add User']);
  }

  public function save()
  {
    $this->request->methodPOST(function(){
      $name = $this->request->getPost('name');

      if ($name == null || $name == '') {
        return redirect('users.add?status=-1');
      } else {
        $this->UsersModel->saveUser($name);

        return redirect('users/index?status=1');
      }
    }, function(){
      return redirect('users');
    });
  }

  public function delete($id)
  {
    $this->request->methodPOST(function() {
      $this->UsersModel->deleteUser($id);
      return redirect('users');
    }, function() {
      return redirect('users');
    });
  }

  public function detail($id)
  {
    $data = $this->UsersModel->getUserById($id);

    return view('users.detail', [
      'title' => $data['name'],
      'data'  => $data
    ]);
  }
}