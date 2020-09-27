@extends('layouts.manufacture.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">退会確認</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                    <form action="{{ route('manufacture_remove') }}" method='post'>
                        @csrf
                            <input type='hidden' name='id' value='{{ $manufacture->id }}'><br>
                            名前：{{ $manufacture->name }}<br>
                            メールアドレス：{{ $manufacture->email }}<br>

                            <br><br>
                            <h5 class="font-weight-bold">過去のチャットトークと商品情報が削除されますが、本当に退会しますか？</h5>
                            <br>

                            <button class="btn btn-danger" type='submit'>退会する</button>
                            <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
