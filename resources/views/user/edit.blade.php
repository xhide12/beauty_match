@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <form action='{{ route('user.update')}}' method="post">
                    {{ csrf_field() }}
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('name')}}</th>
                                    <th>{{__('email')}}</th>
                                    <th>{{__('line_id')}}</th>
                                    <th>{{__('salon_name')}}</th>
                                    <th>{{__('salon_url')}}</th>
                                    <th>{{__('business_form')}}</th>
                                    <th>{{__('monthly_sales')}}</th>
                                    <th>{{__('living_area')}}</th>
                                    <th>{{__('facebook_id')}}</th>
                                    <th>{{__('instagram_id')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                        <tr>
                                            <td><input type="text" name="name" value="{{old( 'name', $user->name )}}"></td>
                                            <td><input type="text" name="email" value="{{old( 'email', $user->email )}}"></td>
                                            <td><input type="text" name="line_id" value="{{old( 'line_id', $user->line_id )}}"></td>
                                            <td><input type="text" name="salon_name" value="{{old( 'salon_name', $user->salon_name )}}"></td>
                                            <td><input type="text" name="salon_url" value="{{old( 'salon_url', $user->salon_url )}}"></td>
                                            <td><input type="text" name="business_form" value="{{old( 'business_form', $user->business_form )}}"></td>
                                            <td><input type="text" name="monthly_sales" value="{{old( 'monthly_sales', $user->monthly_sales )}}"></td>
                                            <td><input type="text" name="living_area" value="{{old( 'living_area', $user->living_area )}}"></td>
                                            <td><input type="text" name="facebook_id" value="{{old( 'facebook_id', $user->facebook_id )}}"></td>
                                            <td><input type="text" name="instagram_id" value="{{old( 'instagram_id', $user->instagram_id )}}"></td>
 
                                        </tr>
                            </tbody>
                        </table>

                        <input type='hidden' name='id' value='{{ $user->id }}'><br>
                        <input type='submit' value='投稿'>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
