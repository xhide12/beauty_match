@extends('layouts.user.app')

@section('content')

<div class="container">
    <h1 class="text-center mt-2 mb-5">お問い合わせ内容の確認</h1>
</div>

<div class="container">
<div class="text-center">
     <p>下記、お問い合わせ内容にて送信します。よろしければ「送信」ボタンを押して下さい。</p>

     <div class="form-group row text-right">
      <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">必須</span></p>
      <div class="col-sm-8 text-left">
      {{ $contact_name }}
      </div>
     </div>

     <div class="form-group row text-right">
      <p class="col-sm-4 col-form-label">会社名</p>
      <div class="col-sm-8 text-left">
      {{ $contact_company }}
      </div>
     </div>

     <div class="form-group row text-right">
      <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
      <div class="col-sm-8 text-left">
      {{ $email }}
      </div>
     </div>

     <div class="form-group row text-right">
      <p class="col-sm-4 col-form-label">件名<span class="badge badge-danger ml-1">必須</span></p>
      <div class="col-sm-8 text-left">
      {{ $subject }}
      </div>
     </div>

     <div class="form-group row text-right">
      <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
      <div class="col-sm-8 text-left">
      {!! nl2br(e($message)) !!}
      </div>
     </div>

     <div class="text-center">
     <form action="sent" method="post">
        <input type="hidden" name="contact_name" class="form-control" id="InputEmail" value="{{ $contact_name }}">
        <input type="hidden" name="contact_company" class="form-control" id="InputEmail" value="{{ $contact_company }}">
        <input type="hidden" name="email" class="form-control" id="InputEmail" value="{{ $email }}">
        <input type="hidden" name="subject" class="form-control" id="InputSubject" value="{{ $subject }}">
        <input type="hidden" name="message" class="form-control" id="InputMessage" value="{{ $message }}">
        @csrf
        <button type="submit" name="action" class="btn btn-primary" value="sent">送信</button>
        <button type="submit" name="action" class="btn btn-primary" value="back">戻る</button>
     </form>
     </div>
 </div>
</div>
<br><br><br>

@endsection