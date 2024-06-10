<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FactoryMethodController extends BaseController
{
    public function index() {
        return view('factory_method');
    }
}
