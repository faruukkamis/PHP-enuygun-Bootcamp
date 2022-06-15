<?php

interface Machine {
    public function calc_area();
    public function calc_perimeter();
    public function calc_volume();
}

class Circle implements Machine {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calc_area() {
        return pow($this->radius,2) * pi();
    }
    
    public function calc_perimeter() {
        return $this->radius * 2 * pi();
    }
    
    public function calc_volume() {
        return $this->radius * $this->radius * $this->radius * (4/3);
    }
    
}

class Rectangle implements Machine {
    private $width;
    private $height;
    private $length;
    
    public function __construct($width,$height,$length) {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }
    
    public function calc_area() {
        return $this->width * $this->length;
    }
    
    public function calc_perimeter() {
        return 2 * ($this->length + $this->width);
    }
    
    public function calc_volume() {
        return $this->width * $this->height * $this->length;
    }
    
}



$mycirc = new Circle(4);
$myrectangle = new Rectangle(3,4,5);
echo " Area of my circle is: " . $mycirc->calc_area(). "\n" ;
echo " Perimeter of my circle is: " . $mycirc->calc_perimeter(). "\n" ;
echo " Volume of my sphere is: " . $mycirc->calc_volume(). "\n" ;
echo " Area of my rectangle is: " . $myrectangle->calc_area(). "\n" ;
echo " Perimeter of my rectangle is: " . $myrectangle->calc_perimeter(). "\n" ;
echo " Volume of my rectangular prism is: " . $myrectangle->calc_volume(). "\n" ;



?>
