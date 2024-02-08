<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view("user.home");
    }

    public function weddingPackage(){
        return view("user.wedding-package");
    }

    public function data(){
        return view("user.datatable");
    }
}
