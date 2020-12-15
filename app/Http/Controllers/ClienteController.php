<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cliente;
use App\Models\Operacion;
use App\Models\Vademecum;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Cliente::dni($request->search_dni)->paginate(5);
        // dd($clients->getClients());
        // $clients = Client::dni($request->search_dni)->paginate(5);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function show($cliente_dni)
    {
        $cliente = Cliente::where('dni', $cliente_dni)->first();
        $operaciones = Operacion::with('vademecum')
                        ->where('purchase_date', '>=', Carbon::now()->startOfMonth())
                        ->where('purchase_date', '<=', Carbon::now())
                        ->where('dni_cliente', $cliente_dni)
            /* ->whereHas('operaciones', function($query){
                $query->where('purchase_date' >= Carbon::now()->startOfMonth())
                    ->where('purchase_date' <= Carbon::now());
            }) */->get();
        // dd($afiliado);
        // dd($operaciones);
        return view('clientes.details', compact('cliente', 'operaciones')); 
    }

    public function addProduct(Request $request, Cliente $cliente)
    {
        $vademecum = Vademecum::nombre($request->search_name)->monodroga($request->search_monodroga)->laboratorio($request->search_lab)->troquel($request->search_troquel)->paginate(5);
        return view('clientes.add-product', compact('cliente', 'vademecum'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function edit(Afiliado $afiliado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
