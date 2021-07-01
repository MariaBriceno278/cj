<?php

namespace App\Http\Controllers;
use App\Involucrado;
use Illuminate\Http\Request;
use app\Http\Requests\InvolucradoStoreRequest;
use app\Http\Requests\InvolucradoUpdateRequest;

class InvolucradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $involucrados = Involucrado::get();
        return view('admin.involucrado.index', compact('involucrados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.involucrados.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvolucradoStoreRequest $request)
    {
        Involucrado::create($request->all());
        return redirect()->route('involucrados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Involucrado  $involucrado
     * @return \Illuminate\Http\Response
     */
    public function show(Involucrado $involucrado)
    {
        return view('admin.involucrado.show', compact('involucrado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Involucrado  $involucrado
     * @return \Illuminate\Http\Response
     */
    public function edit(Involucrado $involucrado)
    {
        return view('admin.involucrado.show', compact('involucrado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Involucrado  $involucrado
     * @return \Illuminate\Http\Response
     */
    public function update(InvolucradoUpdateRequest $request, Involucrado $involucrado)
    {
        $involucrado -> Involucrado::update($request->all());
        return redirect()->route('involucrados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Involucrado  $involucrado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Involucrado $involucrado)
    {
        $involucrado->delete();
        return redirect()->route('involucrados.index');
    }
}
