<?php
class Car
{
    const available_doors = [2, 4];

    public $door;
    public $company;
    public $model;
    public $year;

    public function __construct($company, $model, $year, $door = 4)
    {
        $this->company = $company;
        $this->model = $model;
        $this->year = $year;

        if( !in_array($door, self::available_doors) ) {
            $this->door = $door;
        } else {
            $this->door = 4;
        }

        echo "New $company created\n";
    }

    public static function class_description()
    {
        return "this class create a Car";
    }

    public function __toString()
    {
        return $this->showInfo();
    }

    public function start()
    {
        echo "Engine Started\n";
    }

    public function stop()
    {
        echo "Car Stopped\n";
    }

    public function showInfo()
    {
        return $this->company . ' ' . $this->model . ' ' . $this->year . "\n";
    }

    public function setAge($age)
    {
        $this->year = 2020 - $age;
    }
}

echo '<pre>';

var_dump(Car::available_doors);
var_dump(Car::class_description());

$car1 = new Car('BMW', 'Z4', 2019, 2);
//$car1->company = 'BMW';
//$car1->model = 'Z4';
//$car1->door = 2;
//$car1->setAge(1);
echo $car1;
//$car1->start();
//$car1->stop();
//var_dump($car1->showInfo());

//var_dump($car1 instanceof Car);

$car2 = new Car('Benz', 'S500', 2018);
//$car2->company = 'Benz';
//$car2->model = 'S500';
//$car2->door = 4;
//$car2->year = 2018;
var_dump($car2->showInfo());

echo '</pre>';