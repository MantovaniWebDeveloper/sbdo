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
      //  dd('ciao sono dentro events table seeder');

    /*  $newEvent = new Event();

      $newEvent->nome = "nomeEvento";
      $newEvent->organizzatore = "nomeOrganizzatore";
      $newEvent->descrizione = "desc";
      $newEvent->costo_ingresso = 10;
      $newEvent->data_svolgimento = "2019-03-20";
      $newEvent->locale_id = 1;
      $newEvent->locandina= " ";
      $newEvent->slug = "nome-evento";
      //salvo il tutto nel db
      $newEvent->save(); */

      //dd($datiFake);

      for ($i=0; $i < 50; $i++) {
          $newEvent = new Event();
          $newEvent->nome = $datiFake->company;
          $newEvent->organizzatore = $datiFake->companySuffix;
          $newEvent->descrizione = $datiFake->paragraph;
          $newEvent->costo_ingresso = rand(0,15);
          $newEvent->data_svolgimento = $datiFake->date;
          $newEvent->locale_id = rand(55,90);
          $newEvent->locandina= $datiFake->imageUrl;
          $newEvent->slug = " ";

          //salvo il tutto nel db
          $newEvent->save();


      }
    }
}
