@extends('layouts.base')

@section('content')
 
    <!-- Log In Section Start -->
   
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <div class="imgbg">
               <img src="{{asset('assets/images/1.png')}}" class=" img-fluid blur-up lazyload"
                                            alt="logo">
               </div>
            </div>
            <div class="col-md-6">
            <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="login-title">
                        <h2>Welcome </h2>
                        <p>please login here </p>
                    </div>
                    <div class="input">
                        <label for="name">Username</label>
                        <input type="email" id="name" name="email" :value="old('email')" required="" autofocus="" autocomplete="name">
                        @error('email')<span class="text-danger ml-3">{{$message}}</span>@enderror
                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input type="password" id="pass" class="block mt-1 w-full" name="password" required="" autocomplete="current-password">
                        @error('password')<span class="text-danger ml-3">{{$message}}</span>@enderror
                    </div>

                    <a href="javascript:void(0)" class="pass-forgot">Forgot your password?</a>

                    <div class="button login">
                        <button type="submit">
                            <span>Log In</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>

                    <p>Not a member? <a href="{{route('register')}}" class="theme-color">Sign up now</a></p>
                </form>
            </div>
        </div>
    </div>

            </div>
        </div>
    </div>
    
@endsection
