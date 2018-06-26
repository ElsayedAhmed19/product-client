<?php

namespace App\Http\Controllers;

use App\Client;

class ProductsController
{
    public function getProductsFromApi()
    {
        $format = config('constants.DATA_FORMATS.JSON'); //statically
        $client = new Client(['dataSource' => config('constants.DATA_SOURCES.API'), 'url' => config('constants.DATA_SOURCES_URLS.EXAMPLE1')]);

        $products = $client->getProducts($format);

        return $products;
    }

    public function insertProduct()
    {
        $products = $this->getProductsFromApi();

        $client = new Client();
        $client->insertProducts($products);
    }
}
