<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('driverphoto');
            $table->text('licencephoto');
            $table->text('carphoto');
            $table->integer('phone');
            $table->text('cartype');
            $table->text('carno');
            $table->text('cardetail');
            $table->integer('price');
            $table->integer('travelablecity');
            $table->integer('noofseats');
            $table->string('busy');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
