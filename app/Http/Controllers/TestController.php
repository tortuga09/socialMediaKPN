<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $user = User::first();
        $name = $user->name;
        $phone = $user->phone;
        $email = $user->email;


        return view('helloworld',compact('name','phone','email'));
    }
}
