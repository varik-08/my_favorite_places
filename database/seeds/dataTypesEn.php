<?php

use Illuminate\Database\Seeder;

class dataTypesEn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->where('id', 1)->update(['nameEn' => 'City']);
        DB::table('types')->where('id', 2)->update(['nameEn' => 'Village']);
        DB::table('types')->where('id', 3)->update(['nameEn' => 'Lake']);
        DB::table('types')->where('id', 4)->update(['nameEn' => 'Ocean']);
    }
}
