<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
         return view('welcome');
    }
    public function about() {
         return'About Us';
    }
    public function contact() {
         return'tiaindriani30gmail.com';
    }
}
