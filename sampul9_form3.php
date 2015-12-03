<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Webフォームの作成</title>
</head>
<body>
	<form method="POST" action="sampul9_var_dump.php">
		<select name="lunch[]" multiple>
			<option value="pork">BBQ Pork Bun</option>
			<option value="chicken">Chicken Bun</option>
			<option value="lotus">Lotus Seed Bun</option>
			<option value="bean">Bean Paste Bun</option>
			<option value="nest">Bird-Nest</option>
		</select>
		<input type="submit" name="submit">
	</form>
</body>
</html>