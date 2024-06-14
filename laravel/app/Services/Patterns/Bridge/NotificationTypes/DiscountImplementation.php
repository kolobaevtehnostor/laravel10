<?php

namespace App\Services\Patterns\Bridge\NotificationTypes;


use App\Services\Patterns\Bridge\Base\ImplementationNotification;

class DiscountImplementation implements ImplementationNotification
{
    public function getMessage(): string
    {
        return 'Новая скидка';
    }
}
