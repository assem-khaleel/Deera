<?php
namespace App\Facades;

use App\Http\Controllers\Controller;

class testController extends Controller {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public function index() { echo  'Welcome world facade.'; }

}