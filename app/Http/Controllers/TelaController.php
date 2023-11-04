<?php

namespace App\Http\Controllers;

use App\Models\Tela;
use Illuminate\Http\Request;

/**
 * Class TelaController
 * @package App\Http\Controllers
 */
class TelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telas = Tela::paginate();

        return view('tela.index', compact('telas'))
            ->with('i', (request()->input('page', 1) - 1) * $telas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tela = new Tela();
        return view('tela.create', compact('tela'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tela::$rules);

        $tela = Tela::create($request->all());

        return redirect()->route('telas.index')
            ->with('success', 'Tela created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tela = Tela::find($id);

        return view('tela.show', compact('tela'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tela = Tela::find($id);

        return view('tela.edit', compact('tela'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tela $tela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tela $tela)
    {
        request()->validate(Tela::$rules);

        $tela->update($request->all());

        return redirect()->route('telas.index')
            ->with('success', 'Tela updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tela = Tela::find($id)->delete();

        return redirect()->route('telas.index')
            ->with('success', 'Tela deleted successfully');
    }
}
