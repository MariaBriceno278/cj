<?php

namespace App\Http\Controllers;

use App\Despacho;
use Illuminate\Http\Request;
use app\Http\Requests\DespachoStoreRequest;
use app\Http\Requests\DespachoUpdateRequest;

class DespachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despachos = Despacho::get();
        return view('admin.despacho.index', compact('despachos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.despachos.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DespachoStoreRequest $request)
    {
        Despacho::create($request->all());
        return redirect()->route('despachos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Despacho  $despacho
     * @return \Illuminate\Http\Response
     */
    public function show(Despacho $despacho)
    {
        return view('admin.despacho.show', compact('despacho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Despacho  $despacho
     * @return \Illuminate\Http\Response
     */
    public function edit(Despacho $despacho)
    {
        return view('admin.despacho.show', compact('despacho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Despacho  $despacho
     * @return \Illuminate\Http\Response
     */
    public function update(DespachoUpdateRequest $request, Despacho $despacho)
    {
        $despacho -> Despacho::update($request->all());
        return redirect()->route('despachos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Despacho  $despacho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despacho $despacho)
    {
        $despacho->delete();
        return redirect()->route('despachos.index');
    }
}
