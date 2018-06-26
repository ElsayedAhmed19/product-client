<?php

namespace App\Adapters;

use App\Formars\CSV;

class CSVAdapter implements ProductsAdapterInterface
{
    private $csv;
    public function __construct(CSV $csv)
    {
        $this->csv = $csv;
    }

    /**
     * Get products from CSV file
     *
     * @return array
     */
    public function getProducts()
    {
        $data = $this->csv->loadData($url);

        return $data;
    }
}
