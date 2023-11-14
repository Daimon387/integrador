<?php

namespace App\Http\Controllers;

use App\Models\Detalletransferencia;
use Illuminate\Http\Request;

/**
 * Class DetalletransferenciaController
 * @package App\Http\Controllers
 */
class DetalletransferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalletransferencias = Detalletransferencia::paginate();

        return view('detalletransferencia.index', compact('detalletransferencias'))
            ->with('i', (request()->input('page', 1) - 1) * $detalletransferencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalletransferencia = new Detalletransferencia();
        return view('detalletransferencia.create', compact('detalletransferencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detalletransferencia::$rules);

        $detalletransferencia = Detalletransferencia::create($request->all());

        return redirect()->route('detalletransferencias.index')
            ->with('success', 'Detalletransferencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalletransferencia = Detalletransferencia::find($id);

        return view('detalletransferencia.show', compact('detalletransferencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalletransferencia = Detalletransferencia::find($id);

        return view('detalletransferencia.edit', compact('detalletransferencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detalletransferencia $detalletransferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalletransferencia $detalletransferencia)
    {
        request()->validate(Detalletransferencia::$rules);

        $detalletransferencia->update($request->all());

        return redirect()->route('detalletransferencias.index')
            ->with('success', 'Detalletransferencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalletransferencia = Detalletransferencia::find($id)->delete();

        return redirect()->route('detalletransferencias.index')
            ->with('success', 'Detalletransferencia deleted successfully');
    }
}
