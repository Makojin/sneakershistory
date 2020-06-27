<!doctype html>
<html lang="{{app()->getlocale() }}">
    <head>
        <meta carset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/template.css') }}" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand"  href="home">スニヒス</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- Navbarの左側 --}}
                    <ul class="navbar-nav mr-auto">
                        {{-- Aboutとcontactへのリンク --}}
                        <li class="nav-item">
                           <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contact">Contact</a>
                        </li>
                    </ul>

                    {{-- Navbarの右側 --}}
                    <ul class="navbar-nav ml-auto">
                        {{-- 投稿ボタン --}}
                        <li class="nav-item">
                            <a href="{{ url('user/history/create') }}" id="new-post" class="btn btn-success">
                                {{ __('New Post') }}
                            </a>
                        </li>

                        {{-- 認証関連のリンク --}}
                        @guest
                            {{-- 「ログイン」と「ユーザー登録」へのリンク --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{'Login'}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{'ユーザー登録'}}</a>
                            </li>
                        @else
                            {{--プロフィールとログアウトのドロップダウンメニュー--}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                                    <a class="dropdown-item" href="{{ url('users/'.auth()->user()->id) }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-3">
                        <div class="sidebar_content">
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">YEARS</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                             <option>2020年</option>
                             <option>2019年</option>
                             <option>2018年</option>
                             <option>2017年</option>
                             <option>2016年</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">BLANDS</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                             <option>NIKE</option>
                             <option>ADIDAS</option>
                             <option>CONVERSE</option>
                             <option>VANS</option>
                            </select>
                        </div>
                        <div class="form-group">
                <label for="exampleFormControlInput1">FREEWORD</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="AirJodan">
        </div>
        <div class="col text-center">
                    <button type="button" class="btn btn-success">Search</button>
                </div>
                    </div>
                </div> 
            </div>
            @yield('content')
        </div>
        
        </div>
        
        <main>
           
        </main>
        
    </body>
      
    <footer class="footer">© 2020.Makojin</footer>
    
    
    
</html>
