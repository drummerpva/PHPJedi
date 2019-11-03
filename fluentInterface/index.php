<?php
class Person{
    private $name;
    private $lastName;
    private $age;
    
    public function setName($name){
        $this->name =$name;
        return $this;
    }
    public function setLastName($ln){
        $this->lastName = $ln;
        return $this;
    }
    public function setAge($a){
        $this->age =$a;
        return $this;
    }
    public function getFullName(){
        return $this->name." ".$this->lastName." = ".$this->age." years";
    }
    
    
}

$person = new Person();
$person->setName("Douglas")->setLastName("Poma")->setAge('27');
echo "Nome: ".$person->getFullName();