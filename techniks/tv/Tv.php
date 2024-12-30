<?php

//namespace techniks\tv;

class Tv
{
    public string $brand;
    public int $diag;
    public static bool $hasScreen;

    public function __construct(string $brand, int $diag)
    {
        $this->brand = ucfirst($brand);
        $this->diag = $diag;
        self::$hasScreen = true;
    }

    public function getBrandName(): string
    {
        return $this->brand . ' ' . '<br>' . PHP_EOL;
    }

    public function getFullInfo(): string
    {
        return 'This TV is of ' . $this->brand . ' brand and has diagonal ' . $this->diag . ' inches' . '<br>' . PHP_EOL;
    }

    public static function isShowTv(): string
    {
        return 'The TV-set is showing TV' . '<br>' . PHP_EOL;
    }
}