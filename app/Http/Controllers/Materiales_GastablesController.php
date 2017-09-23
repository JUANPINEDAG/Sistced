<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material_Gastable;
use Validator;
use Redirect;
use Session;

class Materiales_GastablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = Material_Gastable::all();
        return view('admin.materiales_gastables.index')->with('materiales' , $materiales);
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
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:materiales_gastables',
            'cantidad' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect('materiales_gastables')
                        ->withErrors($validator)
                        ->withInput();
        }

        $materiales = new Material_Gastable;
        $materiales->fill($request->all());
        $materiales->save();
        Session::flash('message','Articulo ' . $materiales->nombre . ' creado con exito...');
        return redirect('materiales_gastables');
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
