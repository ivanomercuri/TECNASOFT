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
        Schema::create('pointInvoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPoint');
            $table->foreign('idPoint')->on('points')->references('id');
            $table->decimal('value', 10)->nullable(false);
            $table->date("date")->nullable(false);
            $table->boolean('payed')->nullable(false)->default(0);
            advancedTimestamps($table);
            $table->unique(array('idPoint', 'date'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PointInvoices');
    }
};
