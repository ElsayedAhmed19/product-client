<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;

class DataSourceFactory
{
    /**
     * Create data source object
     *
     * @return {Datasource class}
     */
    public static function create($class)
    {
        $className = "\App\DataSources\\$class";

        return new $className();
    }
}
