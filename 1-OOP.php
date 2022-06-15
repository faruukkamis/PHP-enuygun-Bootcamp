<?php

class Fruits {
    // properties
    public $name;
    public $color;
    public $price;
    
    function __construct($color, $name="default name", $price="2 TL"){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        
    }

    function __destruct() {
        echo "\n Color of $this->name is $this->color.";
        
    }
    
    //methods
    function set_name($name) {
        $this->name = $name;
        
    }
    
    function get_name(){
        return $this->name;
        
    }
    
    function set_color($color) {
        $this->color = $color;
        
    }
    
    function get_color() {
        return $this->color;
        
    }
    
    
}

$apple = new Fruits("RED","APPLE");
$banana = new Fruits("YELLOW");
//$banana->name = "BANANA";
$banana->set_name("BANANA");

?>