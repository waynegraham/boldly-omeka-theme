<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
head();

?>

<div id="colLeft">
  <h1><?php echo item('Dublin Core', 'Title'); ?></h1>

  <?php if (function_exists('tei_display_installed')){ echo render_tei_files($item->id,  $_GET['section']); } ?>

  <?php if(count($title) > 1): ?>
  <h2>All Titles</h2>
  <ul>
    <?php foreach($titles as $title): ?>
    <li><?php echo $title; ?></li>
<?php endforeach; ?>
  </ul>
  <?php endif; ?>
</div>
<div id="colRight">

</div>

<?php foot();


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
