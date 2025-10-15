<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Hello World!';
    }

    public function registerUser(Request $request)
    {
        return view("user.register");
    }

    public function storeUser()
    {

    }

    public function authUser()
    {
        
    }
}