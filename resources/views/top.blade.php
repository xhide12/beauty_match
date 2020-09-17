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
      <a href="">
        <img src="image/top-image-1.png" alt="responsive image" class="d-block img-fluid">
      </a>
    </div>
    <div class="carousel-item">
      <a href="">
        <img src="image/top-image-2.png" alt="responsive image" class="d-block img-fluid">
      </a>
    </div>
    <div class="carousel-item">
      <a href="">
        <img src="image/top-image-3.png" alt="responsive image" class="d-block img-fluid">
      </a>
    </div>
  </div>
</div>


    <div class="card-deck">
    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

</div>

<div class="container">
    商品一覧<br>
    <table class="table" >
        <thead>
        <tr><th nowrap>ブランド名</th><th nowrap>商品名</th><th nowrap>カテゴリー</th><th nowrap>サイズ</th><th nowrap>メーカー名</th><th nowrap>画像１</th><th nowrap>画像２</th><th nowrap>画像３</th><th nowrap>画像４</th><th nowrap>商品説明</th><th nowrap>成分・原材料</th><th nowrap>公式サイト</th><th nowrap>Instagram</th></tr>
        </thead>
        <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->manufacture_id }}</td>
            <td><img src="{{ asset('/storage/uploaded_image'.$product->image1)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image2)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image3)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image4)}}" class="img-thumbnail"></td>
            <td>{{ $product->product_coment }}</td>
            <td>{{ $product->composition }}</td>
            <td>{{ $product->official_hp }}</td>
            <td>{{ $product->official_instagram }}</td>
            <td nowrap>
            <a type="submit" class="btn btn-primary" href="{{ route('product_show') }}?id={{ $product->id }}">詳細</a>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
    </div>

@endsection