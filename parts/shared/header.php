
<header>
	<div class="inner">
		<h1 class="siteName"><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
		<p class="visuallyhidden"><?php bloginfo( 'description' ); ?></p>
		<?php //get_search_form(); ?>

		<nav>
			<div id="nav">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
		</nav>
	</div><!-- end .inner -->
</header>
<div class="inner">