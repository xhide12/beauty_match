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
        <div class="carousel-caption d-none d-md-block">
        <h4 class="font-weight-bold" style="color: #808080;">美容系フリーランスの皆さまと一緒につくる</h4>   
        <h5 class="font-weight-bold" style="color: #808080;">”想われる"時代の</h5>
        <h5 class="font-weight-bold" style="color: #808080;">コスメ商品の紹介プラットフォーム</h5><br><br><br><br><br><br>
        </div>
    </div>
    <div class="carousel-item">
        <img src="image/top-image-2.png" alt="responsive image" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block">
        <h4 class="font-weight-bold" style="color: #3366FF;">美容系フリーランスの皆さまと一緒につくる</h4>        
        <h5 class="font-weight-bold" style="color: #3366FF;">”想われる"時代の</h5>
        <h5 class="font-weight-bold" style="color: #3366FF;">コスメ商品の紹介プラットフォーム</h5><br><br><br><br><br><br>
        </div>

    </div>
    <div class="carousel-item">
        <img src="image/top-image-3.png" alt="responsive image" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block">
        <h4 class="font-weight-bold" style="color: #FF6699";>美容系フリーランスの皆さまと一緒につくる</h4>       
        <h5 class="font-weight-bold" style="color: #FF6699;">”想われる"時代の</h5>
        <h5 class="font-weight-bold" style="color: #FF6699;">コスメ商品の紹介プラットフォーム</h5><br><br><br><br><br><br>
        </div>

    </div>
  </div>
</div>

<br><br>

  <div class="card-deck" style="margin-bottom: 10px;">
    <div class="d-flex flex-row">
      <div class="card mb-6" style="max-width: 600px;">
        <div class="row no-gutters">
              <div class="col-md-4 my-auto">
                  <img class="card-img" src="image/user-icon-1.png">
              </div>
              <div class="col-md-8 text-center">
                  <div class="card-body">
                  <h4 class="card-title font-weight-bold">for Beauty Freelance</h4>
                  <p class="card-text">お客様に商品を紹介したい<br>美容系フリーランスの方</p>
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
              <h4 class="card-title font-weight-bold">for COMPANY</h4>
              <p class="card-text">商品紹介を依頼したいメーカーのご担当者様<br>(既存のサンプリングに限界を感じている方)</p>
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

<div class="container-fluid top-margin">
	<div class="row">
		<div class="col-xs-12 cover-img scrollanime downup" style="background-image:url('image/top_back-2.png');">
			<div class="cover-text font-weight-bold" style="color: #333333;">
        <h5 class="font-weight-bold">商品を直接、お客様にご紹介できる方法はないかと思い、このサイトを始めました。</h5><br>
				<p>新型コロナが世界中を襲っているさなか、ネットでの商品販売が当たり前の世の中になりました。<br>そして、インスタやYoutubeでの商品ＰＲも当たり前の時代になりました。</p>
        <p>だからこそ、BeautyMatchでは<span class="text-danger">「人とのつながり」</span>を大切にしたいと思っています。<br>お客様(エンドユーザー)から信頼されるお仕事をされている皆さまから<span class="text-danger">「直接」</span>、<br>メーカーの商品に対する<span class="text-danger">「想い」</span>を伝えていただきたくてこのサイトを立ち上げました。<br><br>お客様から<span class="text-danger">「想われる」</span>皆さまと一緒に、新たなサービスを作っていけると幸いです。</p>
			</div>
		</div>
	</div>
</div>

<br><br>

<div class="container top-margin">
  <div class="scrollanime downup d-flex justify-content-between">
    <h5 class="font-weight-bold">★★紹介してほしい商品★★</h5>
    <h6><a href="{{ route('product_index') }}">もっと見る＞＞</a></h6>
  </div>

  <div class="row card-deck card-group row-cols-1 row-cols-md-3 scrollanime downup">
          @foreach($products as $product)
          @if($loop->index < 6)
            <div class="col-3" style="padding-bottom: 40px;">
                <div class="card col-xs-4">
                    <a href="{{ route('product_show') }}?id={{ $product->id }}">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="300" src="{{ asset('/storage/'.$product->image1)}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></img></a>
                    <div class="card-body bg-light" style="height: 22rem;">
                        <h5 class="card-title font-weight-bold">{{ $product->brand }}</h5>
                        <h6 class="card-title font-weight-bold">{{ $product->product_name }}</h6>
                        <h6 class="card-title font-weight-bold">{{ $product->size }}</h6>
                        <p class="card-text"><small class="text-muted">{{ $product->product_coment }}</small></p>

                    </div>
                    <div class="card-footer bg-light row-eq-height">
                        <a type="submit" class="btn btn-primary" href="{{ route('product_show') }}?id={{ $product->id }}">詳細</a>
                    </div>
                </div>
            </div>
          @endif
          @endforeach
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col">
    <a href="{{ route('contact') }}">
      <img src="image/contact_btn.jpg" alt="お問い合わせフォームへ">
      </a>
    </div>

    <div class="col text-right">
      <img src="image/phone_large.png" alt="" >
    </div>
    <div class="col text-left">
      <br>
      <h5 class="font-weight-bold">お電話でのお問い合わせはこちら</h5>
      <h3>090-4936-6218</h3>
      <p class="text-muted">受付時間：00：00～24：00(土日祝もOK!)</p>
    </div>

  </div>
</div>
<br><br>
@endsection