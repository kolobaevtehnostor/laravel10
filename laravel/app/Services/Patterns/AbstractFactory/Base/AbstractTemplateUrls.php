<?php
namespace App\Services\Patterns\AbstractFactory\Base;

abstract class AbstractTemplateUrls implements TemplateUrls
{
    public function __construct(
        protected string $entity = ''
    ) {}

    /**
     * @param string $entity
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
