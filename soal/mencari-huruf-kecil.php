<?php

$kata = "TranSISI"; 

$n = strlen($kata); 

$count = 0;
  
for($i = 0; $i < $n; $i++) {
    if(ctype_lower($kata[$i])) {
        $count++;
    }
}
echo "Kata <b> $kata </b> mengandung $count huruf kecil ";

?>