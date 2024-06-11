<?php
namespace App\Services\Patterns\AbstractFactory\Base;

abstract class AbstractTemplateMethods implements TemplateMethods
{
    public function __construct(
        protected string $entity = ''
    ) {}

    /**
     * Устанавливаем объект для создания ссылок
     *
     * @param string $entity
     * @return void
     */
    public function setEntity(string $entity): void
    {
        $this->entity = $entity;
    }

    /**
     * Отображает urls
     *
     * @return array
     */
    public function render(): array
    {
        return [
            $this->getCreate(),
            $this->getReadList(),
            $this->getRead(),
            $this->getUpdate(),
            $this->getDelete(),
        ];
    }
}
