<?php
namespace App\Services\Patterns\AbstractFactory\Base;

interface AbstractFactory
{
    /**
     * Создаем шаблон для эндпоинтов
     *
     * @return TemplateUrls
     */
    public function createTemplateUrl(): TemplateUrls;

    /**
     * Создаем шаблон для методов
     *
     * @return TemplateMethods
     */
    public function createTemplateMethod(): TemplateMethods;
}
