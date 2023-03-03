<?php
class Rectangle 
{
    public $width;
    public $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return $this->width * $this->height;
    }

    public function getPerimeter(){
        return 2 * ($this->width + $this->height);
    }
}

$rectangle = new Rectangle(5,10);
echo $rectangle->getArea() . '<br>';
echo $rectangle->getPerimeter() . '<br>';
?>