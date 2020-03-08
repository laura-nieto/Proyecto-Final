<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nombre'=>'geografia',
            'imagen' => 'geo.png']);
        DB::table('categoria')->insert([
            'nombre'=>'cine',
            'imagen'=>'oscar.png']);
        DB::table('categoria')->insert([
            'nombre'=>'musica',
            'imagen'=>'music.png']);
        DB::table('categoria')->insert([
            'nombre'=>'historia',
            'imagen'=>'libro.png']);
        DB::table('categoria')->insert([
            'nombre'=>'deportes',
            'imagen'=>'depo.png']);
    }
}
