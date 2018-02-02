<?php
  $color = get_traffic_ligh1(2);
  echo $color;

  function get_traffic_ligh1($code){

    if($code == 1){
      return "raudona";
    }
    elseif($code == 2){
      return "green";
    }
      else{
        return "yellow";
      }
    }
 ?>
