<?php
class MyClass
{
    public $Fname = 'Niran';
    public function showname()
    {
        echo $this->Fname;
    }
}
class Constuct1
{
    public $prop = 'Learn OOP';
    function __construct()
    {
        echo $this->prop;
        $this->hello();
    }
    public function hello()
    {
        echo 'Hello , PHP';
    }
}
$obj1 = new Constuct1();
// $obj1->showname();
