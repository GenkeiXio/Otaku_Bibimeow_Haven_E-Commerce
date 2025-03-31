@extends('frontend.layouts.master')

@section('title','Otaku Haven || Login Page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Shop Login -->
    <section class="shop login section">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form">
                        <h2>Login</h2>
                        <p>Please register in order to checkout more quickly</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{route('login.submit')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Password<span>*</span></label>
                                        <input type="password" name="password" placeholder="" required="required" value="{{old('password')}}">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn d-flex align-items-center justify-content-center gap-3">
                                        <button class="btn" type="submit">Login</button>
                                        <a href="{{route('register.form')}}" class="btn">Register</a>
                                        <span>OR</span>
                                       <a href="{{route('login.redirect','google')}}" class="btn-google">
                                            <img src="{{ asset('frontend/img/logo/google-logo.png') }}" alt="Google Logo"> Sign in with Google
                                        </a>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Remember me</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="lost-pass" href="{{ route('password.request') }}">
                                            Lost your password?
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Login -->
@endsection
@push('styles')
<style>
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background-color: #4267B2;
        padding-left: 65px !important;
        padding-right: 65px !important;
        justify-content: center;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .login-btn {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .btn-google {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 4px;
    text-decoration: none;
    width: auto;
    border: none;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    transition: background 0.3s;
    }

    .btn-google img {
        width: 18px;
        height: 18px;
        margin-right: 10px;
    }

    .btn-google:hover {
        background-color: transparent;
    }

    .lost-pass{
        margin-left: 280px !important;
    }
</style>
@endpush