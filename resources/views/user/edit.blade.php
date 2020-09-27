@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザー情報変更</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="table-responsive">
                    <form action='{{ route('user.update')}}' method="post">
                    @csrf
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
                                    <td><input type="text" name="name" value="{{old( 'name', $user->name )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('email')}}</td>
                                    <td><input type="text" name="email" value="{{old( 'email', $user->email )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('line_id')}}</td>
                                    <td><input type="text" name="line_id" value="{{old( 'line_id', $user->line_id )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('salon_name')}}</td>
                                    <td><input type="text" name="salon_name" value="{{old( 'salon_name', $user->salon_name )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('salon_url')}}</td>
                                    <td><input type="text" name="salon_url" value="{{old( 'salon_url', $user->salon_url )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('business_form')}}</td>
                                    <td><input type="text" name="business_form" value="{{old( 'business_form', $user->business_form )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('monthly_sales')}}</td>
                                    <td><input type="text" name="monthly_sales" value="{{old( 'monthly_sales', $user->monthly_sales )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('living_area')}}</td>
                                    <td><input type="text" name="living_area" value="{{old( 'living_area', $user->living_area )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('facebook_id')}}</td>
                                    <td><input type="text" name="facebook_id" value="{{old( 'facebook_id', $user->facebook_id )}}"></td>
                                </tr>    
                                <tr>
                                    <td>{{__('instagram_id')}}</td>
                                    <td><input type="text" name="instagram_id" value="{{old( 'instagram_id', $user->instagram_id )}}"></td>
                                 </tr>
                            </tbody>
                        </table>

                        <input type='hidden' name='id' value='{{ $user->id }}'><br>
                        <button class="btn btn-primary" type='submit'>変更</button>
                        <input type="button" onclick="history.back()" class="btn btn-secondary" value="戻る">
                    </form>    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
