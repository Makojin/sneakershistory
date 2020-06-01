<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function search()
    {//検索結果一覧画面
        return view('history/search');
    }
    
     public function detaile()
    {//投稿詳細画面
        return view('history/detaile');
    
    }
    
    public function about()
    {
        return view('about');
    }

}
