<?php
echo "Abstraction";

abstract class Bank
{
    public $id;
    abstract function set_Id($id);
}


class Account extends Bank
{
    function set_Id($id)
    {
        echo '$this->id';
    }
}
