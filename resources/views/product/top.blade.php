@extends('layouts.common')

@section('product_index')
    商品一覧<br>
    <table>
        <tr><th>ブランド名</th><th>商品名</th><th>商品カテゴリー</th><th>サイズ</th><th>メーカー名</th><th>画像１</th><th>画像２</th><th>画像３</th><th>画像４</th><th>商品説明</th><th>成分・原材料</th><th>オフィシャルHP</th><th>オフィシャルInstagram</th></tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->manufacture }}</td>
            <td><img src="{{ asset('/storage/'.$product->image1)}}"></td>
            <td><img src="{{ asset('/storage/'.$product->image2)}}"></td>
            <td><img src="{{ asset('/storage/'.$product->image3)}}"></td>
            <td><img src="{{ asset('/storage/'.$product->image4)}}"></td>
            <td>{{ $product->product_coment }}</td>
            <td>{{ $product->composition }}</td>
            <td>{{ $product->official_hp }}</td>
            <td>{{ $product->official_instagram }}</td>
            <td>
            <!-- <button type="submit" class="btn btn-primary">{{ __('修正する') }}</button> -->
            <a type="submit" class="btn btn-primary" href="{{ route('product_edit') }}?id={{ $product->id }}">
            </td>


        </tr>
    @endforeach
    </table>

@endsection