@extends('layouts.user.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>

    <div class="container">
        <form action="contact/confirm" method="post">
        @csrf

        <div class="form-group row">
            <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">必須</span></p>
            <div class="col-sm-8">
            <input type="contact_name" name="contact_name" class="form-control" id="InputEmail" value="{{ old('contact_name') }}">
            @if($errors->has('contact_name'))
                <p class="text-danger">{{ $errors->first('contact_name')}}</p>
            @endif
            </div>
        </div>

        <div class="form-group row">
            <p class="col-sm-4 col-form-label">会社名</p>
            <div class="col-sm-8">
            <input type="contact_company" name="contact_company" class="form-control" id="InputEmail" value="{{ old('contact_company') }}">
            @if($errors->has('contact_company'))
                <p class="text-danger">{{ $errors->first('contact_company')}}</p>
            @endif
            </div>
        </div>

        <div class="form-group row">
            <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
            <div class="col-sm-8">
            <input type="email" name="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
            @if($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email')}}</p>
            @endif
            </div>
        </div>

        <div class="form-group row">
            <p class="col-sm-4 col-form-label">件名<span class="badge badge-danger ml-1">必須</span></p>
            <div class="col-sm-8">
                <input type="text" name="subject" class="form-control" id="InputSubject" value="{{ old('subject') }}">
                @if($errors->has('subject'))
                    <p class="text-danger">{{ $errors->first('subject')}}</p>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
            <div class="col-sm-8">
            <textarea name="message" id="InputMessage" class="form-control" cols="40" rows="4">{{ old('message') }}</textarea>
            @if($errors->has('message'))
                <p class="text-danger">{{ $errors->first('message')}}</p>
            @endif
            </div>
        </div>
        <div class="text-center">
        <button type="submit" name="action" class="btn btn-primary" value="sent">送信</button>
        <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
        </div>
        </form>
    </div>
</div>
<br><br><br>
<div class="container-fluid text-center text-muted">
    <div class="row">
    <div class="col text-right">
        <img src="image/phone_small.png" alt="" >
        </div>
        <div class="col text-left">
        <br>
        <h4>お電話はこちら</h4>
        <h3>090-4936-6218</h3>
        <p>受付時間：00：00～24：00（土日祝もOK!）</p>
        </div>

    </div>
</div>
<br><br><br>

@endsection