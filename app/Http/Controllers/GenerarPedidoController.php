<?php

namespace App\Http\Controllers;

use App\Models\GenerarPedido;
use Illuminate\Http\Request;

/**
 * Class GenerarPedidoController
 * @package App\Http\Controllers
 */
class GenerarPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generarPedidos = GenerarPedido::paginate();

        return view('generar-pedido.index', compact('generarPedidos'))
            ->with('i', (request()->input('page', 1) - 1) * $generarPedidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generarPedido = new GenerarPedido();
        return view('generar-pedido.create', compact('generarPedido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GenerarPedido::$rules);

        $generarPedido = GenerarPedido::create($request->all());

        return redirect()->route('generar-pedidos.index')
            ->with('success', 'GenerarPedido created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generarPedido = GenerarPedido::find($id);

        return view('generar-pedido.show', compact('generarPedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generarPedido = GenerarPedido::find($id);

        return view('generar-pedido.edit', compact('generarPedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GenerarPedido $generarPedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenerarPedido $generarPedido)
    {
        request()->validate(GenerarPedido::$rules);

        $generarPedido->update($request->all());

        return redirect()->route('generar-pedidos.index')
            ->with('success', 'GenerarPedido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $generarPedido = GenerarPedido::find($id)->delete();

        return redirect()->route('generar-pedidos.index')
            ->with('success', 'GenerarPedido deleted successfully');
    }
}
