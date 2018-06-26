<?php

namespace App\Helpers;

interface ProductsInterface
{
    public function getProducts($url = null, $format = null);
}
