<?php

namespace App\Http\Controllers;

use App\Models\Transaccione;
use Illuminate\Http\Request;

/**
 * Class TransaccioneController
 * @package App\Http\Controllers
 */
class TransaccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transacciones = Transaccione::paginate();

        return view('transaccione.index', compact('transacciones'))
            ->with('i', (request()->input('page', 1) - 1) * $transacciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaccione = new Transaccione();
        return view('transaccione.create', compact('transaccione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Transaccione::$rules);

        $transaccione = Transaccione::create($request->all());

        return redirect()->route('transacciones.index')
            ->with('success', 'Transaccione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaccione = Transaccione::find($id);

        return view('transaccione.show', compact('transaccione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaccione = Transaccione::find($id);

        return view('transaccione.edit', compact('transaccione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Transaccione $transaccione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaccione $transaccione)
    {
        request()->validate(Transaccione::$rules);

        $transaccione->update($request->all());

        return redirect()->route('transacciones.index')
            ->with('success', 'Transaccione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $transaccione = Transaccione::find($id)->delete();

        return redirect()->route('transacciones.index')
            ->with('success', 'Transaccione deleted successfully');
    }
}
