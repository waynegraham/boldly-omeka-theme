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

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */

