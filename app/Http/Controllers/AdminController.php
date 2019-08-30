<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Console\MiddlewareMakeCommand;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('checkRole:admin');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function category(){
        return view('category');
    }
}
