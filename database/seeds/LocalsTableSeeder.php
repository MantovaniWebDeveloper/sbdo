<?php

use Illuminate\Database\Seeder;
use \App\Local;
use Faker\Generator as Faker;

class LocalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $datiFake)
    {
      for ($i=0; $i < 60; $i++) {
          $newLocal = new Local();
          $newLocal->nome = $datiFake->company;
          $newLocal->citta = $datiFake->city;
          $newLocal->provincia = $datiFake->citySuffix;
          $newLocal->indirizzo = $datiFake->streetAddress;
          $newLocal->cap = rand(1,100);
          //salvo il tutto nel db
          $newLocal->save();


      }
    }
}
