<?php

required('BaseController', 'c');

class Home extends BaseController
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    return view('welcome', ['title' => 'Welcome']);
  }

  public function goBack()
  {
    return goBack();
  }
}