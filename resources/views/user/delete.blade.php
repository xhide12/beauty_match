@extends('layouts.user.app')

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
                    <form action='{{ route('user_remove') }}' method='post'>
                        @csrf
                            <input type='hidden' name='id' value='{{ $user->id }}'><br>
                            名前：{{ $user->name }}<br>
                            メールアドレス：{{ $user->email }}<br>

                            <br><br>
                            <h5 class="font-weight-bold">過去のチャットトークが削除されますが、本当に退会しますか？</h5>
                            <br>

                            <button class="btn btn-danger" type='submit'>退会する</button>
                            <input type="button" onclick="history.back()" value="戻る">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
