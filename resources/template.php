<!DOCTYPE HTML>
<html>
<head>
	<title>Template</title>
	<meta name="description" content="Template">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="root_container">

<!--- Site Header --->
<header>
	<div class="banner">Yo, this is a banner</div>
	<input id="search_bar" type="text" value="Search..." 
						   onfocus="document.getElementById('search_bar').value=''"
						   onBlur ="document.getElementById('search_bar').value='Search...'"
						   />
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
		<b>Disclaimer:</b> Lorem ipsum dolor sit amet, consectetur 
		adipiscing elit. Integer dictum posuere orci at scelerisque. 
		Maecenas sagittis tincidunt quam venenatis tristique. Morbi 
		ac risus et ipsum molestie vulputate.
	</p>
</footer>

</div>
</body>
</html>