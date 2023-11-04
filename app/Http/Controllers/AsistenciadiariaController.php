<?php

namespace App\Http\Controllers;

use App\Models\Asistenciadiaria;
use Illuminate\Http\Request;

/**
 * Class AsistenciadiariaController
 * @package App\Http\Controllers
 */
class AsistenciadiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistenciadiarias = Asistenciadiaria::paginate();

        return view('asistenciadiaria.index', compact('asistenciadiarias'))
            ->with('i', (request()->input('page', 1) - 1) * $asistenciadiarias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asistenciadiaria = new Asistenciadiaria();
        return view('asistenciadiaria.create', compact('asistenciadiaria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asistenciadiaria::$rules);

        $asistenciadiaria = Asistenciadiaria::create($request->all());

        return redirect()->route('asistenciadiarias.index')
            ->with('success', 'Asistenciadiaria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistenciadiaria = Asistenciadiaria::find($id);

        return view('asistenciadiaria.show', compact('asistenciadiaria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistenciadiaria = Asistenciadiaria::find($id);

        return view('asistenciadiaria.edit', compact('asistenciadiaria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asistenciadiaria $asistenciadiaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistenciadiaria $asistenciadiaria)
    {
        request()->validate(Asistenciadiaria::$rules);

        $asistenciadiaria->update($request->all());

        return redirect()->route('asistenciadiarias.index')
            ->with('success', 'Asistenciadiaria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asistenciadiaria = Asistenciadiaria::find($id)->delete();

        return redirect()->route('asistenciadiarias.index')
            ->with('success', 'Asistenciadiaria deleted successfully');
    }
}
