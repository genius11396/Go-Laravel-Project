<?php

use Illuminate\Database\Seeder;
use App\Division;
class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create(
       	[
       		"name"=>'Yangon',
       	]);
       	Division::create(
       	[
       		"name"=>'Mandalay',
       	]);
       	Division::create(
       	[
       		"name"=>'Ayeyarwady',
       	]);
       	Division::create(
       	[
       		"name"=>'Bago',
       	]);
       	Division::create(
       	[
       		"name"=>'Chin',
       	]);
       	Division::create(
       	[
       		"name"=>'Kachin',
       	]);
       	Division::create(
       	[
       		"name"=>'Kayah',
       	]);
       	Division::create(
       	[
       		"name"=>'Kayin',
       	]);
      Division::create(
       	[
       		"name"=>'Magway',
       	]);
       Division::create(
       	[
       		"name"=>'Mon',
       	]);
        Division::create(
       	[
       		"name"=>'Nay Pyi Taw',
       	]);
       	 Division::create(
       	[
       		"name"=>'Rakhine',
       	]);
       	  Division::create(
       	[
       		"name"=>'Sagaing',
       	]); Division::create(
       	[
       		"name"=>'Shan',
       	]);
       	 Division::create(
       	[
       		"name"=>'Tanintharyi',
       	]);

    }
}
