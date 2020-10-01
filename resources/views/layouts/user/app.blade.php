<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'beauty match') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    .cover-img {
	height: 600px;
	display: table;
	width: 100%;
	background-size: cover;
    }

    /* ワイドスクリーン用のCSS */
    @media only screen and (min-width: 1500px) {
        .cover-img {
            height: 800px;
        }
    }

    /* タブレット用のCSS */
    @media only screen and (min-width : 768px) and (max-width : 1200px) {
        .cover-img {
            height: 500px;
        }
    }

    /* スマホ用のCSS */
    @media only screen and (max-width: 479px) {
        .cover-img {
            height: 300px;
        }
    }

    .cover-text {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }
    

    /* ヘッダー固定による上部の間隔をあける */
    body {
        margin-top: 50px;
    }

    /*1.フェードインアニメーションの指定*/
    .scrollanime {opacity: 0;} /*一瞬表示されるのを防ぐ*/
    .fadeInDown {
        animation-name: fadeInDown;
        animation-duration: 3s;
        animation-fill-mode: forwards;
    }
    @keyframes fadeInDown {
        0% {
            opacity: 0;         
        }
        100% {
        opacity: 1;
        transform: translate(0);
        }
    }
 
    /*2.上下の動きを指定*/
    .downup {transform: translateY(100px);}


    .img-thumbnail {
        object-fit: cover;
        width: 50px;
        height: 50px;
    }

    .img-show {
        object-fit: cover;
        width: 600px;
        height: 600px;
    }

    ul {
       list-style: none;
    }

    .product_bannar{
        padding-bottom:50px
    }

    .thanks {
        padding-bottom:50px 
    }

    </style>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
</script>

    <script>
        $(function () {
            $(window).scroll(function () {
                const wHeight = $(window).height();
                const scrollAmount = $(window).scrollTop();
                $('.scrollanime').each(function () {
                    const targetPosition = $(this).offset().top;
                    if(scrollAmount > targetPosition - wHeight + 60) {
                        $(this).addClass("fadeInDown");
                    }
                });
            });
        });
    
    </script>
    
    <script>
    $(function() {
        $('html,body').animate({ scrollTop: 0 }, '1');
    });
    </script>	

</head>


<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-danger shadow-sm">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
                    {{ config('app.name', 'Beauty Match') }}
                <!-- <img src="image/header_logo.png" alt="logo"> -->
                </a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse font-weight-bold" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @unless (Auth::guard('user')->check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('user.register'))
                                <li class="nav-item menu">
                                    <a class="nav-link" href="{{ route('user.register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('user')->user()->name }} <span class="caret"></span>
                                </a>



                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('user.home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('mypage').submit();">
                                        {{ __('マイページ') }}
                                    </a>
                                    <form id="mypage" action="{{ route('user.home') }}" method="get" style="display: none;">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('user.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
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
            @yield('user.home')
            @yield('user.logout')
            @yield('user.edit')
            <!-- @yield('user.update') -->
            @yield('user_delete')
            @yield('user_remove')
            @yield('manufacture.home')
            @yield('manufacture.edit')
            @yield('manufacture_delete')
            @yield('user.introduction')
            @include('parts.footer')
        </main>
    </div>
</body>
</html>