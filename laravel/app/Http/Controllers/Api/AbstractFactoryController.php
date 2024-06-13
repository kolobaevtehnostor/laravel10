<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\GetAbstractFactory;
use App\Http\Resources\Api\AbstractFactoryResource;
use App\Services\Patterns\AbstractFactory\Service;

class AbstractFactoryController
{
    public function __construct(
        private Service $service
    ) {}

    public function index(GetAbstractFactory $request): AbstractFactoryResource
    {
        $data = [
            'http' => $this->service->getRenderHttp($request->get('entity')),
            'rest' => $this->service->getRenderRest($request->get('entity'))
        ];

        return new AbstractFactoryResource((object) $data);
    }
}
