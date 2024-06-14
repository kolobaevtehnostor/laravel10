<?php

namespace App\Services\Patterns\Bridge\NotificationTypes;


use App\Services\Patterns\Bridge\Base\ImplementationNotification;

class SupportAnswerImplementation implements ImplementationNotification
{
    public function getMessage(): string
    {
        return 'Вам скоро ответят';
    }
}
