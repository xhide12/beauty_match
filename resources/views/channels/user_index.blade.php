@extends('layouts.user.app')

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
                        <div class="row">
                            <textarea type="text" id="text" cols="80" rows="2"></textarea>
                            <input type="hidden" id="introduction_id" value="{{ $introduction->id }}">
                            <input type="hidden" id="user_id" value="{{ $introduction->user_id }}">
                            <input type="hidden" id="manufacture_id" value="{{ $introduction->manufacture_id }}">
                            <input type="submit" class="btn btn-primary" value="送信" id="submit">
                        </div>
                        <br><br>
                        <a type="submit" class="btn btn-secondary" href="{{ route('user.home') }}">マイページ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection