<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Webフォームの作成</title>
</head>
<body>
	<form method="POST" action="catalog.php">
		<input type="text" name="product_id">

		<select name="category">
			<option value="ovenmitt">Pot Hodlder</option>
			<option value="fryingpan">Frying Pan</option>
			<option value="torch">Kitchen Torch</option>
		</select>
		<input type="submit" name="submit">
	</form>
</body>
</html>