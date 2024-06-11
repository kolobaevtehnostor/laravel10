<?php


namespace App\Services\Patterns\AbstractFactory;


use App\Services\Patterns\AbstractFactory\Base\AbstractFactory;
use App\Services\Patterns\AbstractFactory\Html\HttpFactory;
use App\Services\Patterns\AbstractFactory\Rest\RestFactory;

class Service
{
    /**
     * Используем фабрику HttpFactory
     *
     * @param string $entity
     * @return array
     */
    public function getRenderHttp(string $entity): array
    {
        return $this->render(new HttpFactory(), $entity);
    }

    /**
     * Используем фабрику RestFactory
     *
     * @param string $entity
     * @return array
     */
    public function getRenderRest(string $entity): array
    {
        return $this->render(new RestFactory(), $entity);
    }

    /**
     * @param AbstractFactory $factory
     * @param string $entity
     * @return array
     */
    private function render(AbstractFactory $factory, string $entity): array
    {
        $templateUrl = $factory->createTemplateUrl();
        $templateUrl->setEntity($entity);

        $templateMethod = $factory->createTemplateMethod();
        $templateMethod->setEntity($entity);

        return [
            'methods' => $templateMethod->render(),
            'urls' => $templateUrl->render(),
        ];
    }
}
