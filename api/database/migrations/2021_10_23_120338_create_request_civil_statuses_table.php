<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestCivilStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_civil_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name_civils_status');
            $table->boolean('status')->default(0);
            $table->string('pattern');
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
        Schema::dropIfExists('request_civil_statuses');
    }
}
