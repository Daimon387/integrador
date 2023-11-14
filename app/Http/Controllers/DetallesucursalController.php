<?php

namespace App\Http\Controllers;

use App\Models\Detallesucursal;
use Illuminate\Http\Request;

/**
 * Class DetallesucursalController
 * @package App\Http\Controllers
 */
class DetallesucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallesucursals = Detallesucursal::paginate();

        return view('detallesucursal.index', compact('detallesucursals'))
            ->with('i', (request()->input('page', 1) - 1) * $detallesucursals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallesucursal = new Detallesucursal();
        return view('detallesucursal.create', compact('detallesucursal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detallesucursal::$rules);

        $detallesucursal = Detallesucursal::create($request->all());

        return redirect()->route('detallesucursals.index')
            ->with('success', 'Detallesucursal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallesucursal = Detallesucursal::find($id);

        return view('detallesucursal.show', compact('detallesucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallesucursal = Detallesucursal::find($id);

        return view('detallesucursal.edit', compact('detallesucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detallesucursal $detallesucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detallesucursal $detallesucursal)
    {
        request()->validate(Detallesucursal::$rules);

        $detallesucursal->update($request->all());

        return redirect()->route('detallesucursals.index')
            ->with('success', 'Detallesucursal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallesucursal = Detallesucursal::find($id)->delete();

        return redirect()->route('detallesucursals.index')
            ->with('success', 'Detallesucursal deleted successfully');
    }
}
