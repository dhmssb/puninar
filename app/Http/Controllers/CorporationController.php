<?php

namespace App\Http\Controllers;

use App\Models\Corporation;
use Illuminate\Http\Request;

class CorporationController extends Controller
{
    public function index()
{
    return Corporation::all();
}

public function show($id)
{
    $corp = Corporation::findOrFail($id);


    return response()->json($corp);
}

public function store(Request $request)
{
    try {

    $corp = new Corporation();
    $corp->CORPORATION_NAME = $request->input('corporation_name');
    $corp->INSERT_USER = $request->input('insert_user');
    $corp->INSERT_DATE = $request->input('insert_date');
    $corp->UPDATE_USER = $request->input('update_user');
    $corp->UPDATE_DATE = $request->input('update_date');

    if ($corp->save()){
    return response()->json($corp, 201);
    }

    }catch (\Exception $e){
        return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
    }
}

public function update(Request $request, $id)
{
    try {

    $corp = Corporation::findOrFail($id);
    $corp->CORPORATION_NAME = $request->input('corporation_name');
    $corp->INSERT_USER = $request->input('insert_user');
    $corp->INSERT_DATE = $request->input('insert_date');
    $corp->UPDATE_USER = $request->input('update_user');
    $corp->UPDATE_DATE = $request->input('update_date');

    if ($corp->save()){
        return response()->json(['data'=>$corp, 'message'=>'Updated succesfully'], 200);
        }

        }catch (\Exception $e){
            return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
        }
}

public function destroy($id){
    try {

        $loc = Corporation::findOrFail($id);


        if ($loc->delete()){
        return response()->json(['status'=> 'success', 'message'=>'Delete succesfully'], 204);
        }

        }catch (\Exception $e){
            return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
        }
}

}
