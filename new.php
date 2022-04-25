<?php
 $digits = (int)(log($num,10)+1) 


  $num = 123;
  $num2 = 1234;
  $num3 = 12345;

  function digits($num){
    return (int) (log($num, 10) + 1);
  }

  echo "\n $num: " . digits($num);  // 123: 3
  echo "\n $num2:" . digits($num2); // 1234: 4
  echo "\n $num3:" . digits($num3); // 12345: 5 
  echo "\n";
  ?>
