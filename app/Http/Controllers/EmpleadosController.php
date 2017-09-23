<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Validator;
use Redirect;
use Session;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('admin.empleados.index')->with('empleados' , $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|unique:empleados',
            'cumpleanos' => 'required',
            'sexo' => 'required',
            'identificacion' => 'required|unique:empleados',
            'telefono' => 'required',
            'estado_civil' => 'required',
            'nombre_materia' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('empleados/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $empleados = new Empleado;
        $empleados->fill($request->all());
        $empleados->save();
        Session::flash('message','Empleado ' . $empleados->nombres . ' creada con exito...');
        return redirect('empleados');
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
        $empleados = Empleado::find($id);
        return view('admin.empleados.edit' , ['empleados' => $empleados]);
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'cumpleanos' => 'required',
            'sexo' => 'required',
            'identificacion' => 'required',
            'telefono' => 'required',
            'estado_civil' => 'required',
            'nombre_materia' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('empleados.edit' , $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $empleados = Empleado::find($id);
        $empleados->fill($request->all());
        $empleados->save();
        Session::flash('message','Empleado(a) ' . $empleados->nombres . ' editado(a) con exito...');
        return redirect('empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleados = Empleado::find($id);
        $empleados->delete();
        Session::flash('message','Empleado(a) ' . $empleados->nombres . ' elimanado(a) con exito...');
        return redirect('empleados');
    }
}
