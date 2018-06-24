@extends('layout.ownerlayout')

@section('title' , 'Owner DashBoard')


@section('content')

 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

       <section class="content">
            <!-- Info boxes -->
            <div class="row">

                <form class="form" method="POST" action="{{ route('save-property') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="panel-body" id = "addPropertyBody">
                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div>
                        <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">

                    <fieldset>
                        <legend>Add New Property</legend>


                        <div class="form-group{{ $errors->has('p_name') ? 'has-error' : '' }}">
                            <label for="p_name" class="control-label">Property Name</label>
                            <input type="text" id="p_name" class="form-control" name="p_name" value="{{ old('p_name') }}" required>
                            @if ($errors->has('p_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('p_name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('p_type') ? 'has-error' : '' }}">
                            <label for="p_type" class="control-label">Property Type</label>
                            <select name="p_type" id="p_type" class="form-control" value="{{ old('p_type') }}" required>
                                @foreach($property_type as $p_type)
                                    <option value="{{$p_type->id}}">{{$p_type->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('p_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('p_type') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="description" class="control-label">Property Description</label>
                            <textarea id="description" class="form-control" name="description" required>{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('price') ? 'has-error' : '' }}">
                            <label for="price" class="control-label">Price</label>
                            <input type="number" id="price" class="form-control" name="price" value="{{ old('price') }}" min="0" required>
                            @if ($errors->has('price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>

                       
                        <div class="form-group{{ $errors->has('sale_type') ? 'has-error' : '' }}">
                            <label for="sale_type" class="control-label">Sale Type</label>
                            <select id="sale_type" class="form-control" name="sale_type" value="{{ old('sale_type') }}">
                                <option value="Rent">Rent</option>
                                <option value="Sale">Sale</option>
                            </select>
                            @if ($errors->has('sale_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sale_type') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('num_room') ? 'has-error' : '' }}">
                            <label for="num_room" class="control-label">Number of Rooms</label>
                            <input type="number" id="num_room" class="form-control" name="num_room" value="{{ old('num_room') }}" min="0" required>
                            @if ($errors->has('num_room'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('num_room') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('num_bathroom') ? 'has-error' : '' }}">
                            <label for="num_bathroom" class="control-label">Number of Bathrooms</label>
                            <input type="number" id="num_bathroom" class="form-control" name="num_bathroom" value="{{ old('num_bathroom') }}" min="0" required>
                            @if ($errors->has('num_bathroom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('num_bathroom') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('garage') ? 'has-error' : '' }}">
                            <label for="garage" class="control-label">Garage</label>
                            <select id="garage" class="form-control" name="garage" value="{{ old('garage') }}">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            @if ($errors->has('garage'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('garage') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('dimension') ? 'has-error' : '' }}">
                            <label for="dimension" class="control-label">Dimension</label>
                            <input type="text" id="dimension" class="form-control" name="dimension" value="{{ old('dimension') }}">
                            @if ($errors->has('dimension'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dimension') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('negotiable') ? 'has-error' : '' }}">
                            <label for="negotiable" class="control-label">Negotiable</label>
                            <select  id="negotiable" class="form-control" name="negotiable" value="{{ old('negotiable') }}">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                            @if ($errors->has('negotiable'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('negotiable') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group{{ $errors->has('amenities') ? 'has-error' : '' }}">
                            <label for="amenities" class="control-label">Social Amenities</label>
                            <textarea id="amenities" class="form-control" name="amenities">{{ old('amenities') }}</textarea>
                            @if ($errors->has('amenities'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('amenities') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('video') ? 'has-error' : '' }}">
                            <label for="video" class="control-label">Video of Facility</label>
                            <input type="file" id="video" class="" name="video" value="{{ old('video') }}">
                            @if ($errors->has('video'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('video') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('image') ? 'has-error' : '' }}">
                            <label for="image" class="control-label">Upload Pictures of Facility</label>
                            <input type="file" id="image" class="" name="image[]" value=" " multiple required>
                            @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12" width="500px">
                        	<button type="submit" class="btn btn-primary">Add</button>
                    	</div>

                    </fieldset>
                        </div>
                    </div>

                </form>

            </div>


        </section>

    </div>

  </div>

@endsection