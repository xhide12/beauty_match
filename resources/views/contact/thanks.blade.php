@extends('layouts.user.app')

@section('content')
<div>
 <div class="text-center">
    <h1 class="text-center mt-2 mb-5">お問い合わせ送信完了</h1>
    <p>お問い合わせありがとうございました。</p>
    <p>ご入力いただいた内容は正しく送信されました。</p><br><br>
    <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
 </div>
</div>

<br><br><br>
@endsection