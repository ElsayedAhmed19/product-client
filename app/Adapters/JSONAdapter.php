<?php

namespace App\Adapters;

use App\Formats\JSON;

class JSONAdapter implements ProductsAdapterInterface
{
    private $json;
    public function __construct(JSON $json)
    {
        $this->json = $json;
    }

    /**
     * Get products from CSV file
     *
     * @return array
     */
    public function getData($url)
    {
        $data = $this->json->loadData($url);

        return $data;
    }
}
