<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\Http\Resources\PropertyCollection;
use App\Http\Resources\Property as PropertyResource;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PropertyCollection(Property::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Property::create([
            "name"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "category_id"=>$request->category_id,
            "location_id"=>$request->location_id,
            "bedrooms"=>$request->bedrooms,
            "status"=>$request->status
        ]);
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
        //
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
        $property=Property::find($id);
        $property->name=$request->name;
        $property->price=$request->price;
        $property->description=$request->description;
        $property->category_id=$request->category_id;
        $property->location_id=$request->location_id;
        $property->bedrooms=$request->bedrooms;
        $property->status=$request->status;
        $property->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property=Property::find($id);
        $property->deleteI();
    }
}
