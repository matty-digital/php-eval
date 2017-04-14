<?php

  $min     = 1;
  $max     = 10000;
  $arr1    = array();
  $arr2    = array();
  $commons = array();

  for($i = $min; $i <= 100; $i++) {
    $arr1[] = mt_rand($min, $max);
    $arr2[] = mt_rand($min, $max);
  }

  foreach($arr1 as $key => $val) {
    if(in_array($val, $arr2)) {
      $commons[] = $val;
    }
  }
  // ok for just numbers
  sort($commons);

  // you may have to refresh a few times to get sets with multiple results
  print_r($commons);
