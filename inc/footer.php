		<footer>
			<div class="row">
				<div class="large-4 columns">
           			<ul>
            			<li>Copyright &copy;<?php print(Date("Y")); ?> PVAPPS</li>
            		</ul>	
            	</div>
            	
            	<div class="large-8 columns">	
            		<ul>
                		<li><a href="privacy" title="Privacy &amp; Cookies" rel="nofollow">Privacy &amp; Cookies</a></li>
                		<li><a href="accessibility" title="Accessibility" rel="nofollow">Accessibility</a></li>
						<li><a href="sitemap" title="Site Map" accesskey="7">Site Map</a></li>
            		</ul>
            	</div>
            </div><!--/row-->
        </footer>
        
        <div id="no-script" class="no-jsmsg">
        <p>You currently have <a href="http://en.wikipedia.org/wiki/Javascript" target="_blank" rel="nofollow">JavaScript</a> disabled. This site requires JavaScript to be enabled. Some functions of the site may not be usable or the site may not look correct until you enable JavaScript. You can enable JavaScript by following <a href="http://www.google.com/support/bin/answer.py?answer=23852" target="_blank" rel="nofollow">this</a> tutorial. Once JavaScript is enabled, this message will be removed.</p>
    	</div>
        
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
    	<script>
      		$(document).foundation();
    	</script>        
		<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
		<script src="js/vendor/cookieControl-5.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">//<![CDATA[
  			cookieControl({
  			
  			//CHANGE THIS
      		introText:'<p>Cookies are NOT used on this website for storing and accessing information on your computer - only for tracking website performance and statistics</p>',
      		fullText:'<p>We use some non-essential cookies to anonymously track visitors or enhance your experience of the site.</p><p>To control third party cookies, you can adjust your browser settings.</p><p>By using our site you accept the terms of our <a href="/privacy.php">Privacy Policy</a>.</p>',
      		position:'left', // left or right
      		shape:'triangle', // triangle or diamond
      		theme:'light', // light or dark
      		startOpen:false,
      		autoHide:6000,
      		subdomains:true,
      		protectedCookies: [], //list the cookies you do not want deleted ['analytics', 'twitter']
      		consentModel:'information_only',
      		onAccept:function(){ccAddAnalytics()},
      		onReady:function(){},
      		onCookiesAllowed:function(){ccAddAnalytics()},
      		onCookiesNotAllowed:function(){},
      		countries:'' // Or supply a list ['United Kingdom', 'Greece']
      		});

      		function ccAddAnalytics() {
        		jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
        		// CHANGE THIS
         		var GATracker = _gat._createTracker('UA-xxxxxxxx-1');
          		GATracker._trackPageview();
        		});
      		}		
   			//]]>
		</script><!--/Cookie Control-->       
    </body>
</html>