<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard',[
          'registers' => register::all()
        ]);
        
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
        $registro = new register();
        $registro -> name = $request ->get('nombres');
        $registro -> lastname = $request ->get('apellidos');
        $registro -> Id_type = $request ->get('typedocument');
        $registro -> id_user = $request ->get('numidentificacion');
        $registro -> uri_photo = 'No hay dato';
        $registro -> hobbies = $request ->get('pasatiempo');
        $registro ->save();

        return redirect('/registers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = register::find($id);
        return $registro;
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
        $registro = register::find($id);
        $registro -> name = $request ->get('nombres1');
        $registro -> lastname = $request ->get('apellidos1');
        $registro -> Id_type = $request ->get('typedocument1');
        $registro -> id_user = $request ->get('numidentificacion1');
        $registro -> uri_photo = 'No hay dato';
        $registro -> hobbies = $request ->get('pasatiempo1');
        $registro ->save();

        return response()->json([
            'message' => 'ok'
          ]); 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = register::find($id);
        $registro -> delete();

        return response()->json([
            'message' => 'ok'
          ]); 
    }
}
