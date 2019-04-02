<?php

use Illuminate\Database\Seeder;
use \App\Event;
use Faker\Generator as Faker;



class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $datiFake)
    {
      for ($i=0; $i < 10; $i++) {
          

          $newEvent = new Event();
          $newEvent->nomeEvento = $datiFake->company;
          $newEvent->organizzatore = $datiFake->companySuffix;
          $newEvent->descrizione = $datiFake->paragraph;
          $newEvent->costo_ingresso = rand(0,15);
          $newEvent->data_svolgimento = $datiFake->date;
          $newEvent->locale_id = rand(55,90);
          $newEvent->locandina= $datiFake->imageUrl;
          $newEvent->slug = str_slug($newEvent->nome, '-');

          //salvo il tutto nel db
          $newEvent->save();


      }
    }
}
