<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Overrides the default simple_search
 *
 * @return string HTML search form
 */
function boldly_search($formProperties = array('id' => 'searchform'))
{
    $uri = apply_filters('simple_search_default_uri', uri('items/browse'));

    $searchQuery = array_key_exists('search', $_GET) ? $_GET['search'] : 'type your search';

    $formProperties['action'] = $uri;
    $formProperties['method'] = 'get';

    $html = '<form ' . _tag_attributes($formProperties) . '>';
    $html .= __v()->formSubmit('searchsubmit', '');
    $html .= __v()->formText('search', $searchQuery, array('name'=>'search', 'id' => 's'));
    $html .= '</form>';

    return $html;

}

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

/**
 * Display and format the data an item was added
 *
 * @param string $format Format for date, @see strftime
 * @param Omeka_Item $item Item to format date
 *
 * @return string Formatted date string
 */
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

