<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //
    public function add()
    {
        return view('/home');
    }
    
    public function create()
    {//投稿画面
        return view('user/history/create');
    }
    
    public function index()
    {//投稿一覧画面
        return  view('user/history/index');
    }
    
    
    
    public function edit()
    {//投稿編集画面
        return view('user/history/edit');
    }
    
    public function detaile()
    {
        return view('user/history/detaile');
    }
    
    
   

    
    
    
}