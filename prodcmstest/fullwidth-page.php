<?php
/*
Template Name: Fullwidth Page - No Sidebar
*/
?>

<?php get_header(); ?>

		<div id="content" class="landing admissions">
			<div id="inner-wrapper" class="container">
				<div class="row">
					<?php get_template_part( 'banner' ); ?>
				</div>
				<div class="row">
					<?php get_template_part( 'navigation' ); ?>
				</div>				
				<div class="row">	
					<div id="main" class="col-xs-12 fullwidth">							
						<?php get_template_part( 'loop' ); ?>					
					</div>
				</div>
				<div class="row local-footer">
					<div class="col-xs-12">
						<?php dynamic_sidebar( 'Footer' ); ?>
					</div>
				</div>	
			</div>	
		</div>	
	
<?php get_footer(); ?>
 			
</body>
</html>