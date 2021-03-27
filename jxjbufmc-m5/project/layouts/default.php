<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="project/media/css/style.css">
	<title>Page</title>
</head>
<body>
	<header class="page-header">
		<span class="header-logo"><a href="/home">Logo</a></span>
		<ul class="header-menu">
			<li><a href="/home">Home</a></li>
			<li><a href="/contacts">Contacts</a></li>
			<li><a href="/about">About</a></li>
		</ul>
	</header>

	<div class="wrap">
		<?php include $view; ?>
	</div>

	<footer class="page-footer">
		<a href="tel:+79217708973">+7 (921) 770 89-73</a>
		<ul class="footer-menu">
			<li><a href="/home">Home</a></li>
			<li><a href="/contacts">Contacts</a></li>
			<li><a href="/about">About</a></li>
		</ul>
		<span class="copyright">Copyright © 2001-2021 Landing page</span>
	</footer>

</body>
</html>