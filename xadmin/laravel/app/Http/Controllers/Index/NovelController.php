<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NovelController extends Controller
{
    //
    public function index()
    {

    }
    public function nindex()
    {
        return view('admin/novel');
    }

}
