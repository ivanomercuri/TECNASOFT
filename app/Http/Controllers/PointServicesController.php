<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointServicesController extends Controller
{
    /**
     * List all services available ( enable or not enable ) for Point $id
     * The view will rende a table in which to manage which services to add (or remove) together with the prices
     *
     * @route GET
     * @param int $idPoint
     * @return View
     */
    public function showPointServices(int $idPoint){

    }

    /**
     * This will add a service to the Point, enabled by default
     *
     * @route POST
     * @param Request $request
     * @return stdClass|array
     */
    public function createPointService(Request $request){
        /**
         * $request will contain ( + mandatory , - optional )
         *      +idPoint / int
         *      +idService / int
         *      +price / float
         *      -enable / bool
         */
    }

    /**
     * This will soft delete the service by its id
     *
     * @Route POST
     * @param int $idPointService
     * @return stdClass|array
     */
    public function deletePointService(int $idPointService){

    }

    /**
     * Toggling function to enable/disable service for that Point
     *
     * @route POST
     * @param int $idPointService
     * @param Request $request
     * @return stdClass|array
     */
    public function toggleEnablePointService(int $idPointService, Request $request){
        /**
         * $request will contain ( + mandatory , - optional )
         *      +enable / bool
         */
    }

    /**
     * Update the price for that service in that Point
     *
     * @route POST
     * @param int $idPointServic
     * @param Request $request
     * @return stdClass|array
     */
    public function updatePointServicePrice(int $idPointService, Request $request){
        /**
         * $request will contain ( + mandatory , - optional )
         *      +price / float
         */
    }


}
