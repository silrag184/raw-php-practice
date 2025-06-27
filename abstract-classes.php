<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

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
