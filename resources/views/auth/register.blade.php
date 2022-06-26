@extends('layouts.website.app')

@section('content')
<section class="page-banner ext-banner">
        <div class="image-layer" style="background-image:url(images/background/banner-image-9.jpg);"></div>
        <div class="banner-bottom-pattern"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                <div class="inner">
                    <div class="form-box default-form contact-form-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>Register Here</h3>
                        <form method="POST" action="{{ route('register') }}">@csrf
                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="text" name="name" placeholder="Your Name" required="">
                                    @error('name')
                                        <span>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="password" name="password" placeholder="Your Password" required="">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field-inner">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

@endsection
