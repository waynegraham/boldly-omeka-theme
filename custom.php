<?php

function random_items($num = 3)
{
  for($i = 0; $i < $num; $i++) {
    $item = random_featured_item(true);
    set_current_item($item);
    if(item_fullsize()) {  
      echo item_fullsize();
    }
  }

  return;
}

