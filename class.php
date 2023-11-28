<?php
class MyClass
{
    private $private = 'PRIVATE !';
    protected $protected = 'PROTECTED !';
    public $public = 'PUBLIC';
    private $name;

    // Setter
    public function setName(string $name)
    {
        $this->name = $name;
    }

    // Getter
    public function getName()
    {
        return $this->name;
    }
}

$obj1 = new MyClass();
$obj1->setName('NiranDev');
echo $obj1->getName();






// class MyClass3
// {
//     private $private = 'PRIVATE !';
//     protected $protected = 'PROTECTED !';
//     public $public = 'PUBLIC';

//     function __construct()
//     {
//         echo self::class . ': ';
//         echo $this->private . ' , ';
//         echo $this->protected . ' , ';
//         echo $this->public;
//         echo '<br><br>';
//     }
// }
// class MysubClass3 extends MyClass3
// {
//     function __construct()
//     {
//         echo self::class . ': ';
//         echo $this->protected . ' , ';
//         echo $this->public;
//         echo '<br><br>';
//     }
// }
// $obj = new MyClass3();
// $obj2 = new MysubClass3();
