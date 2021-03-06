@extends('layouts.master-blank')

@section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>

        <div class="wrapper-page">
            <div class="card overflow-hidden account-card mx-3">
                <div class="bg-primary p-4 text-white text-center position-relative">
                    <h4 class="font-20 m-b-5">Welcome Back !</h4>
                    <p class="text-white-50 mb-4">Sign in to continue.</p>
                    <a href="index" class="logo logo-admin"><img src="{{asset('public/backend/assets/images/logo-sm.png')}}" height="24" alt="logo"></a>
                </div>

                <div class="account-card-content">

                    <form class="form-horizontal m-t-30" action="{{route('login')}}"  method="post">
                        @csrf
                        @if(\Illuminate\Support\Facades\Session::has('error'))
                            <strong class="text-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</strong>
                        @endif
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="{{old('username')}}" placeholder="Enter username">

                        @if($errors->has('username'))
                            <strong class="text-danger">{{$errors->first('username')}}</strong>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">

                        @if($errors->has('password'))
                            <strong class="text-danger">{{$errors->first('password')}}</strong>
                        @endif
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">????ng nh???p</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Don't have an account ? <a href="pages-register" class="font-500 text-primary"> Signup now </a> </p>
                <p>?? {{date('Y')}} Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>
        <!-- end wrapper-page -->
@endsection

@section('script')
@endsection
