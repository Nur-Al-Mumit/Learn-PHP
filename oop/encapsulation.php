<?php

class Normal
{
    public $x, $y, $z;

    public function sum()
    {
        $this->z = $this->x + $this->y;
        return $this->z;
    }
}

$calc = new Normal();
$calc->x = 5;
$calc->y = 2;

echo $calc->sum();

class Encap
{
    private $x, $y, $z;

    public function sum($num_1, $num_2)
    {
        $this->x = $num_1;
        $this->y = $num_2;
        $this->z = $this->x + $this->y;
        return $this->z;
    }
}

$doCalc = new Encap();
echo  $doCalc->sum(8, 5);
