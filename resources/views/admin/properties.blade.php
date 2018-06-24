@extends('layout.adminlayout')

@section('title','Properties Page')

@section('content')

<!-- page content -->
<div class="right_col" role="main">

<div class="row">
    

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
        <table class="table table-boardered jambo_table bulk_action">

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
            <tr class="even pointer">
              <td class=" ">1</td>
              <td class=" ">Western</td>
              <td class=" ">Asanco</td>
              <td class=" ">Uptown</td>
              <td class="a-right a-right ">Nyarko</td>
              <td class=" ">The room is paint with red colors and blue</td>
              <td class="a-right a-right">₵ 400</td>
              <td class=" ">6</td>
              <td class=" ">7</td>
              <td class=" ">200 x 400</td>
              <td><a href="#" class="btn btn-xs btn-info">View</a></td>
              <td><a href="#" class="btn btn-xs btn-success">Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger">Delete</a></td>
            </tr>

             <tr class="even pointer">
              <td class=" ">2</td>
              <td class=" ">Western</td>
              <td class=" ">Asanco</td>
              <td class=" ">Uptown</td>
              <td class="a-right a-right ">Nyarko</td>
              <td class=" ">The room is paint with red colors and blue</td>
              <td class="a-right a-right">₵ 900</td>
              <td class=" ">6</td>
              <td class=" ">7</td>
              <td class=" ">200 x 400</td>
              <td><a href="#" class="btn btn-xs btn-info">View</a></td>
              <td><a href="#" class="btn btn-xs btn-success">Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger">Delete</a></td>
            </tr>

             <tr class="even pointer">
              <td class=" ">3</td>
              <td class=" ">Western</td>
              <td class=" ">Asanco</td>
              <td class=" ">Uptown</td>
              <td class="a-right a-right ">Nyarko</td>
              <td class=" ">The room is paint with red colors and blue</td>
              <td class="a-right a-right">₵ 600</td>
              <td class=" ">6</td>
              <td class=" ">7</td>
              <td class=" ">200 x 400</td>
              <td><a href="#" class="btn btn-xs btn-info">View</a></td>
              <td><a href="#" class="btn btn-xs btn-success">Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger">Delete</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>

</div>

<!-- /page content -->

@endsection