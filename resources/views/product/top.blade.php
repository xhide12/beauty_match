@extends('layouts.user.app')

@section('product_index')


<div class="container">
    商品一覧<br>
    <table class="table">
        <thead>
        <tr>
            <th nowrap >ブランド名</th>
            <th nowrap >商品名</th>
            <!-- <th nowrap >商品カテゴリー</th> -->
            <th nowrap >サイズ</th>
            <!-- <th nowrap >メーカー名</th> -->
            <th nowrap >画像１</th>
            <th nowrap >画像２</th>
            <th nowrap >画像３</th>
            <th nowrap >画像４</th>
            <!-- <th nowrap >商品説明</th>
            <th nowrap >成分・原材料</th>
            <th nowrap >オフィシャルHP</th>
            <th nowrap  >オフィシャルInstagram</th> -->
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->product_name }}</td>
            <!-- <td>{{ $product->category }}</td> -->
            <td>{{ $product->size }}</td>
            <!-- <td>{{ $product->manufacture_id }}</td> -->
            <td><img src="{{ asset('/storage/'.$product->image1)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image2)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image3)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image4)}}" class="img-thumbnail"></td>
            <!-- <td>{{ $product->product_coment }}</td>
            <td>{{ $product->composition }}</td>
            <td>{{ $product->official_hp }}</td>
            <td>{{ $product->official_instagram }}</td> -->
            <td nowrap>
            <a type="submit" class="btn btn-primary" href="{{ route('product_show') }}?id={{ $product->id }}">詳細</a>
            </td>


        </tr>
        @endforeach
        </tbody>
    </table>
    </div>

@endsection