@extends('layout.mainlayout')



@section('content')

    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <div class="clearfix">
                <!--Title -->
                <div class="title-column">
                    <h1>Contact Us</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">


                <!--Contact Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">

                    <!--Contact Form Form-->
                    <div class="default-form contact-form">
                        <h2>SEND US MESSAGE</h2>
                        <form method="post" action="" id="">
                            {{ csrf_field() }}

                            <div class="row clearfix">

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Name" required>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }} col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" placeholder="Subject" required>
                                    @if ($errors->has('subject'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }} col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" class="form-control" placeholder="Your Message" required>{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-two">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

                <!--Contact Column-->
                <div class="contact-column col-md-4 col-sm-12 col-xs-12">

                    <!--Contact Info-->
                    <div class="contact-info">
                        <h2>ADDRESS</h2>
                        <ul>
                            <li class="address"><div class="icon"><span class="flaticon-map"></span></div> Maxim Nyansa HQ, The Shuttle, 2nd Ave, Taifa, Accra</li>
                            <li><div class="icon"><span class="flaticon-technology"></span></div> +233 244 000000</li>
                            <li><div class="icon"><span class="flaticon-note"></span></div> Email: info@efiewuragh.com</li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!--Map Section-->
    <section class="map-section">
        <!--Map Box-->
        <div class="map-box">
            <!--Map Canvas-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1985.2328863740436!2d-0.24735165120757388!3d5.645544609468313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9eb2725c769f%3A0x6e56e102246ca516!2sMaxim+Nyansa+IT+Solutions!5e0!3m2!1sen!2sgh!4v1529766117035"
                    width="1340" height="450" frameborder="10px" style="border:0" allowfullscreen></iframe>
        </div>
    </section>



@endsection