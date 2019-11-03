<?php

class Character {

    private $properties;

    public function setProperty($pName, $pValue) {
        $this->properties[$pName] = $pValue;
    }

    public function getAllProperties() {
        return $this->properties;
    }

}

interface BuilderInterface {

    public function createCharacter();

    public function addHelmet();

    public function addWeapon();

    public function addBoots();

    public function getCharacter();
}

class Director {

    public function build(BuilderInterface $builder) {
        $builder->createCharacter();
        $builder->addHelmet();
        $builder->addWeapon();
        $builder->addBoots();
        return $builder->getCharacter();
    }

}

class MarioBuilder implements BuilderInterface {

    private $character;

    public function createCharacter() {
        $this->character = new Character();
    }

    public function addHelmet() {
        $this->character->setProperty("helmet", "red");
    }

    public function addWeapon() {
        $this->character->setProperty("leftHand", "gloves");
        $this->character->setProperty("rightHand", "gloves");
    }

    public function addBoots() {
        $this->character->setProperty("leftFoot", "black boot");
        $this->character->setProperty("rightFoot", "black boot");
    }

    public function getCharacter() {
        return $this->character;
    }

}

class LuigiBuilder implements BuilderInterface {

    private $character;

    public function createCharacter() {
        $this->character = new Character();
    }

    public function addHelmet() {
        $this->character->setProperty("helmet", "green");
    }

    public function addWeapon() {
        $this->character->setProperty("leftHand", "gloves");
        $this->character->setProperty("rightHand", "gloves");
    }

    public function addBoots() {
        $this->character->setProperty("leftFoot", "white boot");
        $this->character->setProperty("rightFoot", "white boot");
    }

    public function getCharacter() {
        return $this->character;
    }

}

$mario = (new Director())->build(new MarioBuilder());

print_r($mario->getAllProperties());

$luigi = (new Director())->build(new LuigiBuilder());
print_r($luigi->getAllProperties());
