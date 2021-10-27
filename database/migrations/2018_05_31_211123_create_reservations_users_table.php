<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reservation_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->date('date');
            $table->timestamps();

            $table->unique([
                'reservation_id', 'user_id', 'date'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservations_users');
    }
}
