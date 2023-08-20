<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Ruangan;

class Admin extends BaseController
{
    public function index()
    {
        return view('beranda_Admin');
    }
    public function ruangan()
    {
        return view('ruangan/index');
    }
    // 
    public function login()
    {
        return view('login');
    }
}
