<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $this->param['title'] = 'Dashboard';

        return view('admin/dashboard', $this->param);
    }

    
}
