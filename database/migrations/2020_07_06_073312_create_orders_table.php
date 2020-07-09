<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('driver_id');
            $table->string('pickup_division');
            $table->string('pickup_city');
            $table->string('dropoff_division');
            $table->string('dropoff_city');
            $table->date('pickup_date');
            $table->date('dropoff_date');
            $table->integer('pickup_time');
            $table->string('pickup_time_am');
            $table->integer('price');
            $table->string('cartype');
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
}
