<?php
   //function __autoload($class_name) {
   //   $class_path = 'biz/'.$class_name.'.php';
   //   if (file_exists($class_path)) {
   //      require_once $class_path;
   //   }
   //   else {
   //      echo 'The file '.$class_path.' not found';
   //   }
   //   require_once('../model/item.php');
   //}
require_once('item_biz.php');

   function get_biz($name){
      $obj = new ReflectionClass($name);
      return $obj->newInstance();
   }
?>
