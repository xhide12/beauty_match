@extends('layouts.user.app')

@section('content')
<div class="container">

  <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
  <ol class="carousel-indicators">
    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-2" data-slide-to="1"></li>
    <li data-target="#carousel-2" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
        <img src="image/top-image-1.png" alt="responsive image" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block text-dark  font-weight-bold">
        <h5>”人”と"感情"と"信頼"の時代の</h5>
        <h5>美容系商品のサンプリングプラットフォーム</h5><br><br><br><br><br><br>
        </div>
    </div>
    <div class="carousel-item">
        <img src="image/top-image-2.png" alt="responsive image" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block text-dark font-weight-bold">
          <h5>”人”と"感情"と"信頼"の時代の</h5>
          <h5>美容系商品のサンプリングプラットフォーム</h5><br><br><br><br><br><br>
        </div>

    </div>
    <div class="carousel-item">
        <img src="image/top-image-3.png" alt="responsive image" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block text-dark font-weight-bold">
        <h5>”人”と"感情"と"信頼"の時代の</h5>
          <h5>美容系商品のサンプリングプラットフォーム</h5><br><br><br><br><br><br>
        </div>

    </div>
  </div>
</div>

<br><br>
<div class="card-deck">
  <div class="d-flex flex-row">
    <div class="card mb-6" style="max-width: 600px">
      <div class="row no-gutters">
            <div class="col-md-4 my-auto">
                <img class="card-img" src="image/user-icon-1.png">
            </div>
            <div class="col-md-8 text-center">
                <div class="card-body">
                <h4 class="card-title">for Beauty Freelance</h4>
                <p class="card-text">お客様に商品紹介したい美容系フリーランスの方<br>(インフルエンサーになりたい方)</p>
                @unless (Auth::guard('user')->check())
                  <a href="{{ route('user.register') }}" class="btn btn-primary">新規登録</a>　<a href="{{ route('user.login') }}" class="btn btn-primary">ログイン</a>
                @else
                  <a href="{{ route('user.home') }}" class="btn btn-primary">マイページ</a>
                @endunless
                </div>
            </div>
      </div>
    </div>
    <div class="card mb-6" style="max-width: 600px">
      <div class="row no-gutters">
        <div class="col-md-4 my-auto">
            <img class="card-img" src="image/manufacture-icon-1.png">
        </div>
        <div class="col-md-8 text-center">
            <div class="card-body">
            <h4 class="card-title">for COMPANY</h4>
            <p class="card-text">商品PRやプロモーションを依頼したい方<br>(既存の方法に限界を感じているご担当社様)</p>
            @unless (Auth::guard('manufacture')->check())
              <a href="{{ route('manufacture.register') }}" class="btn btn-primary">新規登録</a>　<a href="{{ route('manufacture.login') }}" class="btn btn-primary">ログイン</a>
            @else   
              <a href="{{ route('manufacture.home') }}" class="btn btn-primary">管理画面</a>
            @endunless
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<br><br>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 cover-img scrollanime downup" style="background-image:url('image/top_back-2.png');">
			<div class="cover-text text-center">
				<p style="color: #fff;">ここがテキストですよ！！</p>
			</div>
		</div>
	</div>
</div>

<br><br>

<div class="font-weight-bold scrollanime downup d-flex justify-content-between">
<h3>紹介してほしい商品</h3>
<h6><a href="{{ route('product_index') }}">もっと見る＞＞</a></h6>
</div>
<div class="card-deck card-group row-cols-1 row-cols-md-3">
    @foreach($products as $product)
    <div class="card col-xs-4 scrollanime downup" style="width: 18rem">
      <img class="bd-placeholder-img card-img-top" width="100%" height="350" src="{{ asset('/storage/'.$product->image1)}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></img>
      <div class="card-body bg-light">
        <h5 class="card-title font-weight-bold">{{ $product->brand }}</h5>
        <h6 class="card-title font-weight-bold">{{ $product->product_name }}  {{ $product->size }}</h6>
        <p class="card-text">{{ $product->product_coment }}</p>
      </div>
      <div class="card-footer bg-light">
      <a type="submit" class="btn btn-primary" href="{{ route('product_show') }}?id={{ $product->id }}">詳細</a>
      </div>
    </div>
  @endforeach
</div>
<br><br><br><br><br><br><br><br>
@endsection