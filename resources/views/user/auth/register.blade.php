@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('新規登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名　前') }}<span class="badge badge-danger ml-1">必須</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="salon_name" class="col-md-4 col-form-label text-md-right">{{ __('サロン名') }}<span class="badge badge-danger ml-1">必須</span></label>

                            <div class="col-md-6">
                                <input id="salon_name" type="salon_name" class="form-control @error('salon_name') is-invalid @enderror" name="salon_name" value="{{ old('salon_name') }}" required autocomplete="salon_name">

                                @error('salon_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="salon_url" class="col-md-4 col-form-label text-md-right">{{ __('サロンURL') }}</label>

                            <div class="col-md-6">
                                <input id="salon_url" type="salon_url" class="form-control @error('salon_url') is-invalid @enderror" name="salon_url" value="{{ old('salon_url') }}" autocomplete="salon_url">

                                @error('salon_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="business_form" class="col-md-4 col-form-label text-md-right">{{ __('営業形態') }}</label>

                            <div class="col-md-6">
                                <input id="business_form" type="business_form" class="form-control @error('business_form') is-invalid @enderror" name="business_form" value="{{ old('business_form') }}" autocomplete="business_form">

                                @error('business_form')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="customer" class="col-md-4 col-form-label text-md-right">{{ __('紹介可能人数') }}<span class="badge badge-danger ml-1">必須</span></label>

                            <div class="col-md-6">
                                <input id="customer" type="customer" class="form-control @error('customer') is-invalid @enderror" name="customer" value="{{ old('customer') }}" required autocomplete="customer">

                                @error('customer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><p>*数字のみ入力</p>
                        </div>

                        <div class="form-group row">
                            <label for="monthly_sales" class="col-md-4 col-form-label text-md-right">{{ __('月間売上(円)') }}</label>

                            <div class="col-md-6">
                                <input id="monthly_sales" type="monthly_sales" class="form-control @error('monthly_sales') is-invalid @enderror" name="monthly_sales" value="{{ old('monthly_sales') }}" autocomplete="monthly_sales">

                                @error('monthly_sales')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><p>*数字のみ入力</p>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="living_area" class="col-md-4 col-form-label text-md-right">{{ __('お住まいの地域') }}</label>

                            <div class="col-md-6">
                                <input id="living_area" type="living_area" class="form-control @error('living_area') is-invalid @enderror" name="living_area" value="{{ old('living_area') }}" autocomplete="living_area">

                                @error('living_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="facebook_id" class="col-md-4 col-form-label text-md-right">{{ __('Facebook ID') }}</label>

                            <div class="col-md-6">
                                <input id="facebook_id" type="facebook_id" class="form-control @error('facebook_id') is-invalid @enderror" name="facebook_id" value="{{ old('facebook_id') }}" autocomplete="facebook_id">

                                @error('facebook_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram_id" class="col-md-4 col-form-label text-md-right">{{ __('Instagram ID') }}<span class="badge badge-danger ml-1">必須</span></label>

                            <div class="col-md-6">
                                <input id="instagram_id" type="instagram_id" class="form-control @error('instagram_id') is-invalid @enderror" name="instagram_id" value="{{ old('instagram_id') }}" required autocomplete="instagram_id">

                                @error('instagram_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail アドレス') }}<span class="badge badge-danger ml-1">必須</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}<span class="badge badge-danger ml-1">必須</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード再入力') }}<span class="badge badge-danger ml-1">必須</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                                <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection