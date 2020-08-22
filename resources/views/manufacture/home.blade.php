@extends('layouts.manufacture.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in 2!<br>
                    <!-- {{$manufacture->name}}<br>
                    {{$manufacture->email}}<br>
                    {{$manufacture->company_name}}<br>
                    {{$manufacture->department_name}}<br>
                    {{$manufacture->phone}} -->

                    <div class="table-responsive">
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
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
