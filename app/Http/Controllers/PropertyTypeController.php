<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyType;

use DB;

use Session;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allpropertytypes = DB::table('property_types')
                            ->paginate(10);

                            //dd($allpropertytypes);

       return view('admin.property_type.view_property_type', compact('allpropertytypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property_type.property_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate($request, array(

            'name'=>'required'
        ));

        //create an instance of the propertytype class
        $propertype = new PropertyType;

        $propertype->name = $request['name'];


        $propertype->save();

        Session::flash('property-success','PropertyType Added Successfully!');

        return redirect()->route('property-type.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propertype = PropertyType::findOrFail($id);

        return view('admin.property_type.editproperty_type', compact('propertype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
