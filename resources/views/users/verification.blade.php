@extends('layout.mainlayout')



@section('content')


<section class="page-title" style="background-image:url({{asset('images/background/bg-page-title-1.jpg')}});">
        <div class="auto-container">
            <div class="clearfix">
                <!--Title -->
                <div class="title-column">
                    <h1>Register to Become Efiewura</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">


                <!--Contact Column-->
                <div class="form-column col-md-6 col-sm-12 col-xs-12 col-md-offset-3">

                	{{session('code')}}
                    <!--Contact Form Form-->
                    <div class="default-form contact-form">
                        <h2>VERIFICATION</h2>

                        <form class="form" method="POST" action="{{ route('verify') }}" enctype="multipart/form-data">
	                	{{ csrf_field() }}
	                		<div class="row clearfix">

	                			<div class="form-group">
			                        <h4>Enter the code sent to your phone to verify your account</h4>
			                    </div>

			                    <div class="form-group col-md-3 col-md-offset-3">
			                        <input type="number" class="form-control" name="code" style="size: 6px;" minlength="6" maxlength="6" required>
			                    </div>

			                    <div class="form-group col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="theme-btn btn-style-two">Verify</button>
                                </div>
			                </div>
            			</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection