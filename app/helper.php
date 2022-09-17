<?php

use Illuminate\Database\Schema\Blueprint;

if (!function_exists("advancedTimestamps")) {
    function advancedTimestamps(Blueprint &$table): void
    {
        $table->timestamps();
        $table->softDeletes();
    }
}
