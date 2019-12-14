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

// another reason we use setters and getters are behaviours, we can introduce specific behaviours such as returning age in terms of days instead of years, we can define this behaviours in setters or getters
var_dump($john);