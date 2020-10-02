@extends('layouts.user.app')

@section('content')

<div class="container">

 <div class="row">
        <div class="col-xs-12"><img class="img-fluid thanks" src="../image/thanks_banner.jpg"></div>
	</div>

 <div class="text-center">
   <h4 class="font-weight-bold">当サイトのご利用ありがとうございます。</h4>
   <h6 class="font-weight-bold">My Pageからチャット画面にアクセスが可能です。</h6>
   <h6 class="font-weight-bold">ブランド担当者からの返答をお待ちください</h6>
   <br><br>

   <a type="submit" class="btn btn-primary" href="{{ route('user.home') }}">My Page</a>
   <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
  </div>
</div>

<br><br><br>

@endsection
