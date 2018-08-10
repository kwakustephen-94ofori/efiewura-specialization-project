@extends('layout.ownerlayout')

@section('title' , 'Owner DashBoard')


@section('content')

 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

    	<div class="row">
	    	@if (session()->has('message'))
	    	<div class="alert alert-danger" role="alert" id="myAlert">
	    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
	    		<strong>Alert: </strong> {!! session('message') !!}
	    	</div>
	    	@endif
    	</div>

       <p>your content goes here</p>

    </div>

  </div>

@endsection