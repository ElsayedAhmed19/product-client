<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;

class AdapterFactory
{
    /**
     * Return adapter object using factory design pattern
     *
     * @param string $format  Format of data
     *
     * @return {Adapter class}
     */
    public static function create($format)
    {
        $formatClass = "\App\Formats\\$format";

        $adapter = "\App\Adapters\\$format"."Adapter";

        return new $adapter(new $formatClass());
    }
}
