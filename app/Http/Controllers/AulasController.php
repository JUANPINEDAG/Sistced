<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aula;
use Validator;
use Redirect;
use Session;

class AulasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aulas = Aula::all();
        return view('admin.aulas.index')->with('aulas' , $aulas);
        
                                        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aulas.create');
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
            'localizacion' => 'required|unique:aulas',
            'capacidad' => 'required|numeric|min:10|max:50',
        ]);

        if ($validator->fails()) {
            return redirect('/aulas')
                        ->withErrors($validator)
                        ->withInput();
        }

        $aulas = new Aula;
        $aulas->fill($request->all());
        $aulas->save();
        Session::flash('message','Aula ' . $aulas->localizacion . ' creada con exito...');
        return redirect('aulas');
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
        $aulas = Aula::find($id);
        return view('admin.aulas.edit')->with('aulas' , $aulas);
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
            'localizacion' => 'required',
            'capacidad' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('aulas.edit' , $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $aulas = Aula::find($id);
        $aulas->fill($request->all());
        $aulas->save();
        Session::flash('message','Aula ' . $aulas->localizacion . ' editada con exito...');
        return redirect('aulas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aulas = Aula::find($id);
        $aulas->delete();
        Session::flash('message','Aula ' . $aulas->localizacion . ' elimanada con exito...');
        return redirect('aulas');
    }
}
