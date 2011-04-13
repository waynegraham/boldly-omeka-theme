
</div><!-- #content -->
</div><!-- wrapper-->

<div id="footer">
  <div style="width; 960px; margin: 0 auto; position: relative">
    <a href="#" id="showHide">Show/Hide Footer Actions</a>
  </div>
  <div id="footerActions">
    <div id="footerActionsInner">
      <div id="twitter">
        <a href="http://twitter.com/scholarslab" class="action">Follow Us!</a>
        <div id="latest">
          <div id="tweet"><div id="twitter_update_list"></div></div>
          <div id="tweetBottom"></div>
        </div><!-- #tweet -->
      </div><!-- #twitter -->
      
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo get_theme_option('Twitter User'); ?>
.json?callback=twitterCallback2&amp;count=<?php echo get_theme_option('Twitter Count'); ?>"></script>

      <div id="quickContact">
        <!-- TODO: contact plugin -->
        <form action="" method="post" id="quickContactForm">
          <div class="leftSide">
            <input type="text" value="your name" id="quickName" name="name" />
            <input type="text" value="your email" id="quickEmail" name="email" />
            <input type="submit" value="Send" id="submitinput" name="submit" />
          </div>
          <div class="rightSide">
            <textarea id="quickComment" name="comment">your message</textarea>
          </div>
        </form>
      </div><!-- #quickContact -->
      </div><!-- #footerWidgets -->
    </div><!-- #footerActionsInner -->
  </div><!-- #footerActions-->
  <div id="footerWidgets">
    <div id="footerWidgetsInner">

      <!-- TODO: MENU; ETC -->
      <div class="boxFooter">
        <h2>About</h2>
        <div class="textwidget">
          <?php echo get_theme_option('Footer Text'); ?>
        </div>
      </div>
  
      <div id="copyright">
        <?php echo get_theme_option('Copyright Text'); ?>
        <div id="site5bottom">
          Proudly powered by <a href="http://www.omeka.org">Omeka</a>
        </div>
      </div>

    </div><!-- #footerWidgetsInner -->
  </div><!-- #footerWidget -->
</div><!-- #footer-->
</body>
</html>
