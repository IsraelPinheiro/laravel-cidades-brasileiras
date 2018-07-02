<?php

use Illuminate\Database\Seeder;
use App\Regiao as Regiao;

class RegioesTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('regioes')->truncate();
        Regiao::create(['nome' => 'Norte']);
        Regiao::create(['nome' => 'Nordeste']);
        Regiao::create(['nome' => 'Sudeste']);
        Regiao::create(['nome' => 'Sul']);
        Regiao::create(['nome' => 'Centro-Oeste']);
        $this->call(EstadosTableSeeder::class);
    }
}
