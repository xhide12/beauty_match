@extends('layouts.common')

@section('content')
<h1>商品登録</h1>

<!-- <form action="{{ route('product_create') }}" method="post">
@csrf
  <input type="text" name="brand">
  <input type="text" name="product_name">
  <input type="text" name="category">
  <input type="text" name="size">
  <input type="text" name="manufacture">
  <input type="text" name="image1" value="aaa.jpg">
  <input type="text" name="image2" value="bbb.jpg">
  <input type="text" name="image3" value="ccc.jpg">
  <input type="text" name="image4" value="ddd.jpg">
  <input type="text" name="product_coment">
  <input type="text" name="composition">
  <input type="text" name="official_hp">
  <input type="text" name="official_instagram">
  <button type="submit">送信</button>

</form> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('商品登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product_create') }}"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('ブランド名') }}</label>

                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ old('brand') }}" required autocomplete="brand" autofocus>

                                @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('商品名') }}</label>

                            <div class="col-md-6">
                                <input id="product_name" type="product_name" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name">

                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('商品カテゴリー') }}</label>

                            <div class="col-md-6">
                                <input id="category" type="category" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category">

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="size" class="col-md-4 col-form-label text-md-right">{{ __('サイズ') }}</label>

                            <div class="col-md-6">
                                <input id="size" type="size" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size') }}" required autocomplete="size">

                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="manufacture" class="col-md-4 col-form-label text-md-right">{{ __('メーカー名') }}</label>

                            <div class="col-md-6">
                                <input id="manufacture" type="manufacture" class="form-control @error('manufacture') is-invalid @enderror" name="manufacture" value="{{ old('manufacture') }}" required autocomplete="manufacture">

                                @error('manufacture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image1" class="col-md-4 col-form-label text-md-right">{{ __('画像１') }}</label>

                            <div class="col-md-6">
                                <input id="image1" type="file" class="form-control @error('image1') is-invalid @enderror" name="image1" required autocomplete="image1" value="aaa.jpg">

                                @error('image1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image2" class="col-md-4 col-form-label text-md-right">{{ __('画像２') }}</label>

                            <div class="col-md-6">
                                <input id="image2" type="image2" class="form-control @error('image2') is-invalid @enderror" name="image2" required autocomplete="image2" value="bbb.jpg">

                                @error('image2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image3" class="col-md-4 col-form-label text-md-right">{{ __('画像３') }}</label>

                            <div class="col-md-6">
                                <input id="image3" type="image3" class="form-control @error('image3') is-invalid @enderror" name="image3" required autocomplete="image3" value="ccc.jpg">

                                @error('image3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="image4" class="col-md-4 col-form-label text-md-right">{{ __('画像４') }}</label>

                            <div class="col-md-6">
                                <input id="image4" type="image4" class="form-control @error('image4') is-invalid @enderror" name="image4" required autocomplete="image4" value="ddd.jpg">

                                @error('image4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_coment" class="col-md-4 col-form-label text-md-right">{{ __('商品説明') }}</label>

                            <div class="col-md-6">
                                <input id="product_coment" type="product_coment" class="form-control @error('product_coment') is-invalid @enderror" name="product_coment" required autocomplete="product_coment">

                                @error('product_coment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="composition" class="col-md-4 col-form-label text-md-right">{{ __('成分・原材料') }}</label>

                            <div class="col-md-6">
                                <input id="composition" type="composition" class="form-control @error('composition') is-invalid @enderror" name="composition" required autocomplete="composition">

                                @error('composition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="official_hp" class="col-md-4 col-form-label text-md-right">{{ __('オフィシャルHP') }}</label>

                            <div class="col-md-6">
                                <input id="official_hp" type="official_hp" class="form-control @error('official_hp') is-invalid @enderror" name="official_hp" required autocomplete="official_hp">

                                @error('official_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="official_instagram" class="col-md-4 col-form-label text-md-right">{{ __('オフィシャルInstagram') }}</label>

                            <div class="col-md-6">
                                <input id="official_instagram" type="official_instagram" class="form-control @error('official_instagram') is-invalid @enderror" name="official_instagram" required autocomplete="official_instagram">

                                @error('official_instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection