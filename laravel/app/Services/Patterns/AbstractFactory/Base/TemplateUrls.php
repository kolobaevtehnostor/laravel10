<?php
namespace App\Services\Patterns\AbstractFactory\Base;

interface TemplateUrls
{
    /**
     * Отображает URL
     * @return array
     */
    public function render(): array;

    /**
     * Возвращает url для создания
     * @return array
     */
    public function getCreate(): array;

    /**
     * Возвращает url для удаления
     * @return array
     */
    public function getDelete(): array;

    /**
     * Возвращает url для обновления
     * @return array
     */
    public function getUpdate(): array;

    /**
     * Возвращает url для чтения одного
     * @return array
     */
    public function getRead(): array;

    /**
     * Возвращает url для чтения списка всех
     * @return array
     */
    public function getReadList(): array;
}
