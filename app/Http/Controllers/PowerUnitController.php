<?php

namespace App\Http\Controllers;

use App\Models\PowerUnit;
use App\Models\Corporation;
use App\Models\Location;
use App\Models\PowerUnitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PowerUnitController extends Controller
{
    public function getData()
    {
        // Ambil data sesuai kriteria yang diminta
        $powerUnits = PowerUnit::select('POWER_UNIT_NUM', 'DESCRIPTION')
            ->join('CORPORATION', 'POWER_UNIT.ID_CORPORATION', '=', 'CORPORATION.ID_CORPORATION')
            ->join('LOCATION', 'POWER_UNIT.ID_LOCATION', '=', 'LOCATION.ID_LOCATION')
            ->join('POWER_UNIT_TYPE', 'POWER_UNIT.ID_POWER_UNIT_TYPE', '=', 'POWER_UNIT_TYPE.ID_POWER_UNIT_TYPE')
            ->whereIn('POWER_UNIT_NUM', ['B 9914 SYM', 'B 9913 SYM', 'B 9916 SYM'])
            ->get();

        // Ubah data ke format JSON
        $jsonResponse = $powerUnits->toJson(JSON_PRETTY_PRINT);

        // Ubah data ke format XML
        $xml = new \SimpleXMLElement('<root/>');
        array_walk_recursive(json_decode($jsonResponse, true), [$xml, 'addChild']);
        $xmlResponse = $xml->asXML();

        // Tampilkan data dalam format JSON dan XML
        return Response::json(['json_data' => $jsonResponse, 'xml_data' => $xmlResponse]);
    }

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

    $pu = new PowerUnit();
    $pu->POWER_UNIT_NUM = $request->input('power_unit_num');
    $pu->DESCRIPTION = $request->input('description');
    $pu->ID_CORPORATION = $request->input('id_corporation');
    $pu->ID_LOCATION = $request->input('id_location');
    $pu->ID_POWER_UNIT_TYPE = $request->input('id_power_unit_type');
    $pu->IS_ACTIVE = $request->input('is_active');
    $pu->INSERT_USER = $request->input('insert_user');
    $pu->INSERT_DATE = $request->input('insert_date');
    $pu->UPDATE_USER = $request->input('update_user');
    $pu->UPDATE_DATE = $request->input('update_date');

    if ($pu->save()){
    return response()->json($pu, 201);
    }

    }catch (\Exception $e){
        return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
    }
    }

    public function update(Request $request, $id)
    {
    try {

    $pu = PowerUnit::findOrFail($id);
    $pu->POWER_UNIT_NUM = $request->input('power_unit_num');
    $pu->DESCRIPTION = $request->input('description');
    $pu->ID_CORPORATION = $request->input('id_corporation');
    $pu->ID_LOCATION = $request->input('id_location');
    $pu->ID_POWER_UNIT_TYPE = $request->input('id_power_unit_type');
    $pu->IS_ACTIVE = $request->input('is_active');
    $pu->INSERT_USER = $request->input('insert_user');
    $pu->INSERT_DATE = $request->input('insert_date');
    $pu->UPDATE_USER = $request->input('update_user');
    $pu->UPDATE_DATE = $request->input('update_date');

    if ($pu->save()){
        return response()->json(['data'=>$pu, 'message'=>'Updated succesfully'], 200);
        }

        }catch (\Exception $e){
            return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
        }
    }

    public function destroy($id){
        try {

            $pu = Location::findOrFail($id);


            if ($pu->delete()){
            return response()->json(['status'=> 'success', 'message'=>'Delete succesfully'], 204);
            }

            }catch (\Exception $e){
                return response()->json(['status'=> 'error', 'message'=>$e->getMessage()]);
            }
    }


}


