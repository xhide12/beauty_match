@extends('layouts.manufacture.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <ul id="board">
                            @foreach($chats as $chat)
                                <li>{{ $chat->text }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="card-body">
                        <input type="text" id="text">
                        <input type="hidden" id="user_id" value="{{ $introduction->user_id }}">
                        <input type="hidden" id="manufacture_id" value="{{ $introduction->manufacture_id }}">
                        <input type="submit" value="送信" id="submit"><br><br><br>

                        <a type="submit" class="btn btn-primary" href="{{ route('manufacture.home') }}">管理画面</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection