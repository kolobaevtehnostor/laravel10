<?php

namespace App\Services\Patterns\Bridge\NotificationTypes;

use App\Services\Patterns\Bridge\Base\ImplementationNotification;

class YouWinImplementation implements ImplementationNotification
{
    public function getMessage(): string
    {
        return 'Новая скидка';
    }
}
