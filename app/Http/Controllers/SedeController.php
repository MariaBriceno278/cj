<?php

namespace App\Http\Controllers;

use App\Sede;
use Illuminate\Http\Request;
use App\Http\Requests\SedeStoreRequest;
use App\Http\Requests\SedeUpdateRequest;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::get();
        return view('admin.sede.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sede.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sede::create($request->all());
        return redirect()->route('sedes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(Sede $sede)
    {
        return view('admin.sede.show', compact('sede'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit(Sede $sede)
    {
        return view('admin.sede.show', compact('sede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sede $sede)
    {
        $sede->Sede::update($request->all());;
        return redirect()->route('sedes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sede $sede)
    {
        $sede->delete();
        return redirect()->route('sedes.index');
    }
}
