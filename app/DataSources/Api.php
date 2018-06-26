<?php

namespace App\DataSources;

use App\Helpers\ProductsInterface;
use App\Helpers\AdapterFactory;

class Api implements ProductsInterface
{
    /**
     * Return data depending on format sent
     *
     * @param string $url      URL to get data from
     * @param strign $format   Data returned format
     *
     * @return array
     */
    public function getProducts($url = null, $format = null)
    {
        $adapter = AdapterFactory::create(strtoupper($format));

        $data = $adapter->getData($url);

        return $data;
    }
}
