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
        Schema::create('pointServices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPoint');
            $table->foreign('idPoint')->on('points')->references('id');
            $table->foreignId('idService');
            $table->foreign('idService')->on('services')->references('id');
            $table->decimal('price', 10);
            $table->boolean("enabled")->nullable(false)->default(1);
            advancedTimestamps($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PointServices');
    }
};
