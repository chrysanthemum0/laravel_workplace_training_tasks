<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        //return view('home.index');
        $loginuser = \Auth::user(); // 로그인 유저 정보 가져오기
        return view('home.index', ['login_user' => $loginuser]);
    }

    public function edit(){
        return view('home.edit');
    }

}
