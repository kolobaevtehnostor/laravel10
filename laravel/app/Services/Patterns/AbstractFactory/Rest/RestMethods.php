<?php
namespace App\Services\Patterns\AbstractFactory\Rest;

use App\Services\Patterns\AbstractFactory\Base\AbstractTemplateMethods;

class RestMethods extends AbstractTemplateMethods
{
    /**
     * @see TemplateMethods
     */
    public function getCreate(): array
    {
        return [
            'action' => 'public function store(Request $request): \Illuminate\Http\Response',
        ];
    }

    /**
     * @see TemplateMethods
     */
    public function getDelete(): array
    {
        return [
            'action' => 'public function destroy(' . ucfirst ($this->entity) . ' $' . $this->entity . ')',
        ];
    }

    /**
     * @see TemplateMethods
     */
    public function getUpdate(): array
    {
        return [
            'action' => 'public function update(Request $request, ' . ucfirst ($this->entity) . ' $' . $this->entity . '): \Illuminate\Http\Response',
        ];
    }

    /**
     * @see TemplateMethods
     */
    public function getRead(): array
    {
        return [
            'action' => 'public function show(' . ucfirst ($this->entity) . ' $' . $this->entity . '): \Illuminate\Http\Response',
        ];
    }

    /**
     * @see TemplateMethods
     */
    public function getReadList(): array
    {
        return [
            'action' => 'public function index(): \Illuminate\Http\Response',
        ];
    }
}
