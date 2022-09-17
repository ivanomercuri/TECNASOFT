<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    /**
     * This function will get all services stored within "services" table
     *
     * The $request object will contain those infos needed to filter the service we want to see
     * ( for example /services/list?name={$name} will show those services with LIKE '%$name%' etc. )
     *
     * The output will be in a view where a table in HTML will print all data
     * With javascript, then, we can make the table dynamic in order to change services' names and description
     *
     * @route GET
     * @param Request $request
     * @return View
     */
    public function showAllServices(Request $request)
    {
        /**
         * $request will contain ( + mandatory , - optional )
         *      -name / string
         *      -description / string
         */
    }


    /**
     * This function is quite self-explanatory: from the front-end we receive info about a new Service via AJAX
     * then we create a new record.
     *
     * It will return an object if success/failure
     *
     * @route POST
     * @param Request $request
     * @return stdClass|array
     */
    public function createService(Request $request)
    {
        /**
         * $request will contain ( + mandatory , - optional )
         *      +name / string
         *      +description / string
         */
    }

    /**
     * Another self-explanatory function, this time with the id to update the specific row
     *
     * @param int $id
     * @param Request $request
     * @return stdClass|array
     */
    public function updateService(int $id, Request $request)
    {
        /**
         * $request will contain ( + mandatory , - optional )
         *      +name / string
         *      +description / string
         */
    }

    /**
     * The Services Model has a soft delete, so the record won't be deleted at all, but it
     *
     * @param int $id
     * @return stdClass|array
     */
    public function deleteService(int $id){

    }
}
