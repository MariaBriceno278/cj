<?php

namespace App\Http\Controllers;

use App\Audiencia;
use Illuminate\Http\Request;
use App\Http\Requests\AudienciaStoreRequest;
use App\Http\Requests\AudienciaUpdateRequest;
class AudienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audiencias = Audiencia::get();
        return view('admin.audiencia.index', compact('audiencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.audiencia.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Audiencia::create($request->all());
        return redirect()->route('audiencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Audiencia  $audiencia
     * @return \Illuminate\Http\Response
     */
    public function show(Audiencia $audiencia)
    {
        return view('admin.audiencia.show', compact('audiencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Audiencia  $audiencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Audiencia $audiencia)
    {
        return view('admin.audiencia.show', compact('audiencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Audiencia  $audiencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audiencia $audiencia)
    {
        $audiencia->Caso::update($request->all());;
        return redirect()->route('audiencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Audiencia  $audiencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audiencia $audiencia)
    {
        $audiencia->delete();
        return redirect()->route('audiencias.index');
    }
}
