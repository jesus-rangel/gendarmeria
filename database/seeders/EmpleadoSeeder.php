<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Empleado::create([
            'nombre' => 'Jesus Rangel',
            'email' => 'jesusr.nm@gmail.com',
            'dni' => '95805562'
        ]);
        /* Empleado::create([
            'nombre' => 'Ramon Federico Leguizamon',
            'email' => 'fleguizamon@cirsubgn.org',
            'dni' => '39317366',
            'legajo' => '6238'
        ]);
        Empleado::create([
            'nombre' => 'Evanny Mariela Leguizamon',
            'email' => 'eleguizamon@cirsubgn.org',
            'dni' => '37799723',
            'legajo' => '6239'
        ]);
        Empleado::create([
            'nombre' => 'Alan Jorge Dos Santos',
            'email' => 'adossantos@cirsubgn.org',
            'dni' => '35695976',
            'legajo' => '475'
        ]);
        Empleado::create([
            'nombre' => 'Gisela Beatriz Rodriguez',
            'email' => 'grodriguez@cirsubgn.org',
            'dni' => '31343832',
            'legajo' => '6885'
        ]);
        Empleado::create([
            'nombre' => 'Dario Oscar Mendoza',
            'email' => 'dmendoza@cirsubgn.org',
            'dni' => '33625402',
            'legajo' => '3967'
        ]);
        Empleado::create([
            'nombre' => 'Jessica Solange Sedeño',
            'email' => 'jsedeño@cirsubgn.org',
            'dni' => '38148719',
            'legajo' => '6984'
        ]);
        Empleado::create([
            'nombre' => 'Marcos Damian Impagliazzo',
            'email' => 'mimpagliazzo@cirsubgn.org',
            'dni' => '30071711',
            'legajo' => '931'
        ]);
        Empleado::create([
            'nombre' => 'Sandra Beatriz Cabossi',
            'email' => 'scabossi@cirsubgn.org',
            'dni' => '17653232',
            'legajo' => '330'
        ]);
        Empleado::create([
            'nombre' => 'Martina Solana Crauzas',
            'email' => 'mcrauzas@cirsubgn.org',
            'dni' => '40090054',
            'legajo' => '2981'
        ]);
        Empleado::create([
            'nombre' => 'Gabriel Leonardo Linstigart',
            'email' => 'glistingart@cirsubgn.org',
            'dni' => '28188599',
            'legajo' => '6256'
        ]);
        Empleado::create([
            'nombre' => 'Pablo Russo',
            'email' => 'prusso@fixear.net',
            'dni' => '12345678'
        ]);
        Empleado::create([
            'nombre' => 'Rodrigo Agudo',
            'email' => 'agudorod@gmail.com',
            'dni' => '87654321'
        ]); */
        /* Empleado::create([
            'nombre' => 'Jorge Diaz',
            'email' => 'diazjorgeluis10@gmail.com',
            'dni' => '18273645'
        ]); */
        Empleado::create([
            'nombre' => 'Jesus M. Rangel',
            'email' => 'jmrnava@gmail.com',
            'dni' => '3031386'
        ]);
        Empleado::create([
            'nombre' => 'Jesus Alberto Rangel',
            'email' => 'llamadmealberto@aol.com',
            'dni' => '95805562'
        ]);
    }
}
