<?php

namespace App\Http\Controllers;

use App\Models\PowerUnitType;
use Illuminate\Http\Request;

class PowerUnitTypeController extends Controller
{
    public function index()
{
    return PowerUnitType::all();
}

public function show($id)
{
    $type = PowerUnitType::findOrFail($id);


    return response()->json($type);
}

public function store(Request $request)
{
    try {

    $type = new PowerUnitType();
    $type->POWER_UNIT_TYPE_XID = $request->input('pu_type_xid');
    $type->DESCRIPTION = $request->input('description');
    $type->INSERT_USER = $request->input('insert_user');
    $type->INSERT_DATE = $request->input('insert_date');
    $type->UPDATE_USER = $request->input('update_user');
    $type->UPDATE_DATE = $request->input('update_date');

    if ($type->save()){
    return response()->json($type, 201);
    }

    }catch (\Exception $e){
        return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
    }
}

public function update(Request $request, $id)
{
    try {

    $type = PowerUnitType::findOrFail($id);
    $type->POWER_UNIT_TYPE_XID = $request->input('pu_type_xid');
    $type->DESCRIPTION = $request->input('description');
    $type->INSERT_USER = $request->input('insert_user');
    $type->INSERT_DATE = $request->input('insert_date');
    $type->UPDATE_USER = $request->input('update_user');
    $type->UPDATE_DATE = $request->input('update_date');

    if ($type->save()){
        return response()->json(['data'=>$type, 'message'=>'Updated succesfully'], 200);
        }

        }catch (\Exception $e){
            return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
        }
}

public function destroy($id){
    try {

        $type = PowerUnitType::findOrFail($id);


        if ($type->delete()){
        return response()->json(['status'=> 'success', 'message'=>'Delete succesfully'], 204);
        }

        }catch (\Exception $e){
            return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
        }
}


}
