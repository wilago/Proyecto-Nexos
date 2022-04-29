<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Cuentas=Cuenta::all();
        //dd($Cuentas);
        return response()->json($Cuentas);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Cuenta=Cuenta::create($request->all());
        return response()->json($Cuenta,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuenta  $Cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $Cuenta)
    {
        //
        //return $Cuenta->id;
        $Cuentas=Cuenta::where("user_id",$Cuenta->id)->get();;
        return response()->json($Cuentas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuenta  $Cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuenta $Cuenta)
    {
        //
        $Cuenta->update( $request->all());
        return response()->json($Cuenta);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta  $Cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuenta $Cuenta)
    {
        //
        $Cuenta->delete();
        return response()->json($Cuenta);
        

    }
}
