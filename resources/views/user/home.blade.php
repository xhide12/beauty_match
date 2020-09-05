@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ユーザー様 管理画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <form method="get" action="{{ route('user.edit') }}">
                        {{ csrf_field() }}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>{{__('名前')}}</th>
                                        <th>{{__('Eメール')}}</th>
                                        <th>{{__('LINE ID')}}</th>
                                        <th>{{__('サロン名')}}</th>
                                        <th>{{__('サロンHP')}}</th>
                                        <th>{{__('営業形態')}}</th>
                                        <th>{{__('月間売上')}}</th>
                                        <th>{{__('お住まいの地域')}}</th>
                                        <th>{{__('FBアカウント')}}</th>
                                        <th>{{__('Instagramアカウント')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->line_id }}</td>
                                                <td>{{ $user->salon_name}}</td>
                                                <td>{{ $user->salon_url}}</td>
                                                <td>{{ $user->business_form}}</td>
                                                <td>{{ $user->monthly_sales}}</td>
                                                <td>{{ $user->living_area}}</td>
                                                <td>{{ $user->facebook_id}}</td>
                                                <td>{{ $user->instagram_id}}</td>
    
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
@endsection
