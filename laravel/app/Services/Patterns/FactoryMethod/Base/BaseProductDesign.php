<?php

namespace App\Services\Patterns\FactoryMethod\Base;

interface BaseProductDesign
{
    /**
     * Возвращает название дизайна
     *
     * @return string
     */
    public function getName(): string;
    
    /**
     * Возвращает описание дизайна
     *
     * @return string
     */
    public function getDescription(): string;
    

}
