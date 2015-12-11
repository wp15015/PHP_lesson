<?php
	session_start();

	$_SESSION['count'] = $_SESSION['count'] + 1;
	var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>page with session</title>
</head>
<body>
	<p><?php print $_SESSION['count'];?>回アクセスされました。</p>>
</body>
</html>