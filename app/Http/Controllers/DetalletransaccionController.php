<?php

namespace App\Http\Controllers;

use App\Models\Detalletransaccion;
use Illuminate\Http\Request;

/**
 * Class DetalletransaccionController
 * @package App\Http\Controllers
 */
class DetalletransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalletransaccions = Detalletransaccion::paginate();

        return view('detalletransaccion.index', compact('detalletransaccions'))
            ->with('i', (request()->input('page', 1) - 1) * $detalletransaccions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalletransaccion = new Detalletransaccion();
        return view('detalletransaccion.create', compact('detalletransaccion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detalletransaccion::$rules);

        $detalletransaccion = Detalletransaccion::create($request->all());

        return redirect()->route('detalletransaccions.index')
            ->with('success', 'Detalletransaccion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalletransaccion = Detalletransaccion::find($id);

        return view('detalletransaccion.show', compact('detalletransaccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalletransaccion = Detalletransaccion::find($id);

        return view('detalletransaccion.edit', compact('detalletransaccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detalletransaccion $detalletransaccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalletransaccion $detalletransaccion)
    {
        request()->validate(Detalletransaccion::$rules);

        $detalletransaccion->update($request->all());

        return redirect()->route('detalletransaccions.index')
            ->with('success', 'Detalletransaccion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalletransaccion = Detalletransaccion::find($id)->delete();

        return redirect()->route('detalletransaccions.index')
            ->with('success', 'Detalletransaccion deleted successfully');
    }
}
