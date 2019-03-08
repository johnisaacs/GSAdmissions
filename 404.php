<?php
/*
 404 Page Not Found Template 
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
				<div id="main" class="col-sm-9 col-sm-push-3">
					<h1>Page Not Found</h1>
					<p>Sorry, but we're not able to find the page you're looking for - try using your back button or visit the <a href="<?php echo home_url()?>">home page</a>.</p>
				</div>
				<div class="sidebar left col-sm-3 col-sm-pull-9">						
					<?php dynamic_sidebar( 'Sidebar' ); ?>
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