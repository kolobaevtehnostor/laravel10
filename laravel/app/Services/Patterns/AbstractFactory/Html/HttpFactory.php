<?php

namespace App\Services\Patterns\AbstractFactory\Html;

use App\Services\Patterns\AbstractFactory\Base\AbstractFactory;
use App\Services\Patterns\AbstractFactory\Base\TemplateMethods;
use App\Services\Patterns\AbstractFactory\Base\TemplateUrls;

class HttpFactory implements AbstractFactory
{
    /**
     * @see AbstractFactory
     */
    public function createTemplateUrl(): TemplateUrls
    {
        return new HttpUrl();
    }

    /**
     * @see AbstractFactory
     */
    public function createTemplateMethod(): TemplateMethods
    {
        return new HttpMethods();
    }
}
