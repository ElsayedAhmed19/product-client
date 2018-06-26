<?php

namespace App;

use App\Helpers\DataSourceContainer;
use App\Models\Product;

class Client
{
    protected $dataSourceType;
    protected $url;

    public function __construct($parameters)
    {
        $this->dataSourceType = $parameters['dataSource'];
        $this->url = $parameters['url'];
    }

    /**
     * Get products from data source and with a format
     *
     * @param string  $format   Format of products data
     *
     * @return array
     *
     */
    public function getProducts($format = null)
    {
        $dataSourceContainer = new DataSourceContainer(['dataSource' => $this->dataSourceType, 'url' => $this->url]);

        $dataSource = $dataSourceContainer->getDataSource();

        $products = $dataSource->getProducts($this->url, $format);

        return $products;
    }

    public function insertProducts($products)
    {
        foreach ($products as $product) {
            $product = new Product();
            $product->setId($product['id']);
            $produc->setName($product['name']);
            $product->save();
        }
    }
}
