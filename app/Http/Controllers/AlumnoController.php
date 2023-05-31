<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Models\Curso;
use App\Models\Grado;
use App\Models\Sucursal;
use Illuminate\Http\Request;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = \App\Models\Alumno::orderBy('id', 'asc')->paginate(25);
        return view('alumnos.listar_alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $grados = Grado::all(); // Obtener todos los grados desde la base de datos
        $sucursales = Sucursal::all(); // Obtener todos las sucursales desde la base de datos
        $cursos = Curso::all(); // Obtener todos las sucursales desde la base de datos

        return view('alumnos.agregar_alumnos', compact('grados', 'sucursales', 'cursos'));
        //return view('alumnos.agregar_alumnos');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumnos = new Alumno();
        /*$sucursals = new Sucursal();
        $grados = new Grado();
        $cursos = new Curso();*/
        $alumnos->id = $request->post('id');
        $alumnos->nombre = $request->post('nombre');
        $alumnos->grado_id = $request->post('grado_id');
        $alumnos->curso_id = $request->post('curso_id');
        $alumnos->fecha_registro = $request->post('fecha_registro');
        $alumnos->sucursal_id = $request->post('sucursal_id');

        $alumnos->save();

        return redirect()->route("alumno.index")->with("success", "Agregado con exito!");



    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $grados = Grado::all(); // Obtener todos los grados desde la base de datos
        $sucursales = Sucursal::all(); // Obtener todos las sucursales desde la base de datos
        $cursos = Curso::all(); // Obtener todos las sucursales desde la base de datos
        $alumnos = \App\Models\Alumno::find($id);
        return view("alumnos.actualizar_alumnos", compact('alumnos', 'grados', 'sucursales', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $alumnos = \App\Models\Alumno::find($id);

        $alumnos->id = $request->post('id');
        $alumnos->nombre = $request->post('nombre');
        $alumnos->grado_id = $request->post('grado_id');
        $alumnos->curso_id = $request->post('curso_id');
        $alumnos->fecha_registro = $request->post('fecha_registro');
        $alumnos->sucursal_id = $request->post('sucursal_id');

        $alumnos->save();

        return redirect()->route("alumno.index")->with("success", "Actualizado con exito!");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

    }
}
