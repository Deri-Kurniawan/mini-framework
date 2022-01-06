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

    return view('users.index', [
      'title' => 'Users Index',
      'data'  => $result
    ]);
  }

  public function form()
  {
    return view('users.form', ['title' => 'Add Form']);
  }

  public function save()
  {
    $name = $this->request->getPost('name');

    if ($name == null || $name == '') {
      return redirect('users.form?status=-1');
    } else {
      $this->UsersModel->saveUser($name);

      return redirect('users.index?status=1');
    }
  }

  public function delete($id)
  {
    $this->UsersModel->deleteUser($id);

    return redirect('users');
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