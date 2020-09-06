<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Beauty Match</title>
        <!-- cssをインポート -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

      @include('parts.header')
      @yield('content')
      @yield('product_add')
      @yield('product_index')
      @yield('product_show')
      @yield('product_edit')
      @yield('product_delete')
      @include('parts.footer')
      
      <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>