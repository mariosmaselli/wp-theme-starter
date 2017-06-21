		<script>

	        window.APP = window.APP || {};
	        APP.VARS = {};
	        APP.BASE_URL = '<?php echo site_url(); ?>';
	        APP.THEME_URL = '<?php echo get_stylesheet_directory_uri(); ?>';
	        //APP.AJAX_URL = '{{ function('admin_url', 'admin-ajax.php') }}';

        </script>

        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/build/app.js"></script>
        
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', '', 'auto');
		  ga('send', 'pageview');

		 var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', '']);
			  _gaq.push(['_trackPageview']);

			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

		</script>

		<?php wp_footer(); ?>
		
    </body>
</html>