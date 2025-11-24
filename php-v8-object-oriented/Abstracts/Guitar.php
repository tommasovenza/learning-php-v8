<?php

namespace App\Abstracts;

abstract class Guitar
{
    // Guitar class
    private $brand;
    private $model;
    private $color;

    // construct
    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    // getters
    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getColor()
    {
        return $this->color;
    }

    // setters
    public function setBrand($brand)
    {
        return $this->brand = $brand;
    }

    public function setModel($model)
    {
        return $this->model = $model;
    }

    public function setColor($color)
    {
        return $this->color = $color;
    }
}
