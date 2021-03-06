<style type="text/css">
	footer {
		display: flex;
		flex-direction: row;
		justify-content: center;
		background: #4d4d4d;
		color: white;
		padding: 15px 0px;
	}
	footer .content {
		width: 1100px;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-around;
	}
	footer .content div ul {
		list-style-type: none;
	}
	footer .content div ul li a{
		text-decoration: none;
		color: white;
	}
	footer .content .req {
		width: 300px;
	}
</style>

<footer>
	<div class="content">
		<?php wp_nav_menu() ?>
		<div class="req">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat volutpat auctor. Morbi iaculis mi turpis. Fusce euismod malesuada cursus.
		</div>
		<div class="socials">
			<a href="#">A</a>
			<a href="#">B</a>
			<a href="#">C</a>
			<a href="#">D</a>
			<a href="#">E</a>
		</div>
	</div>
</footer>