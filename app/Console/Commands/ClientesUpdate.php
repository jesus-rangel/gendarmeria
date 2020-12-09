<?php

namespace App\Console\Commands;

use App\Models\Cliente;
use App\Models\Afiliado;
use App\Models\FamiliaresSocio;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ClientesUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clientes:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Cliente::truncate();
        $familiares = 
            FamiliaresSocio::select( 
                DB::raw("
                    Fs_codest as codest,
                    Fs_situacion as situacion,
                    Fs_apellido as apellido,
                    Fs_nombre as nombre,
                    Fs_dni as dni,
                    Fs_parentesco as parentesco"))
                    ->where('Fs_249', '=', 'SI')
                    ->where('Fs_estado', '=', 'A')->get();
        
        foreach($familiares as $familiar)
        {
            Cliente::create([
                'codest' => $familiar->codest,
                'situacion' => $familiar->situacion,
                'apellido' => $familiar->apellido,
                'nombre' => $familiar->nombre,
                'dni' => $familiar->dni,
                'parentesco' => $familiar->parentesco
            ]);
        }
        $afiliados = 
            Afiliado::select([
                DB::raw("
                    Id_afiliado as id, 
                    Af_codest as codest,
                    Af_situacion as situacion,
                    A_apellido as apellido,
                    A_nombre as nombre,
                    A_dni as dni,
                    A_diasevacuacion as parentesco")])
            ->join('afiliaciones_mov', function($join)
                    {
                        $join->on('Af_codest', '=', 'A_codest');
                        $join->on('Af_situacion', '=', 'A_situacion');
                    })
            ->where('A_tipoestado', '<>', 'B')
            ->where('Af_concepto', '249')->get();
        
            foreach($afiliados as $afiliado)
            {
                Cliente::create([
                    'codest' => $afiliado->codest,
                    'situacion' => $afiliado->situacion,
                    'apellido' => $afiliado->apellido,
                    'nombre' => $afiliado->nombre,
                    'dni' => $afiliado->dni,
                    'parentesco' => $afiliado->parentesco
                ]);
            }
        return 0;
    }
}
