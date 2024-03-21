@extends('layouts.base')

@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Contact Us</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="materialContainer">
                    <div class="material-details">
                        <div class="title title1 title-effect mb-1 title-left">
                            <h2>Contact Us</h2>
                            <p class="ms-0 w-100">Your email address will not be published. Required fields are marked *</p>
                        </div>
                    </div>
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>

                    @endif
                    <form action="{{ route('contact-us.index') }}" wire:submit.prevent="sendMessag">
                        @csrf
                        <div class="row g-4 mt-md-1 mt-2">
                            <div class="col-md-6">
                                <label for="first" class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="first" placeholder="Enter Your First Name" required="first">
                                @error('first')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-6">
                                <label for="last" class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="last" placeholder="Enter Your Last Name" required="last">
                                @error('last')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email Address" required="email">
                                @error('email')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number" required="phone">
                                @error('phone')<p class="text-danger">{{$message}}</p>@enderror
                            
                            </div>
                            <div class="col-12">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea name="comment" class="form-control" id="comment" rows="5" required="comment"></textarea>
                                @error('comment')<p class="text-danger">{{$message}}</p>@enderror
                            
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-solid-default" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="contact-details">
                    <div>
                        <h2>Let's get in touch</h2>
                        <h5 class="font-light">We're open for any suggestion or just to have a chat</h5>
                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="map-pin"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Address :</h4>
                                <p>Nante, Lyon, Paris, France</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="phone"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Phone Number :</h4>
                                <p>+1 0000000000</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="mail"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Email Address :</h4>
                                <p>contact@agorafrancia.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection