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
        Schema::create('station_train', function (Blueprint $table) {
            $table->foreignId('station_id')->constrained('stations');
            $table->foreignId('train_id')->constrained('trains');
            $table->primary(['station_id', 'train_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('station_train');
    }
};
