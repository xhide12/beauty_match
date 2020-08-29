@extends('layouts.manufacture.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">編集画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                    <form action="{{ route('manufacture.update') }}" method="post">
                    {{ csrf_field() }}
                        <table class="table table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>項目</th>
                                    <th>登録内容</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{__('name')}}</td>
                                    <td><input type="text" name="name" value="{{old( 'name', $manufacture->name )}}"></td>
                                </tr>
                                <tr>
                                    <td>{{__('email')}}</td>
                                    <td><input type="text" name="email" value="{{old( 'email', $manufacture->email )}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{__('company_name')}}</td>
                                    <td><input type="text" name="company_name" value="{{old( 'company_name', $manufacture->company_name )}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{__('department_name')}}</td>
                                    <td><input type="text" name="department_name" value="{{old( 'department_name', $manufacture->department_name )}}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{__('phone')}}</th>
                                    <td><input type="text" name="phone" value="{{old( 'phone', $manufacture->phone )}}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <input type='hidden' name='id' value='{{ $manufacture->id }}'><br>
                        <button class="btn btn-primary" type='submit'>変更</button>
                        <input type="button" onclick="history.back()" value="戻る">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
