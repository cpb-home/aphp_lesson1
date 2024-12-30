<?php

include './autoloader.php';

spl_autoload_register('autoloader');

// use student\Student;
// use techniks\tv\Tv;
// use techniks\car\Car;

$student1 = new Student('Ivan', 'Petrov', 23);
$student2 = new Student('Petr', 'Sergeev', 23);
$student3 = new Student('Sergey', 'Ivanov', 23);

$tv1 = new Tv('Panasonic', 45);
$tv2 = new Tv('Sony', 51);
$tv3 = new Tv('Samsung', 45);

$car1 = new Car('VAZ', '2106', 160);
$car2 = new Car('ZAZ', '968M', 118);
$car3 = new Car('GAZ', '51', 90);

echo 'Student 1: ' . $student1->getFullInfo();
echo 'Student`s 2 full name: ' . $student2->getFullName();
echo 'Student 3: ' . $student3->getFullInfo() . '<br>' . PHP_EOL;

echo 'Tv`s 1 brand name: ' . $tv1->getBrandName();
echo 'Tv 2 : ' . $tv2->getFullInfo();
echo 'Tv 3 : ' . $tv3->getFullInfo() . '<br>' . PHP_EOL;

echo 'Car`s 1 title: ' . $car1->getFullTitle();
echo 'Car 2 max speed: ' . $car2->maxSpeed . '<br>' . PHP_EOL;
echo 'Car 3 full info: ' . $car3->getFullInfo() . '<br>' . PHP_EOL;

echo 'Every car option: ' . Car::canDrive();
echo 'Every tv option: ' . Tv::isShowTv();
echo 'Every student doing: ' . Student::isLearning() . '<br>' . PHP_EOL;

if (Tv::$hasScreen) {
    echo 'Every TV has screen';
} else {
    echo 'Not every TV has screen';
}