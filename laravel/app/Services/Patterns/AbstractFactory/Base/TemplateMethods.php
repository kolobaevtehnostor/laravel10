<?php
namespace App\Services\Patterns\AbstractFactory\Base;


interface TemplateMethods
{
    /**
     * Отображает Методы
     * @return array
     */
    public function render(): array;

    /**
     * Возвращает метод для создания
     * @return array
     */
    public function getCreate(): array;

    /**
     * Возвращает метод для удаления
     * @return array
     */
    public function getDelete(): array;

    /**
     * Возвращает метод для обновления
     * @return array
     */
    public function getUpdate(): array;

    /**
     * Возвращает метод для чтения одного
     * @return array
     */
    public function getRead(): array;

    /**
     * Возвращает метод для чтения списка всех
     * @return array
     */
    public function getReadList(): array;
}
