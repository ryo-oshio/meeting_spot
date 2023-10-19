<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direction_station', function (Blueprint $table) {
            $table->foreignId('direction_id')->constrained('directions');
            $table->foreignId('station_id')->constrained('stations');
            $table->primary(['direction_id', 'station_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direction_station');
    }
};
