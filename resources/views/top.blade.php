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
        <div class="carousel-caption d-none d-md-block text-muted font-weight-bold">
          <h1>beautymatch</h1>
          <p>美容系フリーランスと化粧品メーカーをつなぐマッチングサイト</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="image/top-image-2.png" alt="responsive image" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block text-light font-weight-bold">
          <h1>beautymatch</h1>
          <p>美容系フリーランスと化粧品メーカーをつなぐマッチングサイト</p>
        </div>

    </div>
    <div class="carousel-item">
        <img src="image/top-image-3.png" alt="responsive image" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block text-light font-weight-bold">
          <h1>beautymatch</h1>
          <p>美容系フリーランスと化粧品メーカーをつなぐマッチングサイト</p>
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

<div class="card-deck">
    @foreach($products as $product)
    <div class="card col-xs-4 scrollanime downup">
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