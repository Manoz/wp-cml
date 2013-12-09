<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->

<footer id="colophon" role="contentinfo">
    <div class="transparent-line footer"></div>
    <div class="site-info">
        Copyright © 2013 <a href="http://communitymanagerslyon.com/" title="Club des Community Managers de Lyon">Club des Community Managers de Lyon</a>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

<?php if ( ! current_user_can( 'manage_options' ) ) { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46309623-1', 'communitymanagerslyon.com');
  ga('send', 'pageview');

</script>
<?php } ?>

</body>
</html>