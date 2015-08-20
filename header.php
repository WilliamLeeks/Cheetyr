<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title><?php echo $title; ?></title>
<meta name="description" content="A handy collection of cheat sheets for designers and developers.">

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width, maximum-scale=1.0">

<link rel="stylesheet" href="../css/style.css">

<!-- Modernizr -->
<script src="../js/modernizr.js"></script>

<!-- TypeKit -->
<script src="//use.typekit.net/eti8fjg.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</head>
<body>
	<div class="sidebar">
		<button class="js--nav-toggle">
			<img src="../img/nav-toggle-line.png" class="nav-toggle-line nav-toggle_top-line" alt="Horizontal line">
			<img src="../img/nav-toggle-line.png" class="nav-toggle-line nav-toggle_middle-line" alt="Horizontal line">
			<img src="../img/nav-toggle-line.png" class="nav-toggle-line nav-toggle_bottom-line" alt="Horizontal line">
		</button>
		<header>
			<a href="/home">
				<?php if($pageTitle === "home") {
					echo "<img src='../img/cheetyr-logo.svg' class='brand brand--animated' alt='Cheetyr logo'>";
				} else {
					echo "<img src='../img/cheetyr-logo.svg' class='brand' alt='Cheetyr logo'>";
				} ?>
			</a>
		</header>
		<?php include 'nav.php'; ?>
		<footer>
			<p>Follow <a href="http://twitter.com/cheetyr">@cheetyr</a></p>
			<p>Made by <a href="http://williamleeks.com">William Leeks</a></p>
		</footer>
	</div>