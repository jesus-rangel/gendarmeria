<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Jesús Rangel',
            'username' => 'jesus_rangel',
            'email' => 'jesusr.nm@gmail.com',
            'dni' => '95805562',
            'password' => '0608Will@',
            'email_verified_at' => now(),
        ]);
        $user->assignRole('super-admin');

        $user = User::create([
            'name' => 'Rodrigo Agudo',
            'username' => 'rodrigo_agudo',
            'email' => 'agudorod@gmail.com',
            'dni' => '87654321',
            'password' => 'CirSub*2020',
            'email_verified_at' => now()
        ]);
        $user->assignRole('super-admin');
        
        $user = User::create([
            'name' => 'Pablo Russo',
            'username' => 'pablo_russo',
            'email' => 'prusso@fixear.net',
            'dni' => '12345678',
            'password' => 'CirSub*2020',
            'email_verified_at' => now()
        ]);
        $user->assignRole('super-admin');
    }
}
