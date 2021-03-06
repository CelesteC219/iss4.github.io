<?php
/**
 * The template part for header
 *
 * @package Moving Company Lite 
 * @subpackage moving-company-lite
 * @since moving-company-lite 1.0
 */
?>

<div class="top-bar <?php if( get_theme_mod( 'moving_company_lite_sticky_header') != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4">
		        <div class="logo">
		          	<?php if ( has_custom_logo() ) : ?>
		              	<div class="site-logo"><?php the_custom_logo(); ?></div>
		            <?php endif; ?>
		            <?php $blog_info = get_bloginfo( 'name' ); ?>
		              	<?php if ( ! empty( $blog_info ) ) : ?>
		                <?php if ( is_front_page() && is_home() ) : ?>
		                	<?php if( get_theme_mod('moving_company_lite_logo_title_hide_show',true) != ''){ ?>
		                  		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                  	<?php } ?>
		                <?php else : ?>
		                	<?php if( get_theme_mod('moving_company_lite_logo_title_hide_show',true) != ''){ ?>
		                  		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		                  	<?php } ?>
		                <?php endif; ?>
		              	<?php endif; ?>
		              	<?php
			                $description = get_bloginfo( 'description', 'display' );
			                if ( $description || is_customize_preview() ) :
		              	?>
		              	<?php if( get_theme_mod('moving_company_lite_tagline_hide_show',true) != ''){ ?>
			              	<p class="site-description">
			                	<?php echo $description; ?>
			              	</p>
			            <?php } ?>
		            <?php endif; ?>
		        </div>
	      	</div>
	      	<div class="<?php if(get_theme_mod('moving_company_lite_header_search',true)) { ?>col-lg-5 col-md-4 col-3" <?php } else { ?>col-lg-6 col-md-6" <?php } ?> >
	        	<?php get_template_part( 'template-parts/header/navigation' ); ?>
	      	</div>
	      	<?php if( get_theme_mod( 'moving_company_lite_header_search',true) != '') { ?>
	        <div class="col-lg-1 col-md-1 col-3">
	          	<div class="search-box">
	            	<button type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></button>
	          	</div>
	        </div>
	      	<?php }?>
			<div class="col-lg-3 col-md-3 col-6 call-info">
				<div class="row">
				    <?php if( get_theme_mod( 'moving_company_lite_calling_text') != '' || get_theme_mod( 'moving_company_lite_phone_number') != '') { ?>
				    	<div class="col-lg-3 col-md-3 col-3">
				    		<i class="<?php echo esc_attr(get_theme_mod('moving_company_lite_phone_icon','fas fa-phone')); ?>"></i>
				    	</div>
				    	<div class="col-lg-9 col-md-9 col-9">
			    			<h6><?php echo esc_html(get_theme_mod('moving_company_lite_calling_text',''));?></h6>
			    			<p><?php echo esc_html(get_theme_mod('moving_company_lite_phone_number',''));?></p>
				    	</div>
	        		<?php }?>
        		</div>
		    </div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		    <div class="modal-dialog" role="document">
		      <div class="modal-body">
		        <div class="serach_inner">
		          <?php get_search_form(); ?>
		        </div>
		      </div>
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    </div>
		</div>
	</div>
</div>