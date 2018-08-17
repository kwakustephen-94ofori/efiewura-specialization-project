@extends('layout.adminlayout')

@section('title','Properties Page')

@section('content')

<!-- page content -->
<div class="right_col" role="main">

<div class="row">
 @if (session()->has('delete'))
 <div class="alert alert-info" role="alert" id="myAlert">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success: </strong> {!! session('delete') !!} 
 </div>
 @endif

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>All Properties Table</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>

    <div class="x_content">

      <p>The page shows all the properties Added and paginate by 20</p>

      <div class="table-responsive">

        @include('partials.modal')

     <table class="table table-boardered jambo_table bulk_action category-table" data-toggle="dataTable" data-form="deleteForm">
          <thead>
            <tr class="headings">
              <th class="column-title">No </th>
              <th class="text-center column-title" colspan="3">Locations </th>
              <th class="column-title">Name</th>
              <th class="column-title">Description</th>
              <th class="column-title">Price</th>
              <th class="column-title">Rooms</th>
              <th class="column-title">Bathrooms</th>
              <th class="column-title">Dimensions</th>
              <th class="text-center column-title no-link last" colspan="3"><span class="nobr">Actions</span></th> 
            </tr>
          </thead>

          <tbody>

            @foreach($prop as $proper) 
            <tr class="even pointer">
              <td class=" ">{{ $proper->id }}</td>
              <td class=" ">{{ $proper->region }}</td>
              <td class=" ">{{ $proper->city}}</td>
              <td class=" ">{{ $proper->suburb}}</td>
              <td class="a-right a-right">{{ $proper->proname}}</td>
              <td class=" ">{{ substr($proper->description, 0, 15)}}{{ strlen($proper->description) > 15 ? "..." : " " }}</td>
              <td class="a-right a-right">₵{{ $proper->price }}</td>
              <td class=" ">{{ $proper->number_of_rooms}}</td>
              <td class=" ">{{ $proper->number_of_bathrooms}}</td>
              <td class=" ">{{ $proper->dimension}}</td>
              <td><a href="#" class="btn btn-xs btn-info">View</a></td>
              <td><a href="#" class="btn btn-xs btn-success">Edit</a></td>
              <td>
                {!! Form::model($proper, ['method' => 'DELETE', 'route' => ['deleteProperty', $proper->id], 'class' =>'form-inline form-delete']) !!}
                {!! Form::hidden('id', $proper->id) !!}
                {!! Form::submit(trans('Delete'), ['class' => 'btn btn-xs btn-danger', 'name' => 'delete_modal']) !!}
                {!! Form::close() !!}
              </td>
            </tr>
            @endforeach 

          </tbody>
        </table>
      </div>

           <div class="text-center">
            <ul class="pagination pagination-sm pager">
              {!! $prop->links(); !!}
            </ul>
           </div>
    </div>
  </div>
</div>

</div>

</div>

<!-- /page content -->

@endsection