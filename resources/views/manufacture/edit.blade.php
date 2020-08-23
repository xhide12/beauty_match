@extends('layouts.manufacture.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">編集画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in 2!<br>
                    <form action='{{ route('manufacture.update')}}' method="post">
                    {{ csrf_field() }}
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
                                            <td>
                                                <input type="text" name="name" value="{{old( 'name', $manufacture->name )}}">
                                            </td>
                                            <td>
                                                <input type="text" name="email" value="{{old( 'email', $manufacture->email )}}">
                                            </td>
                                            <td>
                                                <input type="text" name="company_name" value="{{old( 'company_name', $manufacture->company_name )}}">
                                            </td>
                                            <td>
                                                <input type="text" name="department_name" value="{{old( 'department_name', $manufacture->department_name )}}">
                                            </td>
                                            <td>
                                                <input type="text" name="phone" value="{{old( 'phone', $manufacture->phone )}}">
                                            </td>
                                        </tr>
                            </tbody>
                        </table>
                        <input type='hidden' name='id' value='{{ $manufacture->id }}'><br>
                        <input type='submit' value='投稿'>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
