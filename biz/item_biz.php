<?php
   //function spl_autoload_register($class_name) {
   //   $file_name = '../model/' . $class_name . '.php';
   //   if (file_exists($file_name)) {
   //      require_once($file_name);
   //   }
   //   else {
   //      echo 'The file ' . $file_name . ' not found.';
   //   }
   //}
require('model/item.php');
   class item_biz {
      function get_multi_record_according_name($name) {
         $item_1 = new item('AAA', 1, 1);
         $item_2 = new item('BBB', 2, 2);
         $item_3 = new item('CCC', 3, 3);

         $multi_record = array();
         array_push($multi_record, $item_1);
         array_push($multi_record, $item_2);
         array_push($multi_record, $item_3);

         return json_encode($multi_record);
      } 
   }
?>
