<head>
	<?php wp_head(); ?>
</head>
<style type="text/css">
	header {
		display: flex;
		flex-direction: row;
		justify-content: center;
		background: #b9b9b9;
	}
	header .content {
		width: 1100px;
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	.menu div ul {
		list-style-type: none;
		display: flex;
		flex-direction: row;
	}
	.menu div ul li a {
		display: block;
		text-decoration: none;
		color: black;
		padding: 15px 10px;
	}
		.menu div ul li a:hover {
			background: #e8e8e8;
		}

	header .content .contacts {
		display: flex;
		flex-direction: row;
		align-items: flex-end;
		justify-content: flex-end;
	}
	header .main {
		display: flex;
		flex-direction: row;
		align-items: center;
	}
</style>
<header>
	<div class="content">
		<div class="contacts">
			<div class="mail-phone">
				8-800-555-35-35
				example@mail.com
			</div>
			<div class="socials">
				<a href="#">A</a>
				<a href="#">B</a>
				<a href="#">C</a>
				<a href="#">D</a>
				<a href="#">E</a>
			</div>
		</div>
		<div class="main">
			<div class="name-logo">
				StudioKiss
			</div>
			<div class="menu">
				<?php wp_nav_menu() ?>
			</div>
		</div>
	</div>
</header>