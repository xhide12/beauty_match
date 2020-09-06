@extends('layouts.user.app')

@section('content')
<div class="container">
  <h1>TOPページです</h1>
  <!-- <img class="img-fluid" src="https://picsum.photos/seed/picsum/1200/900"> -->

  <img src="image/main.jpg" alt="メイン画像" width="1110" height="300" object-fit="contain">

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


    商品一覧<br>
    <table class="table"
        <thead>
        <tr><th>ブランド名</th><th>商品名</th><th>商品カテゴリー</th><th>サイズ</th><th>メーカー名</th><th>画像１</th><th>画像２</th><th>画像３</th><th>画像４</th><th>商品説明</th><th>成分・原材料</th><th>オフィシャルHP</th><th>オフィシャルInstagram</th></tr>
        </thead>
        <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->manufacture }}</td>
            <td><img src="{{ asset('/storage/'.$product->image1)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image2)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image3)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image4)}}" class="img-thumbnail"></td>
            <td>{{ $product->product_coment }}</td>
            <td>{{ $product->composition }}</td>
            <td>{{ $product->official_hp }}</td>
            <td>{{ $product->official_instagram }}</td>
            <td>

            <!-- <a type="submit" class="btn btn-primary" href="{{ route('product_edit') }}?id={{ $product->id }}">変更</a> -->
            <a type="submit" class="btn btn-primary" href="{{ route('product_show') }}?id={{ $product->id }}">商品詳細</a>
            </td>


        </tr>
    @endforeach
        </tbody>
    </table>


@endsection