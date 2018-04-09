<?php

/** 
 * Learn construct
*/
class Task
{
    public $description;
    public $completed = false;
    
    // if class active, _construct frist active walaupun not call 
    public function __construct($description)
    {
        $this->description = $description;
    }

    // automatic used if end 
    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP');
$task->complete();

$falstask = new Task('false task');

var_dump($task, $falstask);


