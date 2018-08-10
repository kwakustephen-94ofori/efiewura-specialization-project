@extends('layout.adminlayout')



@section('content')

<div class="right_col" role="main">
<section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">


                <!--Contact Column-->
                <div class="form-column col-md-6 col-sm-12 col-xs-12 col-md-offset-3">

                    <!--Contact Form Form-->
                    <div class="default-form contact-form">
                        <h2>Add Personnel</h2>

                        <form class="form" method="POST" action="{{action('UserController@updatePersonnel', $personnel->id)}}" enctype="multipart/form-data">
	                	{{ csrf_field() }}
	                		<div class="row clearfix">

			                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
			                        <input id="name" type="text" class="form-control" name="name" value="{{$personnel->name}}" placeholder="Full Name" required>
			                        @if ($errors->has('name'))
			                        <span class="help-block">
			                          <strong>{{ $errors->first('name') }}</strong>
			                        </span>
			                        @endif
			                    </div>


			                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                        <input id="email" type="email" class="form-control" name="email" value="{{$personnel->email}}" placeholder="Email" required>
			                        @if ($errors->has('email'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('email') }}</strong>
			                        </span>
			                        @endif
			                    </div>


			                    <div class="form-group{{ $errors->has('phone_number') ? 'has-error' : '' }}">
			                        <input type="number" class="form-control" name="phone_number" id="phone_number" maxlength="13" minlength="10" value="{{$personnel->phone_number}}" placeholder="Phone Number" required>
			                        @if ($errors->has('phone_number'))
			                            <span class="help-block">
			                            <strong>{{ $errors->first('phone_number') }}</strong>
			                        </span>
			                        @endif
			                    </div>


			                    

			                    <div class="form-group{{ $errors->has('nationality') ? 'has-error' : '' }}">
			                        <input type="text" class="form-control" name="nationality" id="age" min="0" max="100" value="{{$personnel->nationality}}" placeholder="Country" required>
			                        @if ($errors->has('nationality'))
			                            <span class="help-block">
			                            <strong>{{ $errors->first('nationality') }}</strong>
			                         </span>
			                        @endif
			                    </div>


			                    


			                    <div class="form-group{{ $errors->has('address') ? 'has-error' : '' }}">
			                        <textarea class="form-control" name="address" id="age" min="0" max="100" placeholder="Address" required>{{$personnel->address}}</textarea>
			                        @if ($errors->has('address'))
			                            <span class="help-block">
			                            <strong>{{ $errors->first('address') }}</strong>
			                         </span>
			                        @endif
			                    </div>

			                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			                        <input id="password" type="password" class="form-control" value="{{$personnel->password}}" name="password" placeholder="Password" required>
			                        @if ($errors->has('password'))
			                         <span class="help-block">
			                           <strong>{{ $errors->first('password') }}</strong>
			                         </span>
			                        @endif
			                    </div>

			                    


			                    <div class="form-group" {{ $errors->has('profile_pic') ? ' has-error' : '' }}>
			                        <label for="profile_pic">Upload Profile Picture</label>
			                        <input type="file" name="profile_pic" id="profile_pic" value="{{$personnel->name}}">
			                        @if ($errors->has('profile_pic'))
			                            <span class="help-block">
			                                <strong>{{ $errors->first('profile_pic') }}</strong>
			                            </span>
			                        @endif
			                    </div>
			               

			                
			                    <div class="form-group col-md-12 col-sm-12 col-xs-12 col-md-offset-9">
                                    <button type="submit" class="theme-btn btn-style-two">Add</button>
                                </div>
			                </div>
            			</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
   

@endsection