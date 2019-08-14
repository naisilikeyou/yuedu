<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('author.index.index');
    }

    public function welcome()
    {
        return view('author.index.welcome');
    }
    public function login()
    {
        return view('author.login.login');
    }
}
