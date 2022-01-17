<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $this->param['title'] = 'Home';
        return view('user.home', $this->param);
    }
}
