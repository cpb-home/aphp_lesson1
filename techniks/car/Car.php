<?php

//namespace techniks\car;

class Car
{
    public string $brand;
    public string $model;
    public int $maxSpeed;
    public static bool $hasDoors;

    public function __construct(string $brand, string $model, int $maxSpeed)
    {
        $this->brand = ucfirst($brand);
        $this->model = ucfirst($model);
        $this->maxSpeed = $maxSpeed;
        self::$hasDoors = true;
    }

    public function getFullTitle(): string
    {
        return $this->brand . ' ' . $this->model . '<br>' . PHP_EOL;
    }

    public function getFullInfo(): string
    {
        return 'This car is ' . $this->brand . ' ' . $this->model . ', maximal speed is ' . $this->maxSpeed . 'km/h' . '<br>' . PHP_EOL;
    }

    public static function canDrive(): string
    {
        return 'This car can drive' . '<br>' . PHP_EOL;
    }
}