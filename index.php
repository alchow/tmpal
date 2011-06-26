<!doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>jQuery Mobile: Demos and Documentation</title> 
	<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
	<link rel="stylesheet"  href="style/gallery.css" /> 
	<script src="http://code.jquery.com/jquery-1.6.1.min.js"></script> 
	<script src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.js"></script> 
</head>
<body>
	<div data-role="page" id="jqm-home" class="type-home"> 
		<div data-role="content">
			<div class="content-primary"> 
				<nav> 


							<ul data-role="listview" data-theme="c" data-dividertheme="b"> 
<?php
for($i=0; $i < 100; $i++){
	echo("<li>");
	echo('<img class="long-thumbs" src="img/pic'.($i%5+1).'.png" alt="pic'.$i.'"/>');
	echo('<a href="site.php?siteName=nettuts">pic'.$i.'</a> ');
	echo("</li>");
}
?>
							</ul> 
				</nav> 
			</div>
		</div>
	</div>
</body>
</html