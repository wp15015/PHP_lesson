<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Webフォームの作成</title>
</head>
<body>
	<?php
	//Helloと挨拶をする
	if(array_key_exists('my_name',$_POST)){
		print "Hello, ".$_POST['my_name'];
	}else{
	?>
		<form method="post" action="<?php print $_SERVER['SCRIPT_NAME']; ?>">
			Your name: <input type="text" name="my_name"><br>
			<input type="submit" value="Say Hello">
		</form>
	<?php
	}
	?>

	<pre>
	<?php
		var_dump($_POST);
	?>
	</pre>
</body>
</html>