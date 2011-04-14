<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Generate a series of random images
 * 
 * @param int $num Number of random images to display
 *
 * @retrun void
 */
function random_items($num = 3)
{
  for($i = 0; $i < $num; $i++) {
    $item = random_featured_item(true);
    set_current_item($item);
    if(item_fullsize()) {  
      echo item_fullsize(array('width' => '960', 'height' => '370'));
    }
  }

  return;
}

function display_date_added($format = 'F j, Y', $item = null) {
    if (!$item) {
        $item = get_current_item();
    }
    
    $dateAdded = item('Date Added', null, null, $item);
    return date($format, strtotime($dateAdded));   
}



/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */

