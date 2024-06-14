<?php

namespace App\Services\Patterns\Bridge\NotificationStyle;

use App\Services\Patterns\Bridge\Base\AbstractionNotification;

class InfoAbstraction extends AbstractionNotification
{
    /**
     * @see AbstractionNotification
     */
    public function getStyle(): string
    {
        return 'info';
    }
}
