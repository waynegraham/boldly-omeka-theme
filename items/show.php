<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
head();

?>

<style>

img.full {
    max-width: 680px;
}

</style>

<div id="colLeft">
  <h1><?php echo item('Dublin Core', 'Title'); ?></h1>

<?php 
if (function_exists('tei_display_installed')) { 
//   echo render_tei_files($item->id,  $_GET['section']); 
} 
?>

  <?php if(count($title) > 1): ?>
  <h2>All Titles</h2>
  <ul>
    <?php foreach($titles as $title): ?>
    <li><?php echo $title; ?></li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>

  <?php while(loop_files_for_item()): ?>
    <?php 
    $file = get_current_file();

    if($file->hasThumbnail()) {
        echo display_file($file, array('imageSize' => 'fullsize'));
    }
?>
  <?php endwhile; ?>

  <?php //echo custom_show_item_metadata(); ?>

<?php echo plugin_append_to_items_show(); ?>



</div>
<div id="colRight">
    <h2>About the Item</h2>
    <div class="rightBox">
        <ul>
            <li><strong>Added:</strong> <?php echo display_date_added(); ?></li>
            <?php if(item_belongs_to_collection()): ?>
            <li><strong>Collection:</strong><?php echo link_to_collection_for_item(); ?></li>
            <?php endif; ?>
            <?php if(item_has_type()): ?>
            <li><strong>Item Type:</strong><?php echo item('Item Type Name'); ?></li>
            <?php endif; ?>
            
        </ul>

    <h2>Citation</h2>
    <p><?php echo item_citation(); ?></p>

    </div>
</div>

<?php foot();


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
