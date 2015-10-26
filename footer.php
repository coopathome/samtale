<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
		<footer id="footer" class="source-org vcard copyright" role="contentinfo">
			  <span class="footer-copyright">
					&copy; <?php
			    $fromYear = 2015;
			    $thisYear = (int)date('Y');
			    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Winkler Co-op
				</span>
				<span class="footer-credit">
					Built by <a href="http://design.coopathome.ca">Co-op@home</a>
				</span>
		</footer>

	</div>

	<?php wp_footer(); ?>

	<!-- jQuery is called via the WordPress-friendly way via functions.php -->

	<!-- this is where we put our custom functions -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-50611226-2', 'auto');
		ga('send', 'pageview');
	</script>

	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,300,300italic' rel='stylesheet' type='text/css'>

	<script async>
	$("h1").each(function() {
		var wordArray = $(this).text().split(" ");
		if (wordArray.length > 1) {
			wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
			wordArray.pop();
			$(this).html(wordArray.join(" "));
		}
		});
	</script>

</body>

</html>
