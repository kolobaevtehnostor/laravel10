<?php

namespace App\Services\Patterns\AbstractFactory\Rest;

use App\Services\Patterns\AbstractFactory\Base\AbstractFactory;
use App\Services\Patterns\AbstractFactory\Base\TemplateMethods;
use App\Services\Patterns\AbstractFactory\Base\TemplateUrls;

class RestFactory implements AbstractFactory
{
    /**
     * @see AbstractFactory
     */
    public function createTemplateUrl(): TemplateUrls
    {
        return new RestUrl();
    }

    /**
     * @see AbstractFactory
     */
    public function createTemplateMethod(): TemplateMethods
    {
        return new RestMethods();
    }
}
