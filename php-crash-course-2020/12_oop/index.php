<?php

// What is class and instance

class Person {
    public $name;
    public $surname;
    private  $age;

    public function  __construct($name,$surname)
    {
   // echo  $name.' '.$surname;
    $this->name= $name;
    $this->surname=$surname;
    }
    public function setAge($age){
        $this->age=$age;
    }

}
$p = new Person("Brad", "Traversy");
//$p->age=30;      <----ovo ne radi jer je private; zato stavljamo gore setAge
$p->setAge(30);
echo '<pre>';
var_dump($p);
echo '</pre>';
//$p2 = new Person();
//$p2->name='John';
//$p2->surname= 'Smith';



// Create Person class in Person.php

// Create instance of Person

// Using setter and getter