<?php

namespace App\Http\Controllers;

use App\Models\Transferenciainventario;
use Illuminate\Http\Request;

/**
 * Class TransferenciainventarioController
 * @package App\Http\Controllers
 */
class TransferenciainventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transferenciainventarios = Transferenciainventario::paginate();

        return view('transferenciainventario.index', compact('transferenciainventarios'))
            ->with('i', (request()->input('page', 1) - 1) * $transferenciainventarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transferenciainventario = new Transferenciainventario();
        return view('transferenciainventario.create', compact('transferenciainventario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Transferenciainventario::$rules);

        $transferenciainventario = Transferenciainventario::create($request->all());

        return redirect()->route('transferenciainventarios.index')
            ->with('success', 'Transferenciainventario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transferenciainventario = Transferenciainventario::find($id);

        return view('transferenciainventario.show', compact('transferenciainventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transferenciainventario = Transferenciainventario::find($id);

        return view('transferenciainventario.edit', compact('transferenciainventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Transferenciainventario $transferenciainventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transferenciainventario $transferenciainventario)
    {
        request()->validate(Transferenciainventario::$rules);

        $transferenciainventario->update($request->all());

        return redirect()->route('transferenciainventarios.index')
            ->with('success', 'Transferenciainventario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $transferenciainventario = Transferenciainventario::find($id)->delete();

        return redirect()->route('transferenciainventarios.index')
            ->with('success', 'Transferenciainventario deleted successfully');
    }
}
