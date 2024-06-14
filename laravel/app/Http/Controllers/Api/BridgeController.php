<?php

namespace App\Http\Controllers\Api;

use App\Services\Patterns\Bridge\Service;

class BridgeController
{
    public function __construct(
        private Service $service
    ) {}

    public function index() //: aa
    {

        return $this->service->viewNotification('supportAnswer', 'danger');
    }
}
