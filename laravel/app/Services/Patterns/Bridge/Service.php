<?php

namespace App\Services\Patterns\Bridge;

use App\Services\Patterns\Bridge\NotificationStyle\DangerAbstraction;
use App\Services\Patterns\Bridge\NotificationStyle\DefaultAbstraction;
use App\Services\Patterns\Bridge\NotificationStyle\InfoAbstraction;
use App\Services\Patterns\Bridge\NotificationTypes\DiscountImplementation;
use App\Services\Patterns\Bridge\NotificationTypes\SupportAnswerImplementation;
use App\Services\Patterns\Bridge\NotificationTypes\SystemImplementation;
use App\Services\Patterns\Bridge\NotificationTypes\YouWinImplementation;

class Service
{
    public function __construct(
        private array $types = [
            'support_answer' => new SupportAnswerImplementation(),
            'discount' => new DiscountImplementation(),
            'system' => new SystemImplementation(),
            'you_win' => new YouWinImplementation(),
        ],
        private array $styles = [
            'default' => new DefaultAbstraction(),
            'info' => new InfoAbstraction(),
            'danger' => new DangerAbstraction(),
        ],
    ) {}

    /**
     * @return array
     */
    public function getInfoList(): array
    {
        return [
            'styles' => array_keys($this->styles),
            'types' => array_keys($this->types)
        ];
    }

    public function viewNotification(string $typeName, string $styleName = 'default'): array
    {
        $type = $this->types[$typeName];
        $style = $this->styles[$styleName];

        $style->setType($type);

        return $style->getNotification();

        //               Аналог без паттерна
        //$supportAnswer = new SupportAnswer();
        //
        //$n1 = new NotificationDanger($supportAnswer);
        //$n2 = new NotificationInfo($supportAnswer);
        //$n3 = new NotificationSystemDefault($supportAnswer);
        //
        //$discount = new Discount();
        //$n4 = new NotificationSupportAnswerDanger($discount);
        //$n5 = new NotificationDiscountInfo($discount);
        //$n6 = new NotificationSystemDefault($discount);
        //
        //$system = new System();
        //$n7 = new NotificationSupportAnswerDanger($system);
        //$n8 = new NotificationDiscountInfo($system);
        //$n9 = new NotificationSystemDefault($system);
        //
        //$youWin = new YouWin();
        //$n7 = new NotificationSupportAnswerDanger($youWin);
        //$n8 = new NotificationDiscountInfo($youWin);
        //$n9 = new NotificationSystemDefault($youWin);
    }
}
