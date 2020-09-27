@extends('layouts.user.app')


@section('product_show')

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="my_tabs">
                <div class="tab-content">
                    <div id="photo1" class="tab-pane active">
                            <img src="{{ asset('/storage/'.$product->image1)}}" class="img-fluid img-show" alt=""/>
                        </div>
                        <div id="photo2" class="tab-pane">
                            <img src="{{ asset('/storage/'.$product->image2)}}" class="img-fluid img-show" alt=""/>
                        </div>
                        <div id="photo3" class="tab-pane">
                            <img src="{{ asset('/storage/'.$product->image3)}}" class="img-fluid img-show" alt=""/>
                        </div>
                        <div id="photo4" class="tab-pane">
                            <img src="{{ asset('/storage/'.$product->image4)}}" class="img-fluid img-show" alt=""/>
                        </div>
                    </div>

                    <div class="blog_view_list">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                            <a href="#photo1" class="nav-link active" data-toggle="tab"><img src="{{ asset('/storage/'.$product->image1)}}" class="img-thumbnail"></a>
                            </li>
                            <li class="nav-item">
                            <a href="#photo2" class="nav-link" data-toggle="tab"><img src="{{ asset('/storage/'.$product->image2)}}" class="img-thumbnail"></a>
                            </li>
                            <li class="nav-item">
                            <a href="#photo3" class="nav-link" data-toggle="tab"><img src="{{ asset('/storage/'.$product->image3)}}" class="img-thumbnail"></a>
                            </li>
                            <li class="nav-item">
                            <a href="#photo4" class="nav-link" data-toggle="tab"><img src="{{ asset('/storage/'.$product->image4)}}" class="img-thumbnail"></a>
                            </li>
                        </ul>
                    </div>
				</div>
			</div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog_product_details">
                    <h4 class="font-weight-bold">{{ $product->brand }}</h4>
                    <h2 class="font-weight-bold">{{ $product->product_name }}</h2>
                    <h5>カラー名：{{ $product->size }}</h5>

                    <h6>メーカー：{{ optional($product->manufacture)->company_name }}</h6>
                    <h6>カテゴリー：{{ $product->category }}</h6>
                    <h6>店頭販売価格(税込)：{{ number_format($product->price) }}円</h6>
                    <br>
                    <p>{{ $product->product_coment }}</p>
                    <br>
                    <p>【成分表】{{ $product->composition }}</p>
                    <br>
                    <h6>公式サイト <a href="{{ $product->official_hp }}" target="_blank">{{ $product->official_hp }}</a></h6>
                    <h6>Instagram <a href="{{ $product->official_instagram }}" target="_blank">{{ $product->official_instagram }}</a></h6>
                </div>

                <br><br><br>

                @unless (Auth::guard('user')->check())
                <h6 class="font-weight-bold">商品を紹介したい場合は、ログインしてください。</h6><br><br>
                <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
                @else
                <form method="post" action="{{ route('introduction_form') }}">
                @csrf
                <input type='hidden' name='product_id' value="{{ $product->id }}"><br>
                <button type="submit" class="btn btn-primary">紹介</button>
                <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
                </form>
                @endunless
            </div>
	    </div>
	</div>
</div>






@endsection