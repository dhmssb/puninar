<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

public function index()
{
    return Location::all();
}

public function show($id)
{
    $loc = Location::findOrFail($id);


    return response()->json($loc);
}

public function store(Request $request)
{
    try {

    $loc = new Location();
    $loc->LOCATION_NAME = $request->input('location_name');
    $loc->CITY = $request->input('city');
    $loc->PROVINCE = $request->input('province');
    $loc->LATITUDE = $request->input('latitude');
    $loc->LONGITUDE = $request->input('longitude');
    $loc->INSERT_USER = $request->input('insert_user');
    $loc->INSERT_DATE = $request->input('insert_date');
    $loc->UPDATE_USER = $request->input('update_user');
    $loc->UPDATE_DATE = $request->input('update_date');

    if ($loc->save()){
    return response()->json($loc, 201);
    }

    }catch (\Exception $e){
        return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
    }
}

public function update(Request $request, $id)
{
    try {

    $loc = Location::findOrFail($id);
    $loc->LOCATION_NAME = $request->input('location_name');
    $loc->CITY = $request->input('city');
    $loc->PROVINCE = $request->input('province');
    $loc->LATITUDE = $request->input('latitude');
    $loc->LONGITUDE = $request->input('longitude');
    $loc->INSERT_USER = $request->input('insert_user');
    $loc->INSERT_DATE = $request->input('insert_date');
    $loc->UPDATE_USER = $request->input('update_user');
    $loc->UPDATE_DATE = $request->input('update_date');

    if ($loc->save()){
    return response()->json(['data'=>$loc, 'message'=>'Updated succesfully'], 200);
    }

    }catch (\Exception $e){
        return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
    }
}

public function destroy($id){
    try {

        $loc = Location::findOrFail($id);


        if ($loc->delete()){
        return response()->json(['status'=> 'success', 'message'=>'Delete succesfully'], 204);
        }

        }catch (\Exception $e){
            return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
        }
}



}
