<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Player',
            'email' => 'player@gm.com',
            'password' => Hash::make('123'),
            'rol' => 'player',
            'avatar' => 'uppic.png',
            'puntaje' => 0,
            'correctas' => 0,
            'incorrectas' => 0,
            'timeOut' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'Ian',
            'email' => 'ian@gm.com',
            'password' => Hash::make('123'),
            'rol' => 'player',
            'avatar' => 'uppic.png',
            'puntaje' => 0,
            'correctas' => 0,
            'incorrectas' => 0,
            'timeOut' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'Alexis',
            'email' => 'alexis@gm.com',
            'password' => Hash::make('123'),
            'rol' => 'player',
            'avatar' => 'uppic.png',
            'puntaje' => 0,
            'correctas' => 0,
            'incorrectas' => 0,
            'timeOut' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'Marcos',
            'email' => 'marcos@gm.com',
            'password' => Hash::make('123'),
            'rol' => 'player',
            'avatar' => 'uppic.png',
            'puntaje' => 0,
            'correctas' => 0,
            'incorrectas' => 0,
            'timeOut' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'Laura',
            'email' => 'laura@gm.com',
            'password' => Hash::make('123'),
            'rol' => 'player',
            'avatar' => 'uppic.png',
            'puntaje' => 0,
            'correctas' => 0,
            'incorrectas' => 0,
            'timeOut' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'Vivi',
            'email' => 'vivi@gm.com',
            'password' => Hash::make('123'),
            'rol' => 'player',
            'avatar' => 'uppic.png',
            'puntaje' => 0,
            'correctas' => 0,
            'incorrectas' => 0,
            'timeOut' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'Jorge',
            'email' => 'jorge@gm.com',
            'password' => Hash::make('123'),
            'rol' => 'player',
            'avatar' => 'uppic.png',
            'puntaje' => 0,
            'correctas' => 0,
            'incorrectas' => 0,
            'timeOut' => 0
        ]);
    }
}
