<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    /**
     * 首页轮播图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index()
    {
        $data=DB::table('rpamp')->limit(6)->get();
        return view('index.index.index',['data'=>$data]);
    }

    public function login()
    {
        return view('index.index.login');
    }
}
