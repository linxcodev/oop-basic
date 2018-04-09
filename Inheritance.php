<?php

/**
 * Learn Inheritance
 */
class Komputer
{
    public $merek;
    public $processor;
    public $memory;

    public function beliKomputer()
    {
        return 'Beli Komputer Baru';
    }
}

class Laptop extends Komputer
{
    public function lihatSpec()
    {
        return "merek: $this->merek, processor: $this->processor, memory: $this->memory";
    }
}

$laptopLenovo = new Laptop();

$laptopLenovo->merek = 'Lenovo';
$laptopLenovo->processor = 'core-i3';
$laptopLenovo->memory = '8 gb';

var_dump($laptopLenovo->lihatSpec());
