
		</div><!-- content -->
<?php 
$foot_color = get_field('foot_color');
$foot_logo = get_field('foot_logo');
$top_logo_text = get_field('tp_logo'); // and header logo text
$foot_disclaimer = get_field('foot_disclaimer');
$foot_address = get_field('foot_address');

?>	
	<footer class="footer" style="background-color:<?php echo $foot_color; ?>">
		<div class="container">
			<div class="footer-left">
				<a href="<?php home_url();?>" class="footer__main-logo">

					<img src="<?php echo $foot_logo; ?>" alt="" class="header__logo-text">
					<img src="<?php echo $top_logo_text; ?>" alt="" class="header__logo-text">
				</a>
				<div class="footer-address"><?php echo $foot_address; ?></div>
			</div>

			<div class="footer-disclaimer"><?php echo $foot_disclaimer; ?></div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>