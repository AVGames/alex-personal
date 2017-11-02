<?php

use Illuminate\Database\Seeder;
use App\game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(juego::class,80)->create();
        //
    }
}
