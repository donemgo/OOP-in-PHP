<?php
class Mother {
    public function getEyeCount()
    {
        return 2;
    }
}

class Child extends Mother {

}
(new Child)->getEyeCount();

// here we use inheritance to get behaviour from a parent or base class from the parent

// there are other reasons that inheritance might be useful

// if there are any attributes that would be shared among subclasses then we add that to the parent class

class Shape {
    protected $length = 4;
    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Square extends Shape {

}

class Triangle extends Shape {
    // for a triangle if we call the getArea method we would get the worng area
    // so we declare a similar method in the sub class, that one would take precedence over the parent own
    protected $base = 4;
    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}
 // now to get the area for a square is different for a triangle, what do we do when we want to 

 echo (new Triangle)->getArea(); //would give a differen result and square would give a different result