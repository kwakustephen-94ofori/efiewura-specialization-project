@extends('layout.adminlayout')



@section('content')

<div class="right_col" role="main">

@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif

@if ($errors->any())

<div class="alert alert-danger">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	Please check the form below for errors

</div>

@endif

  <div class="container">
  
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>View All Personnels</h4>
        <div class="table-responsive">
        <div class="col col-xs-12 text-right">
                    <a class="pull-right btn btn-success btn-sm" href="/user/personnel">Create New</a>
                  </div>
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>No</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Phone Number</th>
                   <th>Nationality</th>
                     <th>Address</th>
                     
                     <th>Image</th>
                     <th>Actions</th>
                      
                      
                   </thead>
@foreach($personnels as $personnel)
@if($personnel->user_type=='Personnel')
    <tbody>
    
    <tr>
    <td>{{$personnel->id}}</td>
      <td>{{$personnel->name}}</td>
      <td>{{$personnel->email}}</td>
      <td>{{$personnel->phone_number}}</td>
      <td>{{$personnel->nationality}}</td>
      <td>{{$personnel->address}}</td>
      <td>
      <img src="{{asset('profilepics/' .$personnel->profile_pic)}}" height="50" width="50" style="float: left"/>
      
      </td>
      
    
    <td>
    
      <a href="{{ URL::to('personnel/' . $personnel->id . '/edit') }} " class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
  
    
  
   <a href="/delete/{{$personnel->id}}"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" ></span>  </a>
                                         

      


                                
   </td>
    </tr>
    
    </tbody>
    @endif
@endforeach
        
</table>
















    






    





@endsection