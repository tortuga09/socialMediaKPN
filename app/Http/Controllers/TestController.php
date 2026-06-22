<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $name = 'Kamal Norizan';
        $phone = '012-3456789';
        $email = 'kamal@example.com';

        return view('helloworld',compact('name','phone','email'));
    }
}
