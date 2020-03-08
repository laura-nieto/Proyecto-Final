<?php

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Geografia */
        DB::table('quiz')->insert([
            'puntuacion' => 10,
            'pregunta' => '¿Cuál es la capital de Eslovaquia?',
            'opcion_correcta' => 'Bratislava',
            'opcion2' => 'Budapest',
            'opcion3' => 'Bucarest',
            'opcion4' => 'Zagreb',
            'categoria_id' => 1
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Cuál es el río más extenso del mundo?',
            'opcion_correcta' => 'Río Amazonas',
            'opcion2' => 'Río Nilo',
            'opcion3' => 'Río Yangtsé',
            'opcion4' => 'Río Misisipi',
            'categoria_id' => 1
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 2,
            'pregunta' => '¿Cuál es el océano más grande del mundo?',
            'opcion_correcta' => 'Pacífico',
            'opcion2' => 'Atlántico',
            'opcion3' => 'Índico',
            'opcion4' => 'Antártico',
            'categoria_id' => 1
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 8,
            'pregunta' => '¿Cuál de estos países no atraviesa el Río Nilo?',
            'opcion_correcta' => 'Zambia',
            'opcion2' => 'Sudán',
            'opcion3' => 'Kenia',
            'opcion4' => 'Tanzania',
            'categoria_id' => 1
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿El Monte Everest divide qué dos paises?',
            'opcion_correcta' => 'China y Nepal',
            'opcion2' => 'Nepal e India',
            'opcion3' => 'China e India',
            'opcion4' => 'China y Bután',
            'categoria_id' => 1
        ]);

        /* Cine */
        DB::table('quiz')->insert([
            'puntuacion' => 8,
            'pregunta' => '¿Cuál de las siguientes actrices ganó un Oscar?',
            'opcion_correcta' => 'Meryl Streep',
            'opcion2' => 'Michelle Pfeiffer',
            'opcion3' => 'Glenn Close',
            'opcion4' => 'Demi Moore',
            'categoria_id' => 2
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿En cuál de estas películas NO trabajó Matt Damon?',
            'opcion_correcta' => '12 Años de Esclavitud',
            'opcion2' => 'Interestelar',
            'opcion3' => 'Operación Monumento',
            'opcion4' => 'Misión Rescate',
            'categoria_id' => 2
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 8,
            'pregunta' => '¿Cuál es la película más taquillera de la historia?',
            'opcion_correcta' => 'Avenger:Endgame',
            'opcion2' => 'Avatar',
            'opcion3' => 'Titanic',
            'opcion4' => 'Star Wars: Episodio VII - El despertar de la Fuerza',
            'categoria_id' => 2
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Quién dirigió la trilogía de Batman de 2005-2012?',
            'opcion_correcta' => 'Christopher Nolan',
            'opcion2' => 'Martin Scorsese',
            'opcion3' => 'Zack Snyder',
            'opcion4' => 'James Wan',
            'categoria_id' => 2
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 2,
            'pregunta' => '¿Quién interpretó la banda sonora de Tarzan?',
            'opcion_correcta' => 'Phil Collins',
            'opcion2' => 'Elton John',
            'opcion3' => 'Ricky Martin',
            'opcion4' => 'Steven Tyler',
            'categoria_id' => 2
        ]);

        /* Musica */
        DB::table('quiz')->insert([
            'puntuacion' => 2,
            'pregunta' => '¿Quién de los siguientes artistas es "El rey del Rock"?',
            'opcion_correcta' => 'Elvis Presley',
            'opcion2' => 'Michael Jackson',
            'opcion3' => 'Paul McCartney',
            'opcion4' => 'Freddie Mercury',
            'categoria_id' => 3
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Cuál es el album más vendido de la historia"?',
            'opcion_correcta' => 'Their Greatest Hits - The Eagles',
            'opcion2' => 'The Beatles - The Beatles',
            'opcion3' => 'The Dark Side of the Moon - Pink Floyd',
            'opcion4' => 'Thriller - Michael Jackson',
            'categoria_id' => 3
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿De qué país es originario el grupo AC/DC"?',
            'opcion_correcta' => 'Australia',
            'opcion2' => 'Inglaterra',
            'opcion3' => 'Estados Unidos',
            'opcion4' => 'Canadá',
            'categoria_id' => 3
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 2,
            'pregunta' => '¿Cuál es la canción que lanzó a la fama a Britney Spears"?',
            'opcion_correcta' => '...Baby, one more time',
            'opcion2' => 'Oops!... I Did It Again',
            'opcion3' => 'Sometimes',
            'opcion4' => 'Toxic',
            'categoria_id' => 3
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Cuántas sinfonías compuso Beethoven"?',
            'opcion_correcta' => '9',
            'opcion2' => '8',
            'opcion3' => '5',
            'opcion4' => '3',
            'categoria_id' => 3
        ]);

        /* Historia */
        DB::table('quiz')->insert([
            'puntuacion' => 2,
            'pregunta' => '¿En que año se inició la 1° Guerra Mundial?',
            'opcion_correcta' => '1914',
            'opcion2' => '1916',
            'opcion3' => '1912',
            'opcion4' => '1918',
            'categoria_id' => 4
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 2,
            'pregunta' => '¿En qué año cayó el muro de Berlín?',
            'opcion_correcta' => '1989',
            'opcion2' => '1990',
            'opcion3' => '1991',
            'opcion4' => '1988',
            'categoria_id' => 4
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Cuánto duró la guerra de los 100 años?',
            'opcion_correcta' => '116',
            'opcion2' => '100',
            'opcion3' => '95',
            'opcion4' => '90',
            'categoria_id' => 4
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 8,
            'pregunta' => '¿Quién fue maestro de Alejandro Magno?',
            'opcion_correcta' => 'Aristóteles',
            'opcion2' => 'Platón',
            'opcion3' => 'Socrates',
            'opcion4' => 'Heráclides',
            'categoria_id' => 4
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Cuál era la capital del Imperio Inca?',
            'opcion_correcta' => 'Cuzco',
            'opcion2' => 'Machu Picchu',
            'opcion3' => 'Tambo Colorado',
            'opcion4' => 'Tenochtitlan',
            'categoria_id' => 4
        ]);

        /* Deportes */
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿En que ciudad se celebraron los Juegos Olímpicos del 2016?',
            'opcion_correcta' => 'Rio de Janeiro',
            'opcion2' => 'Londres',
            'opcion3' => 'Pekin',
            'opcion4' => 'Sídney',
            'categoria_id' => 5
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Qué disciplinas se realizan en un Triatlón?',
            'opcion_correcta' => 'Natación, Ciclismo y Carrera a pie',
            'opcion2' => 'Natación, Ciclismo y Remo',
            'opcion3' => 'Ciclismo, Carrera a Pie y Salto Largo',
            'opcion4' => 'Carrera de saltos, Ciclismo, Natación',
            'categoria_id' => 5
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Qué país tiene más Copas del Mundo?',
            'opcion_correcta' => 'Brasil',
            'opcion2' => 'Alemania',
            'opcion3' => 'Italia',
            'opcion4' => 'Argentina',
            'categoria_id' => 5
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 5,
            'pregunta' => '¿Cuál es el valor de un Try?',
            'opcion_correcta' => '5',
            'opcion2' => '7',
            'opcion3' => '3',
            'opcion4' => '1',
            'categoria_id' => 5
        ]);
        DB::table('quiz')->insert([
            'puntuacion' => 2,
            'pregunta' => '¿Cuánto debe medir una piscina olímpica?',
            'opcion_correcta' => '50 metros',
            'opcion2' => '25 metros',
            'opcion3' => '75 metros',
            'opcion4' => '100 metros',
            'categoria_id' => 5
        ]);
    }
}
