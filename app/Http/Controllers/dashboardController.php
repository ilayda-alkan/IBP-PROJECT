<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function login(){
        return view('Regestration.login');
    }
    public function users(){
        return view('pages.users');
    }
    public function blogs(){
        return view('pages.blogs');
    }
    public function categories(){
        return view('pages.categories');
    }
    public function addblog(){
        return view('pages.addblog');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
