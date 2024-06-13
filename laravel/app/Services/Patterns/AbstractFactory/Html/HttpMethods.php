<?php
namespace App\Services\Patterns\AbstractFactory\Html;

use App\Services\Patterns\AbstractFactory\Base\AbstractTemplateMethods;

class HttpMethods extends AbstractTemplateMethods
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

    public function getDelete(): array
    {
        return [
            'action' => 'public function delete(Request $request): \Illuminate\Http\Response',
        ];
    }

    public function getUpdate(): array
    {
        return [
            'action' => 'public function update(Request $request): \Illuminate\Http\Response',
        ];
    }

    public function getRead(): array
    {
        return [
            'action' => 'public function show(Request $request): \Illuminate\Http\Response',
        ];
    }

    public function getReadList(): array
    {
        return [
            'action' => 'public function showList(Request $request): \Illuminate\Http\Response',
        ];
    }
}
