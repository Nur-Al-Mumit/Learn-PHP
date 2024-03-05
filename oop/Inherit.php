<?php

echo 'Inheritance <br>';

/**
 * For shear common properties and methods
 */

class employe
{
    // public $name;
    // public $old;
    // public $age;
    // public $salary;
    public $name, $gender, $age, $salary;

    function __construct($name, $gender, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->salary = $salary;
    }

    function info()
    {
        echo "
        <ul>
            <li>Employe Name: $this->name</li>
            <li>Employe Age: $this->age</li>
            <li>Employe Gender: $this->gender</li>
            <li>Employe Salary: $this->salary</li>
        </ul>
        ";
    }
}



$employe_1 = new employe('Sabbir Ahmed', 'Male', 30, 70000);
$employe_2 = new employe('Nur Al Mumit', 'Male', 21, 50000);

echo $employe_1->info() . '<br>';
echo $employe_2->info() . '<br>';


class CEO extends employe
{
    public $project_bonus = 50000;
    public $total;


    // this is called methoed overwriding
    function info()
    {
        $this->total = $this->salary + $this->project_bonus;

        echo "
        <ul>
            <li>Employe Name: $this->name</li>
            <li>Employe Age: $this->age</li>
            <li>Employe Gender: $this->gender</li>
            <li>Employe Salary: $this->total</li>
        </ul>
        ";
    }
}


$ceo = new CEO("Sayem", "male", 35, 100000);


echo $ceo->info();
