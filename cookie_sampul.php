<?php
	setcookie('userid2','ralph');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>page with cookie</title>
</head>
<body>
	<pre>
		<?php
			//var_dump($_COOKIE);
		?>
	</pre>
	<p>
		<?php
			print 'Hello, '. $_COOKIE['userid'];
		?>
	</p>
	this page sets a cookie properly,because the PHP blockwith setcookie() in it comes before all of the HTML.
</body>
</html>