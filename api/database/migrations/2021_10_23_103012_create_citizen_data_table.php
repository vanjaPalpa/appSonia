<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizenDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizen_data', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name');
            $table->date('birthday');
            $table->string('birthplace_city');
            $table->integer('national_identity');
            $table->string('residence');
            $table->string('arrondissement');
            $table->string('job');
            $table->string('mother');
            $table->string('father');
            $table->string('city_cardID_was_created');
            $table->date('cardID_was_created');
            $table->boolean('checked')->default(0);
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizen_data');
    }
}
