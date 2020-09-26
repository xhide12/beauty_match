@extends('layouts.user.app')

@section('product_index')

<div class="container">
    <div>
    <h5 class="font-weight-bold">★★商品一覧★★</h5>
    </div>

    <div class="row card-deck card-group row-cols-1 row-cols-md-3">
        @foreach($products as $product)
            <div class="col-3" style="padding-bottom: 40px;">
                <div class="card col-xs-4">
                    <a href="{{ route('product_show') }}?id={{ $product->id }}">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="300" src="{{ asset('/storage/'.$product->image1)}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></img></a>
                    <div class="card-body bg-light" style="height: 22rem;">
                        <h5 class="card-title font-weight-bold">{{ $product->brand }}</h5>
                        <h6 class="card-title font-weight-bold">{{ $product->product_name }}</h6>
                        <h6 class="card-title font-weight-bold">{{ $product->size }}</h6>
                        <p class="card-text"><small class="text-muted">{{ $product->product_coment }}</small></p>

                    </div>
                    <div class="card-footer bg-light row-eq-height">
                        <a type="submit" class="btn btn-primary" href="{{ route('product_show') }}?id={{ $product->id }}">詳細</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

<br><br><br>

@endsection