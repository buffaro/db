<?php
function avg($raw) {
    $i = explode(",", $raw);
    if($i[2] == ""){
        if($i[1] == ""){
            $c = 1;
        }else{
            $c = 2;
        }
    }else{
        $c = 3;
    }
    return number_format((float)array_sum(explode(",", $raw)) / $c, 2, '.', '');
  }
?>