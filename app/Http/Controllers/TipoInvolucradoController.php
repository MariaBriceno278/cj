<?php

namespace App\Http\Controllers;
use App\TipoInvolucrado;
use Illuminate\Http\Request;
use app\Http\Requests\TipoInvolucradoStoreRequest;
use app\Http\Requests\TipoInvolucradoUpdateRequest;

class TipoInvolucradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposinvolucrados = TipoInvolucrado::get();
        return view('admin.tipoinvolucrado.index', compact('tiposinvolucrados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tiposinvolucrados.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoInvolucradoStoreRequest $request)
    {
        TipoInvolucrado::create($request->all());
        return redirect()->route('tiposinvolucrados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoInvolucrado  $involucrado
     * @return \Illuminate\Http\Response
     */
    public function show(TipoInvolucrado $tipoinvolucrado)
    {
        return view('admin.tipoinvolucrado.show', compact('tipoinvolucrado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoInvolucrado  $involucrado
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoInvolucrado $tipoinvolucrado)
    {
        return view('admin.tipoinvolucrado.show', compact('tipoinvolucrado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoInvolucrado  $involucrado
     * @return \Illuminate\Http\Response
     */
    public function update(TipoInvolucradoUpdateRequest $request, TipoInvolucrado $tipoinvolucrado)
    {
        $tipoinvolucrado -> TipoInvolucrado::update($request->all());;
        return redirect()->route('tiposinvolucrados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoInvolucrado  $involucrado
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoInvolucrado $tipoinvolucrado)
    {
        $tipoinvolucrado->delete();
        return redirect()->route('tiposinvolucrados.index');
    }
}
