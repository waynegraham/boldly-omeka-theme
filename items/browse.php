<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
head();

?>

<div id="colLeft">
    <div id="archive-title">
        Browsing items 
        <?php if(!empty($_REQUEST['tags'])) echo 'Tagged&nbsp; &lsquo;', html_escape($_REQUEST['tags']), '&rsquo;'; ?>
    </div>

    <?php while(loop_items()): ?>
    <div class="postItem">
        <h1><?php echo link_to_item(item('Dublin Core', 'Title'), array('class'=>'permalink')); ?></h1>
 
       <div class="meta">
            <?php echo item_tags_as_string(); ?> 
        </div>

        <?php if (item_has_thumbnail()): ?>
   			<p><?php echo link_to_item(item_thumbnail()); ?></p>
		<?php endif; ?>

        <?php if ($text = item('Item Type Metadata', 'Text', array('snippet'=>250))): ?>
    		<p><?php echo $text; ?></p>
		<?php elseif ($description = item('Dublin Core', 'Description', array('snippet'=>250))): ?>
    		<p><?php echo $description; ?></p>
		<?php endif; ?>
        
    </div>
    <?php endwhile; ?>

    <div class="emm-paginate">
        <?php echo pagination_links(); ?>
    </div>

    <?php echo plugin_append_to_items_browse(); ?>

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
