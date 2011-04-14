<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */


?>

<?php
    head(array('bodyid' => 'home'));
?>
<div id="slider">

<?php 

    random_items(5);
?>

<!-- <div style="border:1px solid #ddd; text-align:center; padding:150px 100px 0; height:219px; font-size:14px;">
                     This is the slider. In order to have items here you need to create a page in which to insert the images, simply one after another, setting up the link to point at ( if needed ) and text captions in the Title field. Then select the page as the "slider page" in the Theme Options Page. Make sure your images are 960px x 370px.
                 </div>
     
-->
</div><!-- #slider -->
<div style="width:960px; margin:0 auto; background:url(<?php echo img('bk_shadow_slider.png'); ?>) 0 0 no-repeat; height:50px;"></div>
<div id="blurb">
    <p>TODO:</p>
</div><!-- #blurb -->

<div id="homeBoxes" class="clearfix">
    <div class="homeBox">
        <h2>Box 1</h2>
        <p><img class="alignnone" src="" width="274" height="101" /></p>
        <p>text</p>
        <p><a href="">Link to item</a></p>
    </div>

     <div class="homeBox">
        <h2>Box 1</h2>
        <p><img class="alignnone" src="" width="274" height="101" /></p>
        <p>text</p>
        <p><a href="">Link to item</a></p>
    </div>

     <div class="homeBox last">
        <h2>Box 1</h2>
        <p><img class="alignnone" src="" width="274" height="101" /></p>
        <p>text</p>
        <p><a href="">Link to item</a></p>
    </div>

</div> <!-- #homeBoxe -->

</div> <!-- #content -->
<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({
					effect:'random', //Specify sets like: 'fold,fade,sliceDown'
					slices:15,
					animSpeed:500,
					pauseTime:3000,
					startSlide:0, //Set starting Slide (0 index)
					directionNav:true, //Next & Prev
					directionNavHide:true, //Only show on hover
					controlNav:true, //1,2,3...
					controlNavThumbs:false, //Use thumbnails for Control Nav
					controlNavThumbsFromRel:false, //Use image rel for thumbs
					controlNavThumbsSearch: '.jpg', //Replace this with...
					controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
					keyboardNav:true, //Use left & right arrows
					pauseOnHover:true, //Stop animation while hovering
					manualAdvance:false, //Force manual transitions
					captionOpacity:0.8, //Universal caption opacity
					beforeChange: function(){},
					afterChange: function(){},
					slideshowEnd: function(){} //Triggers after all slides have been shown
				});
			});
			</script>



<?php foot();

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */

