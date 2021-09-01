<?php

namespace Database\Seeders\Edifice;

use App\Models\Edifice;
use App\Models\EdificeNivels;
use App\Models\LiftsEdifice;
use Illuminate\Database\Seeder;

class EdificeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create edificie

        $edifice = new Edifice();
        $edifice->name = "Edificio Wayne";
        $edifice->save();


        // create Nivels

        $nivel = new EdificeNivels();
        $nivel->name = "PB";
        $nivel->edifice_id = $edifice->id;
        $edifice->save();

        $nivel = new EdificeNivels();
        $nivel->name = "P1";
        $nivel->edifice_id = $edifice->id;
        $edifice->save();

        $nivel = new EdificeNivels();
        $nivel->name = "P2";
        $nivel->edifice_id = $edifice->id;
        $edifice->save();

        $nivel = new EdificeNivels();
        $nivel->name = "P3";
        $nivel->edifice_id = $edifice->id;
        $edifice->save();

        // create lifts
        $nivel = new LiftsEdifice();
        $nivel->name = "Elevador 1";
        $nivel->edifice_id = $edifice->id;
        $edifice->save();

        $nivel = new LiftsEdifice();
        $nivel->name = "Elevador 2";
        $nivel->edifice_id = $edifice->id;
        $edifice->save();

        $nivel = new LiftsEdifice();
        $nivel->name = "Elevador 3";
        $nivel->edifice_id = $edifice->id;
        $edifice->save();
    }
}
