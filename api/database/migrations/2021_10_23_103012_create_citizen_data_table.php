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
            $table->string('first_name')->nullable();
            $table->date('birthday')->nullable();
            $table->string('birthplace_city')->nullable();
            $table->integer('national_identity')->nullable();
            $table->string('residence')->nullable();
            $table->string('arrondissement')->nullable();
            $table->string('job')->nullable();
            $table->string('mother')->nullable();
            $table->string('father')->nullable();
            $table->string('city_cardID_was_created')->nullable();
            $table->date('cardID_was_created')->nullable();
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
