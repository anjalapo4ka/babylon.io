<?php
/*
Template Name: Landing Page
*/
get_header(); 
// current-fund-section						76
$cf_title = get_field('cf_title');
$cf_list = get_field('cf_list');
$cf_social_list = get_field('cf_social_list'); // link img

// video-section
$vs_video = get_field('vs_video');

// paradigm-section							122
$ps_img = get_field('ps_img');
$ps_title = get_field('ps_title');
$ps_content = get_field('ps_content');

// video-presentation-section 				135
$vp_background = get_field('vp_background');
$vp_title = get_field('vp_title');
$vp_sub_title = get_field('vp_sub_title');
$vp_video_list = get_field('vp_video_list'); // video

// features-section
$fs_title = get_field('fs_title');
$fs_list = get_field('fs_list'); // img  title  content

// as-mentioned-section
$am_title = get_field('am_title');
$am_list = get_field('am_list');

// smart-contract-section					196
$sc_title = get_field('sc_title');
$sc_content = get_field('sc_content');
$sc_img = get_field('sc_img');
$sc_code = get_field('smart_contract_cod');

// timeline-section
$ts_title = get_field('ts_title');

// info-section 							224
$is_background = get_field('is_backgroung');
$is_title = get_field('is_title');
$is_sub_title = get_field('is_sub_title');


// perfomanse-section						232
$pfs_title = get_field('pfs_title');
$pfs_content_top = get_field('pfs_content_top');
$pfs_sub_title = get_field('pfs_sub_title');
$pfs_content = get_field('pfs_content');
$pfs_list = get_field('pfs_list');  // pfs_list{graph_info{name, color}, graph{date, value{val}}}

// historical-comparison-section			267
$hc_color = get_field('hc_color');
$hc_title = get_field('hc_title');

// team-section								336
$team_title = get_field('team_title');
$team_list = get_field('team_list');

// ico-structure-section					366
$isl_title = get_field('isl_title');
$isl_list = get_field('isl_list');
$isl_top_graph = get_field('right_top_graph');
$isl_bot_graph = get_field('right_bottom_graph');

// faq-section
$fq_color = get_field('fq_color');
$fq_title = get_field('fq_title');
$fq_list = get_field('fq_list');

?>

<section class="current-fund-section">
	<div class="fund-section-top">
		<div class="container">
			<div class="fund-title"><?php echo $cf_title; ?></div>

			<?php if( $cf_list ): ?>
				<div class="fund-list">

					<?php foreach( $cf_list as $item ): ?>
						<div class="fund-item">
							<div class="fund-img" style="background-image: url(<?php echo $item['img']; ?>);"></div>

							<div class="fund-text"><?php echo $item['val']; ?>%</div>
						</div>
					<?php endforeach; ?>

				</div>
	        <?php endif; ?>
        </div>
    </div><!-- END .fund-section-top -->

	<div class="fund-section-bottom">
		<div class="container">
	
			<?php if( $cf_social_list ): ?>
				<div class="social-list">
					<?php foreach( $cf_social_list as $item ): ?>
						<a target="_blank" href="<?php echo $item['link']; ?>" class="social-item"><i class="<?php echo $item['img']; ?>"></i></a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

		</div>
	</div><!-- END .fund-section-bottom -->
</section><!-- END .current-fund-section -->


<section class="video-section">
	<div class="container">
		<div class="video-container">
			<?php echo $vs_video; ?>
		</div>
	</div>
</section><!-- END .video-section -->


<section class="paradigm-section">
    <div class="container">
        <div class="paradigm-left">
            <img src="<?php echo $ps_img; ?>" alt="">
        </div>
        <div class="paradigm-right">
            <h2 class="paradigm-title"><?php echo $ps_title; ?></h2>
            <div class="paradigm-text"><?php echo $ps_content; ?></div>
        </div>
    </div>
</section><!-- END .paradigm-section -->


<section class="video-presentation-section" style="background:url(<?php echo $vp_background; ?>) center no-repeat;background-size: cover;">
	<div class="container">
		<h2 class="presentation-title"><?php echo $vp_title; ?></h2>
		<div class="presentation-subtitle"><?php echo $vp_sub_title; ?></div>
		<div class="video-presentation-block">
			<div class="video-presentation-block-title">Video Presentation</div>
			<?php if( $vp_video_list ): ?>
				<div class="video-presentation-list">
					<?php foreach( $vp_video_list as $item ): ?>
						<div class="video-presentation-item">
							<?php echo $item['video']; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section><!-- END .video-presentation-section -->


<section class="features-section">
	<div class="container">
		<h2 class="section-title features-title"><?php echo $fs_title; ?></h2>

		<?php if( $fs_list ): ?>
			<div class="feature-list">
				<?php foreach( $fs_list as $item ): ?>
					<div class="feature-item">
						<div class="feature-item-img" style="background-image:url(<?php echo $item['img']; ?>)"></div>
						<div class="feature-item-title"><?php echo $item['title']; ?></div>
						<div class="features-item-text"><?php echo $item['content']; ?></div>
					</div>
				<?php endforeach; ?>
			</div>
	    <?php endif; ?>

	</div>
</section><!-- END .features-section -->


<section class="as-mentioned-section">
	<div class="container">
		<h2 class="section-title"><?php echo $am_title; ?></h2>

		<?php if( $am_list ): ?>
			<div class="mentioned-slider-block">
				<div class="mentioned-slider-arrow mentioned-slider-prev"><i class="icon-left-arrow"></i></div>
				<div class="mentioned-slider-arrow mentioned-slider-next"><i class="icon-right-arrow"></i></div>

				<div class="js_mentioned-slider">
					<?php foreach( $am_list as $item ): ?>
						<div class="mentioned-item"><img src="<?php echo $item['img']; ?>" alt=""></div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>

	</div>
</section><!-- END .as-mentioned-section -->


<section class="smart-contract-section">
	<div class="container">
		<h2 class="section-title smart-title"><?php echo $sc_title; ?></h2>
		<div class="smart-contract-block">
			<div class="smart-contract-text"><?php echo $sc_content; ?></div>
			<div class="smart-contract-image" style="background:none;">
				<?php
					if ( have_posts() ) :
					while ( have_posts() ) : the_post();

						the_content();

					endwhile;
					endif;
				 ?>
			</div>
		</div>
	</div>
</section><!-- END .smart-contract-section -->


<section class="timeline-section">
	<div class="container">
		<h2 class="section-title smart-title"><?php echo $ts_title; ?></h2>
	</div>
</section><!-- END .timeline-section -->


<section class="info-section" style="background-image:url(<?php echo $is_background; ?>);position: relative;background-size: cover;background-position: 5% 32%;">
	<div class="container">
		<h2 class="info-section__title"><?php echo $is_title; ?></h2>
		<div class="info-section__subtitle"><?php echo $is_sub_title; ?></div>
	</div>
</section><!-- END .info-section -->


<section class="perfomanse-section">
	<div class="container">
		<h2 class="section-title perfomance-title"><?php echo $pfs_title; ?></h2>
		<?php 
		// pfs_list{graph_info{name, color}, graph{date, value{val}}}
		// $isl_top_data[] = ['name' => $key['name'], 'y' => (int)$key['percent'], 'color' => $key['color']];

		$pfs_gruph_array_name = [];
		$data_date = [];
		$data_value = [];
		$count = 0;

		if( $pfs_list ):
			foreach ( $pfs_list as $sub_rep ): 	// 1 повтор

				foreach ( $sub_rep['graph'] as $sub_sub_val ): 	// 4 повтора
						$data_date[] = $sub_sub_val['date'];						
				endforeach;


				foreach ( $sub_rep['graph_info'] as $sub_val ): 	// 2 повтора

					foreach ( $sub_rep['graph'] as $sub_sub_val ): 	// 4 повтора
						$data_value[$count][] = (int)$sub_sub_val['value'][$count]['val'];						
					endforeach;

					$pfs_gruph_array_name[$count] = ['name' => $sub_val['name'], 'data' => $data_value[$count], 'color' => $sub_val['color']];
					$count++;
				endforeach;


			endforeach;
		endif;

		echo "<pre>";
		// var_dump( $pfs_gruph_array_name );
		// var_dump( $data_date );
		echo "</pre>";

		wp_localize_script( 'main-scripts', 'line_graph_array', $pfs_gruph_array_name );
		wp_localize_script( 'main-scripts', 'line_graph_date', $data_date );

		?>
		
		<div class="perfomance-graph-block" >
			<div class="perfomance-graph-title">CRIX vs Babylon AI 3 month</div>
			<div class="perfomance-graph" id="perfomance-graph"></div>
		</div>

		<div class="perfomance-text top"><?php echo $pfs_content_top ?></div>
		<div class="perfomance-title-bottom"><?php echo $pfs_sub_title; ?></div>
		<div class="perfomance-text"><?php echo $pfs_content; ?></div>
	</div>
</section><!-- END .perfomanse-section -->


<section class="historical-comparison-section" style="background-color:<?php echo $hc_color; ?>">
    <div class="container">
        <h2 class="section-title comparison-title"><?php echo $hc_title; ?></h2>
        <div class="comparison-block">
            <div class="comparison-left">
			<div class="comparison-input-block investment">
			<div class="comparison-input-title">Initial Investment:</div>
			<input type="hidden" class="investment-slider" id="investment-slider" value="0" />
			</div>
			<div class="comparison-input-block">
			<div class="comparison-input-title">Purchase Date:</div>
			<input type="hidden" class="purchase-slider" id="purchase-slider" value="0" />
			</div>
			</div>
            <div class="comparison-right">
                <div class="comparison-table">
                    <div class="comparison-table-head">
                        <div class="comparison-th">Coin</div>
                        <div class="comparison-th">Value</div>
                        <div class="comparison-th">%</div>
                    </div>
                    <div class="comparison-table-row">
                        <div class="comparison-td"><span class="coin-pic"></span>C20</div>
                        <div class="comparison-td">$666</div>
                        <div class="comparison-td">2677</div>
                    </div>
                    <div class="comparison-table-row">
                        <div class="comparison-td"><span class="coin-pic"></span>C20</div>
                        <div class="comparison-td">$666</div>
                        <div class="comparison-td">2677</div>
                    </div>
                </div>
            </div>
			<div class="comparison-mobile-slider-block">
			<div class="comparison-input-block investment">
			<div class="comparison-input-title">Initial Investment:</div>
			<input type="hidden" class="investment-slider" id="investment-slider-mobile" value="0" />
			</div>
			<div class="comparison-input-block">
			<div class="comparison-input-title">Purchase Date:</div>
			<input type="hidden" class="purchase-slider" id="purchase-slider-mobile" value="0" />
			</div>
			</div>
        </div>
    </div>
</section><!-- END .historical-comparison-section -->


<section class="team-section">
	<div class="container">
		<h2 class="section-title team-title"><?php echo $team_title; ?></h2>
		<div class="team-slider-block">

			<div class="team-slider-arrow team-slider-prev">
			<i class="icon-left-arrow"></i>
			</div>
			<div class="team-slider-arrow team-slider-next">
			<i class="icon-right-arrow"></i>
			</div>

			<?php if( $team_list ): ?>
			<div class="team-list js_team-slider">
				<?php foreach( $team_list as $item ): ?>
					<div class="team-item">
						<div class="team-image" style="background-image:url(<?php echo $item['img']; ?>)"></div>
						<div class="team-name"><?php echo $item['name']; ?></div>
						<div class="team-text"><?php echo ab_wp_custom_excerpt(135, $item['text']); ?></div>
					</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>

		</div>

	</div>
</section><!-- END .team-section -->


<section class="ico-structure-section">
	<div class="container">
		<h2 class="section-title structure-title"><?php echo $isl_title; ?></h2>
		<div class="ico-structure-block">

			<?php if( $isl_list ): ?>
				<div class="ico-structure-left">
					<?php foreach( $isl_list as $item ): ?>
						<div class="ico-strucrure__text-block"><?php echo $item['text']; ?></div>
					<?php endforeach; ?>
				</div><!-- END .ico-structure-left -->
			<?php endif; ?>

			<div class="ico-structure-right">
				<?php 

				$isl_top_data = [];
				$isl_bot_data = [];

				foreach ( $isl_top_graph as $key ) {
					if ( $key['color'] ) {
						$isl_top_data[] = ['name' => $key['name'], 'y' => (int)$key['percent'], 'color' => $key['color']];
					} else {
						$isl_top_data[] = ['name' => $key['name'], 'y' => (int)$key['percent']];
					}
				}

				foreach ( $isl_bot_graph as $key ) {
					if ( $key['color'] ) {
						$isl_bot_data[] = ['name' => $key['name'], 'y' => (int)$key['percent'], 'color' => $key['color']];
					} else {
						$isl_bot_data[] = ['name' => $key['name'], 'y' => (int)$key['percent']];
					}
				}

				wp_localize_script( 'main-scripts', 'top_graph', $isl_top_data );
				wp_localize_script( 'main-scripts', 'bot_graph', $isl_bot_data );

				?>
				<div class="ico-structure__top-graph-block">
					<div class="ico-structure__graph-title">ICO Fund Utilization</div>
					<div class="ico-structure-top-graph" id="ico-structure-top-graph"></div>
				</div>
				<div class="ico-structure__bottom-graph-block">
					<div class="ico-structure__graph-title">Token Distribution</div>
					<div class="ico-structure-bottom-graph" id="ico-structure-bottom-graph"></div>
				</div>
			</div><!-- END .ico-structure-rigth -->

		</div>
	</div>
</section><!-- END .ico-structure-section -->


<?php if( $fq_list ): ?>
<section class="faq-section" style="background-color:<?php echo $fq_color; ?>">
	<div class="container">
		<h2 class="section-title faq-title"><?php echo $fq_title; ?></h2>

		<div class="faq-list">
			<?php foreach( $fq_list as $item ): ?>
				<div class="faq-item">
					<div class="faq-item-title"><?php echo $item['title']; ?></div>
					<div class="faq-text"><?php echo $item['text']; ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section><!-- END .faq-section -->
<?php endif; ?>

<?php 
get_footer(); 
?>