@extends('layouts.user.app')


@section('product_show')

<div class="container">
    商品詳細<br>
    <table class="table">
        <thead>
        <tr>
            <th nowrap>ブランド名</th>
            <th nowrap>商品名</th>
            <th nowrap>商品カテゴリー</th>
            <th nowrap>サイズ</th>
            <th nowrap>メーカー名</th>
            <th nowrap>画像１</th>
            <th nowrap>画像２</th>
            <th nowrap>画像３</th>
            <th nowrap>画像４</th>
            <th nowrap>商品説明</th>
            <th nowrap>成分・原材料</th>
            <th nowrap>公式サイト</th>
            <th nowrap>Instagram</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->manufacture_id }}</td>
            <td><img src="{{ asset('/storage/'.$product->image1)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image2)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image3)}}" class="img-thumbnail"></td>
            <td><img src="{{ asset('/storage/'.$product->image4)}}" class="img-thumbnail"></td>
            <td>{{ $product->product_coment }}</td>
            <td>{{ $product->composition }}</td>
            <td><a href="{{ $product->official_hp }}">{{ $product->official_hp }}</a></td>
            <td><a href="{{ $product->official_instagram }}">{{ $product->official_instagram }}</a></td>
            <td nowrap>
            <form method="post" action="{{ route('introduction_form') }}">
            @csrf
            <input type='hidden' name='product_id' value="{{ $product->id }}"><br>
            <button type="submit" class="btn btn-primary">紹介</button>
                </td>
            </form>
        </tr>
        </tbody>
    </table>
    </div>

@endsection