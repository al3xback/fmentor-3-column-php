<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>
		Frontend Mentor | 3-Column Preview Card Component | PHP
	</title>

	<!-- Core Meta Data -->
	<meta name="description" content="Frontend Mentor - 3-column preview card component solution." />
	<meta name="keywords" content="Frontend Mentor, 3-column preview card component" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@700&family=Lexend+Deca&display=swap" />

	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<?php
	define('TITLE', '3-column preview card component');
	define('CARD', array(
		'sedans' => array(
			'description' => 'Choose a sedan for its affordability and excellent fuel economy. Ideal for cruising in the city or on your next road trip.',
			'image' => 'images/icons/sedans.svg'
		),
		'suvs' => array(
			'description' => 'Take an SUV for its spacious interior, power, and versatility. Perfect for your next family vacation and off-road adventures.',
			'image' => 'images/icons/suvs.svg'
		),
		'luxury' => array(
			'description' => 'Cruise in the best car brands without the bloated prices. Enjoy the enhanced comfort of a luxury rental and arrive in style.',
			'image' => 'images/icons/luxury.svg'
		)
	));
	?>

	<header>
		<h1 class="sr-only"><?php echo TITLE; ?></h1>
	</header>

	<main>
		<div class="container">
			<div class="cards">
				<?php foreach (CARD as $type => $prop) : ?>
					<div class="card card--<?php echo $type; ?>">
						<img class="card__img" width="64" height="40" src="<?php echo $prop['image']; ?>" alt="" />
						<h2 class="card__title"><?php echo $type; ?></h2>
						<p class="card__desc"><?php echo $prop['description']; ?></p>
						<a href="#" class="card__btn btn btn--primary">Learn More</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>
				Challenge by
				<a href="https://www.frontendmentor.io?ref=challenge" class="btn btn--link" rel="noopener" target="_blank">Frontend Mentor</a>. Coded by
				<a href="https://github.com/al3xback" class="btn btn--link" rel="noopener" target="_blank">al3xback</a>.
			</p>
		</div>
	</footer>
</body>

</html>
