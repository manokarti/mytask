<?php
$array = array('15' => 'Linianos','5' => 'IT','3' => 'Linio');

for ($i = 1; $i <= 100; $i++) {
  foreach($array as $key => $arr) {
    if($i % $key === 0) {
      echo $i.'---'.$array[$key]."<br>";
      continue 2;
    }
  }
}

?>
