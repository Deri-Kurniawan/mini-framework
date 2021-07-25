<?php

included('BaseController', 'c');
included('UsersModel', 'm');

class Users extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $result = Database::connect()->query("SELECT * FROM users");
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
            Database::connect()->query("INSERT INTO users VALUES (null, '$name')");
            return redirect('users.index?status=1');
        }
    }

    public function delete($id)
    {
        Database::connect()->query("DELETE FROM users WHERE id=$id");
        return redirect('users');
    }

    public function detail($id)
    {
        $data = Database::connect()->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
        return view('users.detail', [
            'title' => $data['name'],
            'data'  => $data
        ]);
    }
}