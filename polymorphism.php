<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

interface Shape {
    public function area();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

// Usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle area: " . $circle->area() . "\n";
echo "Rectangle area: " . $rectangle->area() . "\n";

?>
