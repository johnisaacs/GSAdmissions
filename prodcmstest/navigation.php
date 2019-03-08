<nav>
	<!-- mobile menu -->
	<div class="navbar-header">					 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dept-subnav">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>					  
	</div>
	<div class="collapse navbar-collapse" id="dept-subnav">
		<?php wp_nav_menu(array('menu' => 'Primary Navigation', 'theme_location' => 'local_navigation', 'menu_class' => 'nav nav-justified horizontal admissions', 'menu_id' => 'home-menu' )); ?> 
	</div>
</nav>