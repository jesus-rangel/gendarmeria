<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Operacion;
use Illuminate\Http\Request;

class OperacionController extends Controller
{
    public function store(Request $request)
    {
        Operacion::create([
            'dni_cliente' => $request->dni_cliente,
            'id_vademecum' => $request->id_vademecum,
            'purchase_date' => Carbon::now(),
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('clientes.show', $request->dni_cliente);
    }

    public function destroy(Operacion $operacion)
    {
        $dni_cliente = $operacion->dni_cliente;
        if ($operacion->purchase_date <= Carbon::now()->endOfDay() && $operacion->purchase_date >= Carbon::now()->startOfDay())
        {
            $operacion->delete();
            flash(__('Operación borrada con éxito!'))->success()->important();
            return redirect()->route('clientes.show', $dni_cliente);
        }
        flash(__('Imposible borrar operación!'))->error()->important();
        return redirect()->route('clientes.show', $dni_cliente);
    }
}
