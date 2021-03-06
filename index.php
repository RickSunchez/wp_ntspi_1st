<style type="text/css">
	* {
		margin: 0px;
		padding: 0px;
		font-family: "Arial Black", Gadget, sans-serif;
	}
	body {
		display: flex;
		flex-direction: column;
		width: 100%;
		height: 100vh;
	}
	main {
		flex: 1;
	}
</style>
<?php get_header(); ?>
<main>
	<div class="content">
		<?php the_content(); ?>
	</div>
</main>
<?php get_footer(); ?>