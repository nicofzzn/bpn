<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function buatberita()
    {
        return view('admin.buatberita');
    }
}
