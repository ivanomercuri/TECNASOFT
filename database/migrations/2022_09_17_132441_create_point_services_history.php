<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointServicesHistory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPointService');
            $table->foreign('idPointService')->on('pointServices')->references('id');
            $table->date('date')->nullable(false);
            $table->decimal('price', 10)->nullable(false);
            advancedTimestamps($table);
            $table->unique(array('idPointService', 'date'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PointServicesHistory');
    }
};
