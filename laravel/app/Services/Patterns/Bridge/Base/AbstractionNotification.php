<?php

namespace App\Services\Patterns\Bridge\Base;

abstract class AbstractionNotification
{
    public function __construct(
        private ?ImplementationNotification $notification = null
    ) {}

    /**
     * Получаем стиль сообщения
     * @return string
     */
    abstract public function getStyle(): string;

    /**
     * @param  \App\Services\Patterns\Bridge\Base\ImplementationNotification  $notification
     */
    public function setType(ImplementationNotification $notification): void
    {
        $this->notification = $notification;
    }

    /**
     * @param  array  $default
     * @return array
     */
    public function getNotification(array $default = []): array
    {
        if (! $this->notification) {
            return $default;
        }

        return [
            'type' => $this->getStyle(),
            'message' => $this->notification->getMessage()
        ];
    }
}
