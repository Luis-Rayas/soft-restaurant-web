<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tipoAlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TipoAlimento::factory(10)->create();
    }
}
