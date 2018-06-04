<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	$top_banner = get_field('tp_background');

	$top_logo = get_field('tp_logo');

 	$date_start = strtotime(get_field('countdown')); 
	$year = (int)date('Y', $date_start);
	$mounth = date('M', $date_start);
	//var_dump($mounth);
	$day = (int)date('d', $date_start);
	$hour = (int)date('H', $date_start);
	$minut = (int)date('i', $date_start);

	$cf_social_list = get_field('cf_social_list'); // link img
?>


	<div class="wrapper">
		<div class="content">

		<section class="top-banner" style="background:url(<?php echo $top_banner; ?>) center no-repeat;background-size: cover;">
			<div class="top-banner__block">
				<header class="header">
					<div class="container">
						<a href="<?php home_url();?>" class="header__main-logo">
							<i class="icon-Logo_img"></i>
							<img src="<?php echo $top_logo; ?>" alt="" class="header__logo-text">
						</a>
						<div class="header-btns-block">
							<a href="#" class="btn big-btn violet-btn header-btn">Perfomance</a>
							<?php if( is_user_logged_in() ): ?>
								<a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="btn small-btn violet-btn header-btn">Log out</a>
							<?php else: ?>
								<a href="<?php echo wp_login_url( get_permalink() ); ?>" class="btn small-btn violet-btn header-btn">Log in</a>
							<?php endif; ?>
						</div>
						<div class="mobile-menu__icon">
							<span class="mobile-menu__line top"></span>
							<span class="mobile-menu__line middle"></span>
							<span class="mobile-menu__line bottom"></span>
						</div>
					</div>
				</header>

				<div class="top-banner__main">
					<div class="container">
						<h1 class="main-title"><?php echo get_bloginfo( 'description' ); ?></h1>
						<div class="sbc-form">
							<?php echo do_shortcode( '[email-subscribers namefield="no" desc="" group="Public"]' ); ?>
							<a href="<?php the_field('tp_whitepaper'); ?>" target="_blank" class="btn big-btn transparent-btn whitepaper-btn">Whitepaper</a>
						</div>

						<form action="" hidden>
							<div class="top-banner__subscribe-block">
								<input type="email" class="top-banner__input" placeholder="Enter your e-mail" required="required">
								<input type="submit" class="btn big-btn violet-btn subscribe-btn" value="Subscribe">
								<a href="<?php the_field('tp_whitepaper'); ?>" target="_blank" class="btn big-btn transparent-btn whitepaper-btn">Whitepaper</a>
							</div>
						</form>

						<div class="top-banner__timer">
							<div class="timer-title">Exchange Listing</div>
							<div class="timer-wrap">
								<div class="timer" id="timer" data-year="<?php echo $year; ?>" data-mouth="<?php echo $mounth; ?>" data-day="<?php echo $day; ?>" data-hour="<?php echo $hour;?>" data-minut="<?php echo $minut;?>">

									<div class="timer-block">
										<span class="days"></span>
										<span class="timer-text">d</span>
									</div>
									<div class="timer-block">
										<span class="hours"></span>
										<span class="timer-text">h</span>
									</div>
									<div class="timer-block">
										<span class="minutes"></span>
										<span class="timer-text">m</span>
									</div>
									<div class="timer-block">
										<span class="seconds"></span>
										<span class="timer-text">s</span>
									</div>
									
								</div>
							</div>
						</div>
						<a href="#" class="btn big-btn transparent-btn signup-btn">Sign up</a>
					</div>
				</div>
			</div>
		</section>

		<div class="side-menu-wrapper">
			<div class="container">
				<div class="side-menu">

					<div class="side-top-block">
						<div class="icon-close-block">
							<i class="icon-close"></i>
						</div>
					</div>

					<div class="mobile-menu__block">
						<div class="mobile-menu__title">Menu</div>

						<ul class="mobile-menu__list">

							<?php if( is_user_logged_in() ): ?>
								<li class="mobile-menu_item">
									<a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="mobile-menu__link">
										<i class="icon-login-square-arrow-button-outline"></i> Log out
									</a>
								</li>
							<?php else: ?>
								<li class="mobile-menu_item">
									<a href="<?php echo wp_login_url( get_permalink() ); ?>" class="mobile-menu__link">
										<i class="icon-login-square-arrow-button-outline"></i> Log In
									</a>
								</li>
							<?php endif; ?>	

							<li class="mobile-menu_item">
								<a href="#" class="mobile-menu__link">
									<i class="icon-bar-chart"></i> Perfomance
								</a>
							</li>
							<li class="mobile-menu_item">
								<a href="#" class="mobile-menu__link">
									<i class="icon-trophy"></i> Log In
								</a>
							</li>
						</ul>
					</div>

					<div class="mobile-social-block">

						<?php if( $cf_social_list ): ?>						
							<div class="mobile-social-list">

								<?php foreach( $cf_social_list as $item ): ?>
								
									<a target="_blank" href="<?php echo $item['link']; ?>" class="social-item">
										<i class="<?php echo $item['img']; ?>"></i>
									</a>
								
								<?php endforeach; ?>
							
							</div>
						<?php endif; ?>

					</div>

				</div>
			</div>
		</div>