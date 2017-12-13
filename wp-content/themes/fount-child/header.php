<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php echo get_bloginfo('name'); if (is_front_page()){if (get_bloginfo('description')!="") {echo ' | '.get_bloginfo('description');}}else {wp_title('|');} ?></title>
  <?php
		$count = wp_count_posts('post');
		if ($count->publish > 0)
		{
		  echo "\n\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"". get_bloginfo('name') ." Feed\" href=\"". home_url() ."/feed/\">\n";
		}
		global $prk_fount_options;
		global $prk_retina_device;
		global $prk_translations;
		prk_fount_header();
		if ($prk_fount_options['buttons_inner_shadow']=="1" && $prk_fount_options['buttons_style']=="solid_buttons")
			$buttons_class=" shadowed_buttons";
		else
			$buttons_class="";
		wp_head();
	?>
</head>
<body <?php body_class('fount_theme'); ?>>
	<div id="body_hider" class="hider_flag"></div>
		<div id="body_hider_full" class="hider_flag"></div>
	<div id="fount_wrapper" class="<?php echo $prk_fount_options['thumbs_roll_style'].' '.$prk_fount_options['header_layout'].' '.$prk_fount_options['buttons_style'];echo $buttons_class; ?>">
		<div id="fount_to_top" class="prk_radius" data-color="<?php echo $prk_fount_options['active_color']; ?>">
	  		<i class="fount_fa-arrow-up"></i>
	  	</div>
		<div id="prk_pint" data-media="" data-desc=""></div>
		<div id="prk_mega_wrap" class="ultra_wrapper" data-maxw="<?php echo $prk_fount_options['custom_width']; ?>">
			<div id="fount_ajax_back"></div>
		<?php
			if ($prk_fount_options['right_bar']=="1")
			{
				echo '<div id="prk_hidden_bar" class="small-12">';
				echo '<div id="prk_hidden_bar_scroller">';
				echo '<div id="prk_hidden_bar_inner" class="'.$prk_fount_options['right_bar_align'].'">';
				$hidden_sidebar_id='sidebar-hidden';
	            if (get_field('hidden_sidebar_id')!="")
	                $hidden_sidebar_id=get_field('hidden_sidebar_id');
	            if (isset($prk_fount_options['fount_active_skin']) && (is_single() || $prk_fount_options['fount_active_skin']=="fount_multipage_skin" || $prk_fount_options['fount_active_skin']=="fount_shop_skin"))
				{
					$hidden_sidebar_id=$prk_fount_options['fount_current_sidebar'];
				}
				if (function_exists('dynamic_sidebar') && dynamic_sidebar($hidden_sidebar_id)) :
				endif;
				echo '<div class="clearfix"></div>';
				echo '</div></div>';
				if ($prk_fount_options['right_bar_footer_id']!="")
				{
					$right_bar_footer_id=$prk_fount_options['right_bar_footer_id'];
					if (is_active_sidebar($right_bar_footer_id))
					{
						echo '<div id="hidden_bar_footer" class="small-12 '.$prk_fount_options['right_bar_align'].'">';
						if (function_exists('dynamic_sidebar') && dynamic_sidebar($right_bar_footer_id)) :
						endif;
						echo '<div class="clearfix"></div></div>';
					}
				}
				echo '</div>';
			}
			if ($prk_fount_options['menu_hide_flag']=="1")
			{
			    $offsetter="0";
			}
			else
			{
			    $offsetter=$prk_fount_options['collapsed_menu_vertical'];
			}
		?>
		<div id="wrap" class="container columns zero_side_pad centered" role="document">
			<div id="prk_responsive_menu" class="classic_menu columns small-12" data-height="<?php echo $prk_fount_options['menu_vertical']; ?>" data-collapsed="<?php echo $prk_fount_options['collapsed_menu_vertical']; ?>" data-offsetter="<?php echo $offsetter; ?>" data-opacity="<?php echo $prk_fount_options['header_opacity']; ?>" data-default="<?php echo $prk_fount_options['header_default_opacity']; ?>">
				<?php
					if ($prk_fount_options['header_layout']=="fount_logo_above") {
						?>
						<div id="prk_logos">
							<a href="<?php echo home_url('/'); ?>" class="regular_anchor_menu">
								<div id="fount_logo_holder">
								<?php
									echo prk_output_before_logo($prk_retina_device);
									echo prk_output_after_logo($prk_retina_device);
								?>
								</div>
							</a>
						</div>
				  	<?php
				}
				?>
				<div id="prk_responsive_menu_inner" class="small-12"<?php if ($prk_fount_options['header_layout']=="fount_logo_above") {echo ' data-0-start="position:absolute;" data-0-top="position:fixed;"';} ?>>
					<div id="prk_menu_els" class="columns small-12 prk_inner_block small-centered">
						<?php
							if ($prk_fount_options['header_layout']!="fount_logo_above") {
								?>
								<div id="prk_logos">
									<a href="<?php echo home_url('/'); ?>" class="regular_anchor_menu">
										<div id="fount_logo_holder">
										<?php
											echo prk_output_before_logo($prk_retina_device);
											echo prk_output_after_logo($prk_retina_device);
										?>
										</div>
									</a>
								</div>
						  	<?php
						}
						if ($prk_fount_options['top_search']=="1") {
						  $output='<div id="searchform_top" class="top_sform_wrapper" data-url="'.prk_clean_url().'">';
							$output.='<form role="search" method="get" class="form-search" action="'.home_url('/').'">';
							  $output.='<div class="sform_wrapper">';
								$output.='<input type="text" value="" name="s" id="fount_search_top" class="search-query" placeholder="'.$prk_translations['search_tip_text'].'" />';
								$output.='</div>';
							  $output.='</form>';
							  $output.='<div id="top_form_close" class="fount_fa-times"></div>';
							$output.='</div>';
							$output.='<div id="top_form_hider"></div>';
						  echo $output;
						}
					  	$menu_position_class="";
					  	if ($prk_fount_options['show_extra_nets']=="0" && $prk_fount_options['top_search']=="0" && $prk_fount_options['right_bar']=="0") {
					  		$menu_position_class=' class="unpad_right"';
					  	}
				    ?>
					<div id="menu_section" data-color="<?php echo $prk_fount_options['menu_active_color']; ?>"<?php echo $menu_position_class; ?>>
						<?php
							$trigger_class="";
							if (get_field('dots_navigation')!="1")
							{
								?>
								<nav id="nav-main" role="navigation">
									<div class="nav-wrap header_font">
										<?php
											if (has_nav_menu('prk_main_navigation'))
											{
												?>
											  	<div id="fount_left_floater" class="left_floated">
												  	<div id="prk_menu_left_trigger" class="left_floated" data-color="<?php echo $prk_fount_options['menu_active_color']; ?>">
														<div class="prk_blocks">
															<div class="prk_menu_block prk_bl1"></div>
											                <div class="prk_menu_block prk_bl2"></div>
											                <div class="prk_menu_block prk_bl3"></div>
														</div>
												  	</div>
											  	</div>
											  	<?php
												if(is_404() || (isset($post->ID) && (get_post_meta($post->ID,'top_menu',true)=="" || get_post_meta($post->ID,'top_menu',true)=="null")))
												{
													if (isset($prk_fount_options['fount_active_skin']) && (is_single() || $prk_fount_options['fount_active_skin']=="fount_multipage_skin" || $prk_fount_options['fount_active_skin']=="fount_shop_skin"))
													{
														if ($prk_fount_options['fount_current_menu']!="fount_no_menu")
														{
														wp_nav_menu(array(
															'menu' => $prk_fount_options['fount_current_menu'],
															'menu_class' => 'sf-menu sf-vertical mini-site-header',
															'link_after' => '',
															'walker' => new rc_scm_walker));
														}
														else
														{
															$trigger_class=" fount_alone";
														}
													}
													else
													{
														wp_nav_menu(array(
															'theme_location' => 'prk_main_navigation',
															'menu_class' => 'sf-menu sf-vertical mini-site-header',
															'link_after' => '',
															'walker' => new rc_scm_walker));
													}
											  	}
											  	else
											  	{
											  		if (!isset($post->ID))
											  		{
											  			wp_nav_menu(array(
															'theme_location' => 'prk_main_navigation',
															'menu_class' => 'sf-menu sf-vertical mini-site-header',
															'link_after' => '',
															'walker' => new rc_scm_walker));
											  		}
											  		else
											  		{
												  		if (get_post_meta($post->ID,'top_menu',true)!="fount_no_menu")
												  		{
												  			wp_nav_menu(array(
													  			'menu' => get_post_meta( $post->ID, 'top_menu', true ),
													  			'menu_class' => 'sf-menu sf-vertical mini-site-header',
													  			'link_after' => '',
													  			'walker' => new rc_scm_walker));
												  		}
												  		else
												  		{
												  			$trigger_class=" fount_alone";
												  		}
												  	}
											  	}
											}
										?>
										<div class="utility-nav"><?php
												wp_nav_menu(array(
												'theme_location' => 'util_nav',
												'menu_class' => 'sf-menu sf-vertical mini-site-header',
												'link_after' => '',
												'walker' => new rc_scm_walker));
											?></div>

								   </div>
								</nav>
								<?php
							}
							if ($prk_fount_options['show_extra_nets']=="1" || $prk_fount_options['top_search']=="1" || $prk_fount_options['right_bar']=="1")
							{
								echo '<div id="fount_top_floater">';
							}
							if ($prk_fount_options['show_extra_nets']=="1") {
								echo output_mini_nets();
							}
							if ($prk_fount_options['top_search']=="1")
							{
								echo '<div id="prk_menu_loupe" class="fount_fa-search left_floated" data-color="'.$prk_fount_options['menu_active_color'].'"></div>';
							}
							if ($prk_fount_options['right_bar']=="1")
							{
								$output='<div id="prk_menu_right_trigger" class="left_floated'.$trigger_class.'" data-color="'.$prk_fount_options['menu_active_color'].'">';
								$output.='<div class="prk_blocks">';
								$output.='<div class="prk_menu_block prk_bl1"></div>';
								$output.='<div class="prk_menu_block prk_bl2"></div>';
								$output.='<div class="prk_menu_block prk_bl3"></div>';
								$output.='</div>';
								$output.='</div>';
								echo $output;
							}
							if ($prk_fount_options['show_extra_nets']=="1" || $prk_fount_options['top_search']=="1" || $prk_fount_options['right_bar']=="1")
							{
								echo '</div>';
							}
						?>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<?php
				if (get_field('dots_navigation')=="1")
				{
					?>
					<nav id="dotted_navigation" role="navigation" class="nav-wrap header_font">
						<div id="menu_section">
							<?php
							  	$trigger_class="";
								if (has_nav_menu('prk_main_navigation'))
								{
									if(is_404() || (isset($post->ID) && get_post_meta($post->ID,'top_menu',true)=="") || (isset($prk_fount_options['fount_active_skin']) && ($prk_fount_options['fount_active_skin']=="fount_multipage_skin" || $prk_fount_options['fount_active_skin']=="fount_shop_skin" )))
									{
										if (isset($prk_fount_options['fount_active_skin']) && (is_single() || $prk_fount_options['fount_active_skin']=="fount_multipage_skin" || $prk_fount_options['fount_active_skin']=="fount_shop_skin"))
										{
											if ($prk_fount_options['fount_current_menu']!="fount_no_menu")
											{
											wp_nav_menu(array(
												'menu' => $prk_fount_options['fount_current_menu'],
												'menu_class' => 'mini-site-header',
												'link_after' => '',
												'walker' => new rc_scm_walker));
											}
											else
											{
												$trigger_class=" fount_alone";
											}
										}
										else
										{
											wp_nav_menu(array(
												'theme_location' => 'prk_main_navigation',
												'menu_class' => 'mini-site-header',
												'link_after' => '',
												'walker' => new rc_scm_walker));
										}
								  	}
								  	else
								  	{
								  		if (!isset($post->ID))
								  		{
								  			wp_nav_menu(array(
												'theme_location' => 'prk_main_navigation',
												'menu_class' => 'mini-site-header',
												'link_after' => '',
												'walker' => new rc_scm_walker));
								  		}
								  		else
								  		{
									  		if (get_post_meta($post->ID,'top_menu',true)!="fount_no_menu")
									  		{
									  			wp_nav_menu(array(
										  			'menu' => get_post_meta( $post->ID, 'top_menu', true ),
										  			'menu_class' => 'mini-site-header',
										  			'link_after' => '',
										  			'walker' => new rc_scm_walker));
									  		}
									  		else
									  		{
									  			$trigger_class=" fount_alone";
									  		}
									  	}
								  	}
								}
							?>
						</div>
					</nav>
					<?php
				}
			?>
			<div id="fount_ajax_wrapper">
				<div id="fount_ajax_holder"></div>
			</div>
			<div id="top_bar_wrapper">
				<div id="top_bar_nav">
					<div class="squared_button left_floated">
					  <div id="fount_left" class="fount_left_figure left_floated small_headings_color">
					  	<div class="inner_mover">
						    <div class="mover">
						      <i class="fount_fa-arrow-left"></i>
						      <i class="fount_fa-arrow-left second"></i>
						    </div>
						</div>
					  </div>
					</div>
					<div id="squared_close" class="squared_button left_floated">
						<div id="fount_close" class="fount_close_figure left_floated small_headings_color">
					  		<i class="fount_fa-times"></i>
						</div>
					</div>
					<div class="squared_button left_floated">
					  <div id="fount_right" class="fount_right_figure left_floated small_headings_color">
					    <div class="inner_mover">
					    	<div class="mover">
					    		<i class="fount_fa-arrow-right"></i>
					    		<i class="fount_fa-arrow-right second"></i>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		<div id="prk_ajax_container" data-ajax_path="<?php echo get_template_directory_uri() ?>/inc/ajax-handler.php" data-retina="<?php echo $prk_retina_device; ?>">