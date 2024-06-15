<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\Bridge\BridgeResource;
use App\Http\Resources\Api\Bridge\BridgeInfoResource;
use App\Services\Patterns\Bridge\Service;
use Illuminate\Http\Request;

class BridgeController
{
    public function __construct(
        private Service $service
    ) {}

    /**
     * @param  Request  $request
     * @return BridgeResource
     */
    public function index(Request $request): BridgeResource
    {
        $data = (object) $this->service->viewNotification(
            $request->get('type'),
            $request->get('style', 'default')
        );

        return new BridgeResource(
            $data
        );
    }

    /**
     * @return BridgeInfoResource
     */
    public function getInfoList(): BridgeInfoResource
    {
        return new BridgeInfoResource(
            (object) $this->service->getInfoList()
        );
    }
}
