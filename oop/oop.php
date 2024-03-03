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

$x = new people();
$y = new employe();
$y->show();
echo '<br>';
echo '<br>';
echo '<br>';

/**0:
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


class test_1
{
    private $num;

    function __construct()
    {
        $this->num = 3;
    }

    // Getter function
    protected function getData()
    {
        echo "print form getData()";
    }
}

class inherit_test_1 extends test_1
{
    function getData()
    {
        echo "print from getData extended";
    }
}

$test_obj = new inherit_test_1();

$test_obj->getData();


// Abstract Class

/**
 * atleast contain 1 abstract function
 * abstract function just declare but not implement
 * can't create obj with it
 * child class must contain abstract function
*/

abstract class main
{
    // protected $name;
    protected $name;

    // protected function __construct($name)
    // {
    //     $this->name = $name;
    // }

    abstract protected function show($x, $y);
}


class extended_main extends main
{
    public function show($x, $y)
    {
        echo $x + $y;
    }
}
$test = new extended_main();
$test->show(5, 6);

echo '<br>';


// interface

/**
 * interface support multiple inheritence
 * it can only contain abstract function
 * can't define variables
 * no constructor  
 * support multiple inheritence
 * 
*/

interface display
{
   public function show($name);
}

interface manageSession
{
    public function login($token);
    public function logout($token);
}


class account implements display, manageSession
{
    public function show($name){
        echo 'function show()';
    }

    public function login($token)
    {
        echo 'logIn $token';
    }

    function logout($token)
    {
        echo 'logout';
    }
}

$new = new account();
// $new->show('ddd');


// Static Members

/**
 * 
*/

class static_class
{
    static public $x = 07;

    function get_number(){
        return $this->x;
    }
}

// $x = new static_class();
// echo $x->x;
echo static_class::$x;

class static_class_2
{
    static public $x = 10;

    //access static variabls in static function 

    static function get_number(){
        echo self::$x;
    }
    
}