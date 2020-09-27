<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    body {
        margin-top: 50px;
    }

    ul {
       list-style: none;
    }
    
    </style>

    <script>
    $(function() {
        $('html,body').animate({ scrollTop: 0 }, '1');
    });
    </script>	

</head>


<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-info shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Beauty Match') }}
                    <!-- <img src="image/logo.png" alt="logo"> -->
                </a>
                
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @unless (Auth::guard('manufacture')->check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manufacture.login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('manufacture.register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('manufacture.register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('manufacture')->user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('manufacture.home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('mypage').submit();">
                                        {{ __('マイページ') }}
                                    </a>
                                    <form id="mypage" action="{{ route('manufacture.home') }}" method="get" style="display: none;">
                                        @csrf
                                    </form>


                                    <a class="dropdown-item" href="{{ route('manufacture.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('manufacture.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endunless
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
            <!-- @include('parts.header') -->
            @yield('product_add')
            @yield('product_index')
            @yield('product_show')
            @yield('product_edit')
            @yield('product_delete')
            @yield('chat.index')            
            <!-- @yield('user.home') -->
            @yield('user.logout')
            @yield('user.edit')
            <!-- @yield('user.update') -->
            @yield('user_delete')
            @yield('user_remove')
            @yield('manufacture.home')
            @yield('manufacture.edit')
            @yield('manufacture_delete')
            <!-- @yield('user.introduction') -->
            @include('parts.footer')

        </main>
    </div>
</body>
</html>