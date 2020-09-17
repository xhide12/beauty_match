@extends('layouts.user.app')

@section('content')

<div class="container">
<p>当サイトのご利用ありがとうございます。</p>
<p>My Pageからチャット画面にアクセスしてください。</p>

<a type="submit" class="btn btn-primary" href="{{ route('user.home') }}">My Pageへ</a>
</div>

@endsection
