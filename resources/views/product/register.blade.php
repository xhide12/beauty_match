@extends('layouts.common')
@section('content')

<h1>商品登録</h1>

<form action="/product/store" method="post">
@csrf
  <input type="text" name="brand">
  <input type="text" name="product_name">
  <input type="text" name="category">
  <input type="text" name="size">
  <input type="text" name="manufacture">
  <input type="text" name="image1" value="aaa.jpg">
  <input type="text" name="image2">
  <input type="text" name="image3">
  <input type="text" name="image4">
  <input type="text" name="product_coment">
  <input type="text" name="composition">
  <input type="text" name="official_hp">
  <input type="text" name="official_instagram">
  <button type="submit">送信</button>

</form>

@endsection