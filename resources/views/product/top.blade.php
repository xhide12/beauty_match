@extends('layouts.user.app')

@section('product_index')

<div class="container">
    <div class="font-weight-bold">
    商品一覧
    </div>
    <div class="card-deck card-group row-cols-1 row-cols-md-3">
        @foreach($products as $product)
        <div class="card col-xs-4" style="width: 18rem">
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
</div>

<br><br><br>

@endsection