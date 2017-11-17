<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title('|', true, 'right'); bloginfo( 'name' )?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav>
			<div class="container-nav left-side-nav">
			    <a href="<?php bloginfo('url'); ?>">
				<img class="nav-logo"  src="./assets/Large-Logo.png">
				</a>
			</div>
			<div class="container-nav right-side-nav">

				<a class="nav-item" href="#">
					Work & Play
				</a>
				<a class="nav-item" href="#">
					About & Contact
				</a>
				</ul>
				<img class="nav-illustration" src="./assets/Barbie-Before-Small.png">
			</div>
		</nav>
		<svg width="100%" height="100%" class="bottom-border">
			<line y1="50%" x1="0%" y2="50%" x2="100%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1"/>
			<line y1="0%" x1="0%" y2="100%" x2="0%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1" />
			<line y1="0%" x1="100%" y2="100%" x2="100%" stroke="rgb(133, 91, 53)" fill="rgb(133, 91, 53)" stroke-width="1" />
	</svg>
	</header>