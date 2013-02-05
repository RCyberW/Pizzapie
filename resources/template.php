<!DOCTYPE HTML>
<html>
<head>
	<title>Template</title>
	<meta name="description" content="Template">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="js/jquery.1.8.2.min.js"></script>
</head>
<body>
<div id="root_container">

<!--- Site Header --->
<header>
	<div class="banner">Yo, this is a banner</div>
	<input id="search_bar" type="text" value="Search..."
						onfocus="$('#search_bar').val('')"
						onBlur ="$('#search_bar').val('Search...')" />
</header>

<!--- Navigation --->
<nav>
	<ul>
		<li><a href="#">Link 1</a></li>
		<li><a href="#">Link 2</a></li>
		<li><a href="#">Link 3</a></li>
		<li><a href="#">Link 4</a></li>
	</ul>
</nav>

<!--- Content --->
<div id="main_content">

</div>

<!--- Footer --->
<footer>
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Tools & Downloads</a></li>
		<li><a href="#">Meet the Team</a></li>
	</ul>
	<p class="disclaimer">
		<b>Disclaimer:</b> Lorem dimsum dolor sit amet, consectetur 
		adipiscing elit. Integer dictum posuere orci at scelerisque. 
		Maecenas sagittis tincidunt quam venenatis tristique. Morbi 
		ac risus et ipsum molestie vulputate.
	</p>
</footer>

</div>
</body>
</html>