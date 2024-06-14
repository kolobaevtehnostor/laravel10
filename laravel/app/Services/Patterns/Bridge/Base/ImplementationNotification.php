<?php

namespace App\Services\Patterns\Bridge\Base;

interface ImplementationNotification
{
    /**
     * Выводит текст сообщение
     * @return string
     */
    public function getMessage(): string;
}
