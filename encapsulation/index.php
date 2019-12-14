<?php
class Person
{
    public $age;

    public function __contruct($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        if($age < 18)
        {
            throw new Execption('Person is not old enough to be here');
        }
        $this->age = $age;
    }
    public function getAge($age)
    {
        return $this->age;
    }
}
$john = new Person('John Doe');

$john->age = 15;
// now what are the uses of setters and getters, now we know we can have access to the methods orproperties of a class once we have an instance, but that exposes our class or data to some security risks, with setters and getters the idea is simple we create methods that take in values or checks certain values and if the conditions are alright we can either set some data or retrieve some data, if not we can do any of these. you get it????

// another reason we use setters and getters are behaviours, we can introduce specific behaviours such as returning age in terms of days instead of years, we can define this behaviours in setters or getters.
var_dump($john);
$newPerson = new Person()
// when we define our classes like this, having our properties and methods as public, ideally we want to hide as much information as we can, it is like a rule. because right now we can just write any age we like into for the age property.

// so encapsulation would help us hide some properties or methods so you either go through  setters or getters or you dont go at all.

// we can use other types of visiblites like private and protected.

class LightSwitch {
    public function on()
    {

    }
    public function off()
    {
        
    }
    protected function connect()
    {
        
    }
    private function activate()
    {
        
    }
}
//when we use private we are saying outside of this class, if another class inherits it, you cannot have access to this class.

//if we use protected, when we extend this class we can still have access to these methods