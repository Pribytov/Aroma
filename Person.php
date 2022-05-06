<?php 
class Person {
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->hp = 100;
        $this->mother = $mother;
        $this->father = $father;
    }

    function sayHi($name){
        return "Hi $name, I'm " . $this->name;
    }

    function setHP($hp){
        if($this->hp + $hp >=100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }

    function getHp(){
        return $this->hp;
    }

    function getName(){
        return $this->name;
    }

    function getLastName(){
        return $this->lastname;
    }

    function getMother(){
        return $this->mother;
    }

    function getFather(){
        return $this->father;
    }

    function getInfo(){
        return "
        <h3>A few words about myself: </h3><br>".
            "My name is: " . $this->getName() . 
            "<br> my lastname is: " . $this->getLastName() .
            "<br> my father is: " . $this->getFather()->getName() .
                                 " " . $this->getFather()->getLastName() .
             "<br> my mother is: " . $this->getMother()->getName() .
                                 " " . $this->getMother()->getLastName() . 
             "<br> my grandfathers are: " . $this->getFather()->getFather()->getName() .
                                         " " . $this->getFather()->getFather()->getLastName() . " and " . 
                                            $this->getMother()->getFather()->getName() .
                                         " " . $this->getMother()->getFather()->getLastName() .
            "<br> my grandmothers are: " . $this->getFather()->getMother()->getName() . 
                                         " " .  $this->getFather()->getMother()->getLastName() . " and " . 
                                            $this->getMother()->getMother()->getName() . 
                                         " " . $this->getMother()->getMother()->getLastName();
    }
}

$igor = new Person("Igor", "Petrov", 68);
$lena = new Person("Lena", "Petrova", 60);
$olga = new Person("Olga", "Ivanova", 42, $lena, $igor);

$sasha = new Person("Sasha", "Ivanov", 70);
$masha = new Person("Masha", "Ivanova", 65);
$alex = new Person("Alex", "Ivanov", 42, $masha, $sasha);

$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

// echo $valera->getName()."<br>";
// echo $valera->getMother()->getName()."<br>";
// echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();

// $medKit = 50;

// $alex->setHp(-30);
// echo $alex->getHp()."<br>"; 
// $alex->setHp($medKit);
// echo $alex->getHp()."<br>";


//echo 123
?>