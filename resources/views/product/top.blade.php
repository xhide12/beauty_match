@extends('layouts.common')

@section('product_index')
    投稿一覧<br>
    <table>
        <tr><th>ユーザーID</th><th>タイトル</th><th>内容</th></tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category }}</td>
        </tr>
    @endforeach
    </table>
@endsection