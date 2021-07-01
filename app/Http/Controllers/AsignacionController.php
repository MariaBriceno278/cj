<?php

namespace App\Http\Controllers;

use App\Asignacion;
use Illuminate\Http\Request;
use App\Http\Requests\AsignacionStoreRequest;
use App\Http\Requests\AsignacionUpdateRequest;
class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacions = Asignacion::get();
        return view('admin.asignacion.index', compact('asignacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asignacion.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Asignacion::create($request->all());
        return redirect()->route('asignacions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function show(Asignacion $asignacion)
    {
        return view('admin.asignacion.show', compact('asignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignacion $asignacion)
    {
        return view('admin.asignacion.show', compact('asignacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        $asignacion->Asignacion::update($request->all());;
        return redirect()->route('asignacions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignacion $asignacion)
    {
        $asignacion->delete();
        return redirect()->route('asignacions.index');
    }
}
