<?php

/** 
 * Learn oop call create properties, call properties and function
*/
class Laptop
{
    // properties
    public $merek;        
    var $pemilik;                                  // var same with public
    var $ukuran_layar;
    
    // function in class
    function hidupkanlayar() 
    {
        return 'hidupkan laptop';
    }
}

// create object
$laptop_fajrul = new Laptop();

$laptop_fajrul->pemilik = 'anto';
$laptop_fajrul->merek = 'opo';
$laptop_fajrul->ukuran_layar = '2 inch';

var_dump($laptop_fajrul);                         // call properties
var_dump($laptop_fajrul->hidupkanlayar());        // call function