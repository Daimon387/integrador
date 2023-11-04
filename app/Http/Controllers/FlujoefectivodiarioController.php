<?php

namespace App\Http\Controllers;

use App\Models\Flujoefectivodiario;
use Illuminate\Http\Request;

/**
 * Class FlujoefectivodiarioController
 * @package App\Http\Controllers
 */
class FlujoefectivodiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flujoefectivodiarios = Flujoefectivodiario::paginate();

        return view('flujoefectivodiario.index', compact('flujoefectivodiarios'))
            ->with('i', (request()->input('page', 1) - 1) * $flujoefectivodiarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flujoefectivodiario = new Flujoefectivodiario();
        return view('flujoefectivodiario.create', compact('flujoefectivodiario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Flujoefectivodiario::$rules);

        $flujoefectivodiario = Flujoefectivodiario::create($request->all());

        return redirect()->route('flujoefectivodiarios.index')
            ->with('success', 'Flujoefectivodiario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flujoefectivodiario = Flujoefectivodiario::find($id);

        return view('flujoefectivodiario.show', compact('flujoefectivodiario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flujoefectivodiario = Flujoefectivodiario::find($id);

        return view('flujoefectivodiario.edit', compact('flujoefectivodiario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Flujoefectivodiario $flujoefectivodiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flujoefectivodiario $flujoefectivodiario)
    {
        request()->validate(Flujoefectivodiario::$rules);

        $flujoefectivodiario->update($request->all());

        return redirect()->route('flujoefectivodiarios.index')
            ->with('success', 'Flujoefectivodiario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $flujoefectivodiario = Flujoefectivodiario::find($id)->delete();

        return redirect()->route('flujoefectivodiarios.index')
            ->with('success', 'Flujoefectivodiario deleted successfully');
    }
}
