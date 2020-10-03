@extends('layouts.user.app')

@section('content')
    <div class="container chat-bottom">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-dark text-white">
                <div class="card bg-light text-dark">
                    <div class="card-header">
                        <ul id="board">
                            @foreach($chats as $chat)
                                <li>{{ $chat->text }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="card-body bg-dark">
                        <div class="row">
                            <textarea type="text" id="text" cols="80" rows="1"></textarea>
                            <input type="hidden" id="introduction_id" value="{{ $introduction->id }}">
                            <input type="hidden" id="user_id" value="{{ $introduction->user_id }}">
                            <input type="hidden" id="manufacture_id" value="{{ $introduction->manufacture_id }}">
                            <input type="hidden" id="owner_type" value="user">
                            <input type="submit" value="送信"  class="btn btn-secondary" id="submit">
                        </div>
                        <br><br>
                        <a type="submit" class="btn btn-primary" href="{{ route('user.home') }}">マイページ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection