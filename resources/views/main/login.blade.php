@include('partials._css')





<div class="col-md-8 col-md-offset-2 ">
    <div class="panel panel-default" style="margin-top: 70px">
        <div class="panel-heading w3-padding-24" id="loginHeader">
            <h1><center><b>PROVIDE CRENDENTIALS TO LOGIN</b></center></h1>
        </div>
        <!-- Form for login starts here -->
        <form class="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          @if(count($errors) >0)
                          @foreach($errors->all() as $error)
                          <div class="alert alert-danger">
                              
                              {{$error}}
                          </div>
                          @endforeach
                          @endif

          <!-- Panel body starts here -->
          <div class="panel-body" id="loginBody">
           <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div>
           <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
            <div class="form-group">
            <div class="row">
                @if (session()->has('error'))
               <div class="alert alert-danger" role="alert" id="myLogin">
                <a href="{{ route('login') }}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Ooops: </strong> {!! session('error') !!}
               </div>
              @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">Email Address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email address" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
           </div>

           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="control-label">Password</label>
                <input id="password" type="password" class="form-control" placeholder="Enter password" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
          
            <div class="form-group">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                 <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                 </label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <a class="btn btn-link" href="">
                    Forgot Your Password?
                  </a>
                </div>
            </div>
           
           </div>
           </div>
           <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div>
          </div>

          <!-- The login panel footer -->
          <div class="panel-footer" id="loginFooter">
            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div>
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
              <button type="submit" class="btn btn-lg btn-block"><i class="fas fa-sign-in-alt"></i> <b>Login</b></button> 
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div> 
            <div class="clearfix"></div>
          </div>
        </form> 
    </div>


 </div>
 @include('partials._javascript')