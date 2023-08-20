<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('beranda_User');
    }
    public function ruangan()
    {
        return view('ruangan/index');
    }
    public function login()
    {
        return view('login');
    }
}
