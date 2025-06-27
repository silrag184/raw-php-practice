<?php

abstract class Animal {
    // Abstract method (does not have a body)
    abstract public function makeSound();

    public function move() {
        echo "I am moving\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow\n";
    }
}

// Create objects
$dog = new Dog();
$cat = new Cat();

$dog->makeSound(); // Outputs: Bark
$dog->move();      // Outputs: I am moving

$cat->makeSound(); // Outputs: Meow
$cat->move();      // Outputs: I am moving

?>
