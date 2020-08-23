@extends('layouts.manufacture.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メーカー様 管理画面</div>

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
                                        <th>{{__('name')}}</th>
                                        <th>{{__('email')}}</th>
                                        <th>{{__('company_name')}}</th>
                                        <th>{{__('department_name')}}</th>
                                        <th>{{__('phone')}}</th>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
