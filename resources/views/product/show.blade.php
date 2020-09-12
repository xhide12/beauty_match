@extends('layouts.user.app')


@section('product_show')

    商品一覧<br>
    <table class="table"
        <thead>
        <tr><th>ブランド名</th><th>商品名</th><th>商品カテゴリー</th><th>サイズ</th><th>メーカー名</th><th>画像１</th><th>画像２</th><th>画像３</th><th>画像４</th><th>商品説明</th><th>成分・原材料</th><th>オフィシャルHP</th><th>オフィシャルInstagram</th></tr>
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
            <td>{{ $product->official_hp }}</td>
            <td>{{ $product->official_instagram }}</td>

            <td>
            <form method="post" action="{{ route('introduction_form') }}">
            @csrf

            <input type='hidden' name='product_id' value="{{ $product->id }}"><br>
            <button type="submit" class="btn btn-primary">紹介したい</button>
                </td>
            </form>

        </tr>
        </tbody>
    </table>


@endsection