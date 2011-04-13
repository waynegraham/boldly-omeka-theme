<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?php settings('site_title'); ?></title>
  <meta name="description" content="<?php echo settings('description'); ?>" />
  <meta name="author" content="<?php echo settings('site_author'); ?>" />
  <meta name="generator" content="" />
  <link rel="shortcut icon" href="favicon.png" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
<?php 
  echo auto_discovery_link_tag();
  plugin_header(); 
  
  queue_css('style');

  display_css();
  display_js();
?>  
</head>
<body id="home">
    <div id="wrapper">
        <div id="header">
            <div id="logo"><a href=""><img src="" /></a></div>
            <div id="mainMenu" class="ddsmoothmenu">
                <ul id="menu-topmenu>
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="items">Items</a></li>
                    <li><a href="exhibits">Exhibits</a></li>
                    <li><a href="plugins">Plugins</a></li>
                </ul>
            </div><!-- #mainMenu-->
            <div id="topSearch">
                <form id="searchForm" action="" method="get">
                    <input id="searchsubmit" type="submit" />
                    <input type="text" id="s" name="q" value="type your search" />
                </form>
            </div><!-- #topSearch-->
            <div id="topSocial">
                <ul>
                    <li>
                        <a href="http://twitter.com/scholarslab" class="twitter" title="Follow us on Twitter!">
                            <img src="images/ico_twitter.png" alt="Follow us on Twitter!" />
                        </a>
                    </li>
                    <li>
                        <a href="http://www.facebook.com/scholarslab" class="twitter" title="Join us on Facebook">
                            <img src="images/ico_facebook.png" alt="Join us on Facebook" />
                        </a>
                    </li>
                    <li>
                        <a href="http://www.scholarslab.org/feed" title="rss" class="rss">
                            <img src="images/ico_rss.png" alt="Subscribe to our RSS Feed" />
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

