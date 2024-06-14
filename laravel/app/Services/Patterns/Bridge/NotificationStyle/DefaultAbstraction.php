<?php

namespace App\Services\Patterns\Bridge\NotificationStyle;

use App\Services\Patterns\Bridge\Base\AbstractionNotification;

class DefaultAbstraction extends AbstractionNotification
{
    /**
     * @see AbstractionNotification
     */
    public function getStyle(): string
    {
        return 'default';
    }
}
