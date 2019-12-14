<?php

class Task {
    public $description = 'this is the description of the task';
    public $completed = false;
    public function __contruct($description)
    {
        $this->description = $description;
    }
    public function complete()
    {
        $this->completed = true;
    }
}
// the key word this refers to this instance of our class or this object
$task = new Task('this should be the description');
$task->complete();
var_dump($task->description);