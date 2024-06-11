<?php
namespace App\Services\Patterns\AbstractFactory\Rest;

use App\Services\Patterns\AbstractFactory\Base\AbstractTemplateUrls;

class RestUrl extends AbstractTemplateUrls
{
    /**
     * @see TemplateUrls
     */
    public function getCreate(): array
    {
        return [
            'method' => 'POST',
            'url' => '/' . $this->entity
        ];
    }

    /**
     * @see TemplateUrls
     */
    public function getDelete(): array
    {
        return [
            'method' => 'DELETE',
            'url' => '/' . $this->entity . '/{' . $this->entity . '}'
        ];
    }

    /**
     * @see TemplateUrls
     */
    public function getUpdate(): array
    {
        return [
            'method' => 'PUT|PATCH',
            'url' => '/' . $this->entity . '/{' . $this->entity . '}'
        ];
    }

    /**
     * @see TemplateUrls
     */
    public function getRead(): array
    {
        return [
            'method' => 'GET|HEAD',
            'url' => '/' . $this->entity . '/{' . $this->entity . '}'
        ];
    }

    /**
     * @see TemplateUrls
     */
    public function getReadList(): array
    {
        return [
            'method' => 'GET|HEAD',
            'url' => '/' . $this->entity
        ];
    }
}
