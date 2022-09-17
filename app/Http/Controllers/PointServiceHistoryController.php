<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointServiceHistoryController extends Controller
{

    /**
     * Shows all the services that have been performed; with the $request variable it's possible to filter by PointService, date, or price
     * The View will display the table with all services found
     *
     * @Route GET
     * @param Request $request
     * @return View
     */
    public function showHistory(Request $request){
        /**
         * $request will contain ( + mandatory , - optional )
         *      -idPointService / int
         *      -date / Y-m-d
         *      -price / float
         */
    }
}
