<?php
   class item {
      var $name;
      var $number;
      var $key;

      public function __construct($name, $number, $key) {
         $this->name = $name;
         $this->number = $number;
         $this->key = $key;
      }
   }
?>
