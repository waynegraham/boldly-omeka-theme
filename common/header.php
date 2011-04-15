<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?php echo settings('site_title'); echo $title ? ' | ' . $title : ''; ?></title>
  <meta name="description" content="<?php echo settings('description'); ?>" />
  <meta name="author" content="<?php echo settings('site_author'); ?>" />
  <meta name="generator" content="Omeka <?php echo OMEKA_VERSION ?>" />
  <link rel="shortcut icon" href="favicon.png" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
<?php 
  echo auto_discovery_link_tag();
  plugin_header(); 
  
  queue_css(array('style', 'ddsmoothmenu', 'nivo-slider', 'prettyPhoto'));

  display_css();

  queue_js(array('cufon-yui', 'custom', 'ddsmoothmenu', 'jquery-1.4.2.min', 'jquery.form', 'jquery.nivo.slider.pack', 'jquery.prettyPhoto', 'Museo_Slab_500_400.font'));

  display_js();

?> 
   </head>
<body<?php echo $bodyid ? ' id="'.$bodyid.'"' : ''; ?><?php echo $bodyclass ? ' class="'.$bodyclass.'"' : ''; ?>>
    <div id="mainWrapper">
      <div id="wrapper">
        <div id="header">
            <div id="logo">
                <?php echo link_to_home_page(custom_display_logo()); ?>
            </div>
            <div id="mainMenu" class="ddsmoothmenu">
                <ul id="menu-topmenu">
                    <?php echo custom_public_nav_header(); ?>
                </ul>
            </div><!-- #mainMenu-->
            <div id="topSearch">
                
<?php echo boldly_search(); ?>
<!-- <form id="searchForm" action="" method="get">
                    <input id="searchsubmit" type="submit" />
                    <input type="text" id="s" name="q" value="type your search" />
                </form>-->
            </div><!-- #topSearch-->
            <div id="topSocial">
                <ul>
                    <li>
                    <a href="http://twitter.com/<?php echo get_theme_option('Twitter User'); ?>" class="twitter" title="Follow us on Twitter!">
                        <img src="<?php echo img('ico_twitter.png') ?>" alt="Follow us on Twitter!" />
                        </a>
                    </li>
                    <li>
                        <a href="http://www.facebook.com/<?php echo get_theme_option('Facebook User'); ?>" class="twitter" title="Join us on Facebook">
                        <img src="<?php echo img('ico_facebook.png'); ?>" alt="Join us on Facebook" />
                        </a>
                    </li>
                    <li>
<?php 
  if(get_theme_option('Feed')) {
      $feed = get_theme_option('Feed'); 
} else {
    $feed = '/omeka/items/browse?output=rss2';
}
?>
                        <a href="<?php echo $feed ?>" title="rss" class="rss">
                            <img src="<?php echo img('ico_rss.png'); ?>" alt="Subscribe to our RSS Feed" />
                        </a>
                    </li> 
                </ul>
            </div><!-- #topSocial -->
        </div><!-- #header -->
        <div id="content">

<?php
/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */

