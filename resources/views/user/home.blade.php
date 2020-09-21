@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header font-weight-bold">マイページ</h5>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <form method="get" action="{{ route('user.edit') }}">
                        @csrf
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th nowrap>{{__('名前')}}</th>
                                        <th nowrap>{{__('Eメール')}}</th>
                                        <th nowrap>{{__('LINE ID')}}</th>
                                        <th nowrap>{{__('サロン名')}}</th>
                                        <th nowrap>{{__('サロンHP')}}</th>
                                        <!-- <th nowrap>{{__('営業形態')}}</th> -->
                                        <th nowrap>{{__('月間売上')}}</th>
                                        <!-- <th nowrap>{{__('お住まいの地域')}}</th> -->
                                        <th nowrap>{{__('FBアカウント')}}</th>
                                        <th nowrap>{{__('Instagramアカウント')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <tr>
                                                <td nowrap>{{ $user->name }}</td>
                                                <td nowrap>{{ $user->email }}</td>
                                                <td nowrap>{{ $user->line_id }}</td>
                                                <td nowrap>{{ $user->salon_name}}</td>
                                                <td nowrap>{{ $user->salon_url}}</td>
                                                <!-- <td nowrap>{{ $user->business_form}}</td> -->
                                                <td nowrap>{{ $user->monthly_sales}}</td>
                                                <!-- <td nowrap>{{ $user->living_area}}</td> -->
                                                <td nowrap>{{ $user->facebook_id}}</td>
                                                <td nowrap>{{ $user->instagram_id}}</td>
    
                                            </tr>
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-primary">
                                        {{ __('修正する') }}
                            </button>
                            <a class="btn btn-danger"  href="{{ route('user_delete') }}?id={{ $user->id }}">退会する</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
<br>
<h6 class="font-weight-bold">申請一覧</h6>   
    <table class="table">
        <thead>
            <tr>
                <th>商品id</th>
                <th>商品名</th>
                <th>申請日時</th>
                <th>ステータス</th>
            </tr>
        </thead>
        <tbody>
            @foreach($introductions as $introduction)
        <tr>
            <td>{{ $introduction->product->product_name }}</td>
            <td>{{ $introduction->product_name }}</td>
            <td>{{ $introduction->application_time }}</td>

        @if ( $introduction->judgement === 1)
        <td>
         <form method="get" action="{{ route('user_chat.index') }}?id={{ $introduction->id }}">
         @csrf
         <input type="hidden" name="introduction_id" value="{{ $introduction->id}}">
        <button type="submit" class="btn btn-primary" href="">チャットへ</button>
        </form>
        </td>
        @elseif( $introduction->judgement === 2)
        <td>
            今回はごめんなさい
        </td>
        @else
        <td>
            承認待ちです
        </td>
        @endif

        </tr>
            @endforeach
        </tbody>
    </table>
  </div>

@endsection
