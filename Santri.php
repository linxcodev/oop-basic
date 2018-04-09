<?php

/**
 * Learn setter and getter
 */ 
 class Santri
 {
     // if public can call use $fajrul->age = 2;
     public $name;

     // if private cannot call use $fajrul->age = 2; but use  $fajrul->getAge() for security
     private $age;

     public function __construct($name)
     {
         $this->name = $name;
     }

    //  acessor is get
     public function getAge()
     {
         return $this->age;
     }

    //  mutator is set
     public function setAge($age)
     {
         if ($age < 15)
         {
             echo 'Santri is kids';
         }
         if ($age >= 15 && $age < 40)
         {
            echo 'Santri is adult';
         }
         if ($age >= 40)
         {
            echo 'Santri is old';
         }
         $this->age = $age;
     }
 }

 $fajrul = new Santri('Ahmad fajrul falah');

 $fajrul->setAge(2);
// $fajrul->age = 2;

 var_dump($fajrul, $fajrul->getAge());
