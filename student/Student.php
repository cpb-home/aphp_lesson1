<?php

//namespace student;

class Student
{
    public string $name;
    public string $surname;
    public int $age;
    public static bool $isStudent;

    public function __construct(string $name, string $surname, int $age)
    {
        $this->name = ucfirst($name);
        $this->surname = ucfirst($surname);
        $this->age = $age;
        self::$isStudent = true;
    }

    public function getFullName(): string
    {
        return $this->name . ' ' . $this->surname . '<br>' . PHP_EOL;
    }

    public function getFullInfo(): string
    {
        return $this->name . ' ' . $this->surname . ', возраст: ' . $this->age . '<br>' . PHP_EOL;
    }

    public static function isLearning(): string
    {
        return 'The student usually is learning' . '<br>' . PHP_EOL;
    }
}