<?php
 /**
 * The template for displaying the footer.
 *
 *
 * @package Customizr
 * @since Customizr 3.0
 */
  	do_action( '__before_footer' ); ?>
  		<!-- FOOTER -->
  		<footer id="footer" class="<?php echo tc__f('tc_footer_classes', '') ?>" style="background-color:#A0CFEB; border:none;">
			<div class="logoo" style="text-align:center;">
				<a href="http://www.eurelien.fr"><img class="partner" src="wp-content/uploads/2016/03/logoel.png" alt="Conseil Départemental" style="width:8%; margin-right:1%; margin-top:1%;"></a>
				<a href="http://www.ars.centre-val-de-loire.sante.fr"><img class="partner" src="wp-content/uploads/2016/03/arscentre.gif" alt="ARS Centre" style="width:6%; margin-top:1%;"></a>
				<a href="http://www.ch-dreux.fr"><img class="partner" src="wp-content/uploads/2016/03/hopitaldreux.png" alt="Hôpital Dreux" style="width:7%; margin-left:1%; margin-top:1%;"></a>
			</div>
  		 	<?php do_action( '__footer' ); // hook of footer widget and colophon?>
            
  		</footer>
    </div><!-- //#tc-page-wrapper -->
		<?php
    do_action( '__after_page_wrap' );
		wp_footer(); //do not remove, used by the theme and many plugins
	  do_action( '__after_footer' ); ?>
	</body>
	<?php do_action( '__after_body' ); ?>
</html>
