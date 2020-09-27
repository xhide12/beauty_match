@extends('layouts.default')

@section('title','contact')

@section('content')
<div class="row">
    <h1>お問い合わせ</h1>
</div>
<div class="row">
    <form action="contact/confirm" method="post">
    @csrf
    <div class="form-group">
        <label for="InputEmail">メールアドレス</label>
        <input type="email" name="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
        @if($errors->has('email'))
            <p class="text-danger">{{ $errors->first('email')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="InputSubject">件名</label>
        <input type="text" name="subject" class="form-control" id="InputSubject" value="{{ old('subject') }}">
        @if($errors->has('subject'))
            <p class="text-danger">{{ $errors->first('subject')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="InputMessage">メッセージ</label>
        <textarea name="message" id="InputMessage" class="form-control" cols="40" rows="4">
        {{ old('message') }}
        </textarea>
        @if($errors->has('message'))
            <p class="text-danger">{{ $errors->first('message')}}</p>
        @endif
    </div>
    <button type="submit" name="action" class="btn btn-primary" value="sent">送信する</button>
    </form>
</div>
@endsection