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
        return view('users.form');
    }

    public function save()
    {
        $name = $this->request->getVar('name');
        Database::connect()->query("INSERT INTO users VALUES (null, '$name')");
        return redirect('users.index');
    }



    public function delete($id)
    {
        Database::connect()->query("DELETE FROM users WHERE id=$id");
        return redirect('users');
    }
}