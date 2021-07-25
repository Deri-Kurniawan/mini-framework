<?php

included('BaseController', 'c');

class Home extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo goBack();
        return view('welcome', ['title' => 'Welcome']);
    }

    public function test()
    {
        $data = [
            'post' => $this->request->getPost('name'),
            'get' => $this->request->getGet('name'),
            'var' => $this->request->getVar('name'),
        ];

        var_dump($data);
    }

    public function form()
    {
        return view('form');
    }
}