<?php

use Illuminate\Database\Seeder;


class dataTypesSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(['name'=>'Город']);
        DB::table('types')->insert(['name'=>'Деревня']);
        DB::table('types')->insert(['name'=>'Озеро']);
        DB::table('types')->insert(['name'=>'Океан']);
    }
}
