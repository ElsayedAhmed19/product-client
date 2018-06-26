<?php

namespace App\Helpers;

use App\Helpers\DataSourceFactory;

class DataSourceContainer
{
    protected $parameters;

    public function __construct($parameters = array())
    {
        $this->parameters = $parameters;
    }

    /**
     * Get data source depending on class name
     *
     * @return {Datasource class}
     */
    public function getDataSource()
    {
        $className = $this->parameters['dataSource'];
        $dataSource = DataSourceFactory::create($className);

        return $dataSource;
    }
}
