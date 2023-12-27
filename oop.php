<?php
class calc
{
    public $x, $y, $z;
    function add()
    {
        $this->z = $this->y + $this->x;
        return $this->z;
    }
}

$cal1 = new calc();
$cal1->x = 5;
$cal1->y = 2;
// echo $cal1->add();

class person
{
    public $name, $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
        echo $this->name . ' _ ' . $this->age;
    }
}

$per_1 = new person('nur', 21);
// echo $per_1->show();
$per_2 = new person('abdul mumit', 21);
// echo $per_2->show();



// OOP Inheritance


class people
{
    public $name, $age, $money;

    function __construct()
    {
        echo "people construct() <br>";
    }

    function show()
    {
        echo 'people show()';
    }
}

class employe extends people
{
    function __construct()
    {
        echo "employe construct() <br>";
        parent::__construct();
    }
}

// $x = new people();
// $y = new employe();
// $y->show();
echo '<br>';
echo '<br>';
echo '<br>';

/**
 * Access Modifier 
 * 1.public
 * 2.protected
 * 3.private
 */


class base
{
    public $pub_name;
    protected $pro_name;
    private $pri_name;

    function __construct($pub_name, $pro_name, $pri_name)
    {
        $this->pub_name = $pub_name;
        $this->pro_name = $pro_name;
        $this->pri_name = $pri_name;

        // echo $pub_name . '<br>';
        // echo $pro_name . '<br>';
        // echo $pri_name . '<br>';

        echo $this->pub_name . '<br>';
        echo $this->pro_name . '<br>';
        echo $this->pri_name . '<br>';
    }

    public function show()
    {
        echo "public show() <br>";
        echo $this->pub_name . "<br>";
    }

    protected function pro_show()
    {
        echo "protected show() <br>";
        echo $this->pro_name . "<br>";
    }

    private function pri_show()
    {
        echo "private show() <br>";
        echo $this->pri_name . "<br>";
    }
}

class main_base extends base
{
    function __construct()
    {
        // echo $this->pub_name;
        // echo $this->pro_name;
        // echo $this-> ;
        $this->show();
        $this->pro_show();
        // $this->pri_show();
    }
}

$x = new base('public', 'protected', 'private');
$y = new main_base();

// $x->show();
// $x->pro_show();
// $x->pri_show();
// echo $x->pub_name;
// echo $x->pro_name;
// echo $x->pri_name;
