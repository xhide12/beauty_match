@extends('layouts.manufacture.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header font-weight-bold">管理画面</h5>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <form method="get" action="{{ route('manufacture.edit') }}">
                        {{ csrf_field() }}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>{{__('名前')}}</th>
                                        <th>{{__('Eメール')}}</th>
                                        <th>{{__('会社名')}}</th>
                                        <th>{{__('部署名')}}</th>
                                        <th>{{__('電話番号')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <tr>
                                                <td>{{ $manufacture->name }}</td>
                                                <td>{{ $manufacture->email }}</td>
                                                <td>{{ $manufacture->company_name }}</td>
                                                <td>{{ $manufacture->department_name}}</td>
                                                <td>{{ $manufacture->phone}}</td>
                                            </tr>
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-primary">
                                        {{ __('修正する') }}
                            </button>
                            <a class="btn btn-danger"  href="{{ route('manufacture_delete') }}?id={{ $manufacture->id }}">退会する</a>

                            <a type="submit"  class="btn btn-secondary center-block"  href="{{ route('product_create') }}">商品登録</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container">
<br>
<h6 class="font-weight-bold">商品一覧</h6>
    <table class="table">
        <thead>
            <tr>
                <th nowrap>ブランド名</th>
                <th nowrap>商品名</th>
                <!-- <th nowrap>カテゴリー</th> -->
                <th nowrap>サイズ</th>
                <!-- <th nowrap>メーカー名</th> -->
                <!-- <th nowrap>画像１</th> -->
                <!-- <th nowrap>画像２</th> -->
                <!-- <th nowrap>画像３</th> -->
                <!-- <th nowrap>画像４</th> -->
                <!-- <th nowrap>商品説明</th>
                <th nowrap>成分・原材料</th>
                <th nowrap>公式サイト</th>
                <th nowrap>Instagram</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
        <tr>
            <td nowrap>{{ $product->brand }}</td>
            <td nowrap>{{ $product->product_name }}</td>
            <!-- <td>{{ $product->category }}</td> -->
            <td nowrap>{{ $product->size }}</td>
            <!-- <td>{{ $product->manufacture_id }}</td> -->
            <!-- <td><img src="{{ asset('/storage/'.$product->image1)}}" class="img-thumbnail"></td> -->
            <!-- <td><img src="{{ asset('/storage/'.$product->image2)}}" class="img-thumbnail"></td> -->
            <!-- <td><img src="{{ asset('/storage/'.$product->image3)}}" class="img-thumbnail"></td> -->
            <!-- <td><img src="{{ asset('/storage/'.$product->image4)}}" class="img-thumbnail"></td> -->
            <!-- <td>{{ $product->product_coment }}</td>
            <td>{{ $product->composition }}</td>
            <td>{{ $product->official_hp }}</td>
            <td>{{ $product->official_instagram }}</td> -->
            <td nowrap>
            <a type="submit" class="btn btn-primary" href="{{ route('product_edit') }}?id={{ $product->id }}">修正</a>
            </td>
            <td nowrap>
            <a type="submit" class="btn btn-primary" href="{{ route('product_delete') }}?id={{ $product->id }}">削除</a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">
<br><br>
<h6 class="font-weight-bold">申請一覧</h6>
    <table class="table">
        <thead>
            <tr>
                <th>ユーザー名</th>
                <th>商品id</th>
                <th>申請日時</th>
                <th>ステータス</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($introductions as $introduction)
        <tr>
            <td>{{ $introduction->user_id }}</td>
            <td>{{ $introduction->product_id }}</td>
            <td>{{ $introduction->application_time }}</td>
            <td>{{ $introduction->judgement }}</td>
         <td>
            <form method="post" action="home/introduction">
            @csrf
            <input type="hidden" name="judgement" value="1">
            <input type="hidden" name="introduction_id" value="{{ $introduction->id}}">
            <button type="submit" class="btn btn-primary" href="">承認</button>
            </form>
        </td>
        <td>
            <form method="post" action="home/introduction">
            @csrf
            <input type="hidden" name="judgement" value="2">
            <input type="hidden" name="introduction_id" value="{{ $introduction->id }}">
            <button type="submit" class="btn btn-primary" href="">却下</button>
            </form>
        </td>
        @if ( $introduction->judgement === 1)
        <td>
            <form method="get" action="{{ route('manufacture_chat.index') }}?id={{ $introduction->id }}">
            @csrf
            <input type="hidden" name="introduction_id" value="{{ $introduction->id }}">
            <button type="submit" class="btn btn-primary" href="">チャットへ</button>
            </form>
        </td>
        @endif

        </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
