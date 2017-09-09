<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo_Academico;
use Validator;
use Redirect;
use Session;

class Periodos_AcademicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo_Academico::all();
        return view('admin.periodos_academicos.index')->with('periodos' , $periodos);
        //return view('admin.periodos_academicos.index');
        
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
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('periodos_academicos')
                        ->withErrors($validator)
                        ->withInput();
        }

        $periodos = new Periodo_Academico;
        $periodos->fill($request->all());
        $periodos->save();
        Session::flash('message','Aula ' . $periodos->fecha_inicio . ' creado con exito...');
        return redirect('periodos_academicos');
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
        $periodos = Periodo_Academico::find($id);
        return view('admin.periodos_academicos.edit')->with('periodos' , $periodos);
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
        $validator = Validator::make($request->all(), [
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('periodos_academicos.edit' , $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $periodos = Periodo_Academico::find($id);
        $periodos->fill($request->all());
        $periodos->save();
        Session::flash('message','Aula ' . $periodos->fecha_inicio . ' editada con exito...');
        return redirect('periodos_academicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $periodos = Periodo_Academico::find($id);
        $periodos->delete();
        Session::flash('message','Periodo Academico ' . $periodos->fecha_inicio . ' elimanada con exito...');
        return redirect('periodos_academicos');
    }
}
