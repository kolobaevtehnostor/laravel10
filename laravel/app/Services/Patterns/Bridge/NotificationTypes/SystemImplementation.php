<?php

namespace App\Services\Patterns\Bridge\NotificationTypes;

use App\Services\Patterns\Bridge\Base\ImplementationNotification;

class SystemImplementation implements ImplementationNotification
{
    public function getMessage(): string
    {
        return 'Системное сообщение';
    }
}

