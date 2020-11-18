<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin|super-admin'])->only(['edit', 'update', 'delete', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $organizations = Organization::name($request->search_name)->provincia($request->search_province)/* ->domicilio($request->search_address) */->paginate(5);
        return view('organizations.index', compact('organizations'));
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
        $organization = Organization::create($request->all());

        if(!$organization->save()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('organizations.index');
        }

        flash(__('Farmacia agregada con éxito!'))->success()->important();
        return redirect()->route('organizations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return view('organizations.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $organization->fill($request->all());
        $organization->save();

        if(!$organization->save()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('organizations.index');
        }

        flash(__('Farmacia actualizada con éxito!'))->success()->important();
        return redirect()->route('organizations.index');
    }

    public function delete(Organization $organization)
    {
        return view('organizations.delete', compact('organization'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();

        if(!$organization->delete()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('organizations.index');
        }

        flash(__('Farmacia eliminada con éxito!'))->success()->important();

        return redirect()->route('organizations.index');
    }
}
