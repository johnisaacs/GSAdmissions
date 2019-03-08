<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

		<div id="content" class="landing admissions horizontal">
			<div id="inner-wrapper" class="container">
				<div class="row">					
					<?php get_template_part( 'banner' ); ?>	
					<nav>
						<div class="navbar-header">					 
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dept-subnav">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>					  
						</div>
					</nav>					
				</div>
				<div class="row">
					<div style="padding:0;" class="col-xs-12">
							<a href="<?php echo home_url()?>"><img id="home-banner-image" src="<?php header_image(); ?>" class="img-responsive" alt="<?php echo get_bloginfo('name')?>" /></a>	
					</div>
				</div>
				<div class="row">
					<div style="padding:0;" class="col-xs-12">
						<nav>						
						<div class="collapse navbar-collapse" id="dept-subnav">
							<?php wp_nav_menu(array('menu' => 'Primary Navigation', 'theme_location' => 'local_navigation', 'menu_class' => 'nav nav-justified horizontal admissions', 'menu_id' => 'home-menu' )); ?> 
						</div>
					</nav>
					</div>					
				</div>			
				
				<div class="row mar15 widgets">
					<div class="col-xs-12">
						<?php dynamic_sidebar( 'Home Row One' ); ?>
					</div>				
				</div>
			
				<div class="row mar15 widgets">
					<div class="col-xs-12">
						<?php dynamic_sidebar( 'Home Row Two' ); ?>
					</div>				
				</div>
				
				<div class="row mar15 widgets">
					<div class="col-xs-12">
						<?php dynamic_sidebar( 'Home Row Three' ); ?>
					</div>				
				</div>
				<div class="row mar15 widgets">
					<div class="col-xs-12">
						<?php dynamic_sidebar( 'Home Row Four' ); ?>
					</div>				
				</div>
				<div class="row local-footer">
					<div class="col-xs-12">
						<?php dynamic_sidebar( 'Footer' ); ?>
					</div>
				</div>		
					
			</div>	<!-- end #inner-wrapper -->
		</div>	<!-- end #content .landing -->
	
<?php get_footer(); ?>
 			
</body>
</html>