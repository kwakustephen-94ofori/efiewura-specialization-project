@extends('layout.adminlayout')

@section('title','Add Property Type')

@section('content')


<!-- page content -->
<div class="right_col" role="main">
	<div class="">


		<div class="clearfix"></div>

		<div class="row">


			<div class="clearfix"></div>

			@if(Session::has('amenity-success'))
			<div class="alert alert-success" id="myAlert">
				<p>{{ Session::get('property-success') }}</p>
			</div>
			@endif

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>ALL AMENITIES</h2>
						<a class="btn btn-success pull-right" href="{{route('amenity.create')}}">Add New Amenity</a>
						<div class="clearfix"></div>
					</div>

					<div class="x_content">


						<div class="table-responsive">
							<table class="table table-striped jambo_table bulk_action">
								<thead>
									<tr class="headings">

										<th class="column-title"># </th>
										<th class="column-title">Amenity</th>
										<th class="column-title" colspan="2">Action </th>



									</tr>
								</thead>

								@foreach($allamenities as $index=>$amenity)
								<tbody>
									<tr class="even pointer">

										<td>{{ $index+1 }}</td>
										<td>{{ $amenity->name}}</td>
										<td>
											<a href="{{ route('amenity.edit', [$amenity->id])}}" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
											<a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>
										</td>

									</tr>


								</tbody>

								@endforeach
							</table>

							<p>{{ $allamenities->links() }}</p>

						</div>


						
					</div>
				</div>
			</div>




		</div>
	</div>
</div>
<!-- /page content -->


@endsection