<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use Illuminate\Http\Request;

class FarmaciaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:super-admin'])/* ->only(['edit', 'update', 'delete', 'destroy']) */;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $farmacias = Farmacia::name($request->search_name)->provincia($request->search_province)/* ->domicilio($request->search_address) */->paginate(5);
        return view('farmacias.index', compact('farmacias'));
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
        $farmacia = Farmacia::create($request->all());

        if(!$farmacia->save()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('farmacias.index');
        }

        flash(__('Farmacia agregada con éxito!'))->success()->important();
        return redirect()->route('farmacias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function show(Farmacia $farmacia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmacia $farmacia)
    {
        return view('farmacias.edit', compact('farmacia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmacia $farmacia)
    {
        $farmacia->fill($request->all());
        $farmacia->save();

        if(!$farmacia->save()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('farmacias.index');
        }

        flash(__('Farmacia actualizada con éxito!'))->success()->important();
        return redirect()->route('farmacias.index');
    }

    public function delete(Farmacia $farmacia)
    {
        return view('organizations.delete', compact('organization'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmacia $farmacia)
    {
        $farmacia->delete();

        if(!$farmacia->delete()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('farmacias.index');
        }

        flash(__('Farmacia eliminada con éxito!'))->success()->important();

        return redirect()->route('farmacias.index');
    }
}
