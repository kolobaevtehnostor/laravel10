<?php
namespace App\Services\Patterns\AbstractFactory\Html;

use App\Services\Patterns\AbstractFactory\Base\AbstractTemplateUrls;

class HttpUrl extends AbstractTemplateUrls
{
    /**
     * @see TemplateUrls
     */
    public function getCreate(): array
    {
        return [
            'method' => 'POST',
            'url' => '/get-' . $this->entity
        ];
    }

    /**
     * @see TemplateUrls
     */
    public function getDelete(): array
    {
        return [
            'method' => 'POST',
            'url' => '/delete-' . $this->entity
        ];
    }

    /**
     * @see TemplateUrls
     */
    public function getUpdate(): array
    {
       return [
           'method' => 'POST',
           'url' => '/update-' . $this->entity
       ];
    }

    /**
     * @see TemplateUrls
     */
    public function getRead(): array
    {
        return [
            'method' => 'POST',
            'url' => '/get-' . $this->entity
        ];
    }

    /**
     * @see TemplateUrls
     */
    public function getReadList(): array
    {
        return [
            'method' => 'POST',
            'url' => '/get-list-' . $this->entity
        ];
    }
}
