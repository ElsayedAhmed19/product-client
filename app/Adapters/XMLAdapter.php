<?php

namespace App\Adapters;

use App\Formats\XML;

class XMLAdapter implements ProductsAdapterInterface
{
    private $xml;
    public function __construct(XML $xml)
    {
        $this->xml = $xml;
    }

    public function getData()
    {
        $data = $this->xml->loadData($url);

        return $data;
    }
}
