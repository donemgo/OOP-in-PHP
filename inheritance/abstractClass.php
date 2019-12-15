<?php

abstract class Shape {
    public function __contruct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea();
}

class Trapeze extends Shape {

}
// fix the error aboce
(new Trapeze)->getArea();
(new Trapeze)->getColor();

//if you notice we dont need to define anything inside of the abstract method, because what we are saying is once you create a class that extends the abstract class you must provide us a method getArea 
// abstract class cannot be instantianted


abstract class Mailer {
    public function send($to, $from , $body) 
    {}
}

class UserMailer extends Mailer {
    public function sendWelcomeEmail(User $user)
    {
        return $this->send();
    }
}