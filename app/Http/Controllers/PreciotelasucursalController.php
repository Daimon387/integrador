<?php

namespace App\Http\Controllers;

use App\Models\Preciotelasucursal;
use Illuminate\Http\Request;

/**
 * Class PreciotelasucursalController
 * @package App\Http\Controllers
 */
class PreciotelasucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preciotelasucursals = Preciotelasucursal::paginate();

        return view('preciotelasucursal.index', compact('preciotelasucursals'))
            ->with('i', (request()->input('page', 1) - 1) * $preciotelasucursals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preciotelasucursal = new Preciotelasucursal();
        return view('preciotelasucursal.create', compact('preciotelasucursal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Preciotelasucursal::$rules);

        $preciotelasucursal = Preciotelasucursal::create($request->all());

        return redirect()->route('preciotelasucursals.index')
            ->with('success', 'Preciotelasucursal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preciotelasucursal = Preciotelasucursal::find($id);

        return view('preciotelasucursal.show', compact('preciotelasucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preciotelasucursal = Preciotelasucursal::find($id);

        return view('preciotelasucursal.edit', compact('preciotelasucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Preciotelasucursal $preciotelasucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preciotelasucursal $preciotelasucursal)
    {
        request()->validate(Preciotelasucursal::$rules);

        $preciotelasucursal->update($request->all());

        return redirect()->route('preciotelasucursals.index')
            ->with('success', 'Preciotelasucursal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preciotelasucursal = Preciotelasucursal::find($id)->delete();

        return redirect()->route('preciotelasucursals.index')
            ->with('success', 'Preciotelasucursal deleted successfully');
    }
}
