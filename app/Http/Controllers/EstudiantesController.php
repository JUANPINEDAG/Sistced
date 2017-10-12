<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Aula;
use App\Periodo_Academico;
use Validator;
use Redirect;
use Session;


class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('admin.estudiantes.index')->with('estudiantes' , $estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aulas = Aula::orderBy('id', 'DESC')->pluck('localizacion' , 'id');
        $periodos = Periodo_Academico::orderBy('id')->pluck('fecha_inicio' , 'id');
        return view('admin.estudiantes.create' , ['aulas' => $aulas] , ['periodos' => $periodos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $validator = Validator::make($request->all(), [
            'nombres' => 'required',
            'apellidos' => 'required',
            'cumpleanos' => 'required',
            'sexo' => 'required',
            'libro' => 'required',
            'telefono' => 'required',
            'folio' => 'required',
            'nombre_familiar' => 'required',
            'direccion' => 'required',
            'grado' => 'required',
            'tanda' => 'required',
            'aula_id' => 'required',
            'periodo_academico_id' => 'required',
            
        ]);

        if ($validator->fails()) {
            return redirect('estudiantes/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $estudiantes = new Estudiante;
        $estudiantes->fill($request->all());
        $estudiantes->save();
        Session::flash('message','Estudiante ' . $estudiantes->nombres . ' creada con exito...');
        return redirect('estudiantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        return view('admin.estudiantes.show')->with('estudiante', $estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantes = Estudiante::find($id);
        $aula = Aula::orderBy('id', 'DESC')->pluck( 'localizacion' , 'id');
        $periodo = Periodo_Academico::orderBy('id')->pluck('fecha_inicio' , 'id');
        return view('admin.estudiantes.edit')->with('estudiantes' , $estudiantes)
                                             ->with('aula' , $aula)
                                             ->with('periodo' , $periodo);

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
        /*$validator = Validator::make($request->all(), [
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|unique:estudiantes',
            'cumpleanos' => 'required',
            'sexo' => 'required',
            'identificacion' => 'required|unique:estudiantes',
            'telefono' => 'required',
            'estado_civil' => 'required',
            'nombre_materia' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('estudiantes.edit' , $id)
                        ->withErrors($validator)
                        ->withInput();
        }
*/
        $estudiantes = Estudiante::find($id);
        $estudiantes->fill($request->all());
        $estudiantes->save();
        Session::flash('message','Estudiante' . $estudiantes->nombres . ' editado(a) con exito...');
        return redirect('estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantes = Estudiante::find($id);
        $estudiantes->delete();
        Session::flash('message','Estudiante ' . $estudiantes->nombres . ' elimanado(a) con exito...');
        return redirect('estudiantes');
    }
}
