<?php

namespace App\Models;

class Product
{
    private $id;
    private $name;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * save product object into db
     */
    public function save()
    {
        // save into db
    }
}