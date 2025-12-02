<?php

namespace App\Abstracts;

abstract class Guitar
{
    // Guitar class
    public string $brand;
    public string $model;
    public string $color;

    // construct
    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    // getters
    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    // setters
    public function setBrand($brand): string
    {
        return $this->brand = $brand;
    }

    public function setModel($model): string
    {
        return $this->model = $model;
    }

    public function setColor($color): string
    {
        return $this->color = $color;
    }
}
