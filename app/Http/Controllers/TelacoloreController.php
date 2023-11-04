<?php

namespace App\Http\Controllers;

use App\Models\Telacolore;
use Illuminate\Http\Request;

/**
 * Class TelacoloreController
 * @package App\Http\Controllers
 */
class TelacoloreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telacolores = Telacolore::paginate();

        return view('telacolore.index', compact('telacolores'))
            ->with('i', (request()->input('page', 1) - 1) * $telacolores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telacolore = new Telacolore();
        return view('telacolore.create', compact('telacolore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Telacolore::$rules);

        $telacolore = Telacolore::create($request->all());

        return redirect()->route('telacolores.index')
            ->with('success', 'Telacolore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telacolore = Telacolore::find($id);

        return view('telacolore.show', compact('telacolore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telacolore = Telacolore::find($id);

        return view('telacolore.edit', compact('telacolore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Telacolore $telacolore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telacolore $telacolore)
    {
        request()->validate(Telacolore::$rules);

        $telacolore->update($request->all());

        return redirect()->route('telacolores.index')
            ->with('success', 'Telacolore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $telacolore = Telacolore::find($id)->delete();

        return redirect()->route('telacolores.index')
            ->with('success', 'Telacolore deleted successfully');
    }
}
