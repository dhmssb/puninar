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

}
