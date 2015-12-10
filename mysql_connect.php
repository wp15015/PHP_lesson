<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>MySQLに接続</h1>
	<?php
		$db = mysqli_connect(
			'localhost' ,//ホスト名
			'root' ,//ユーザー名
			'1234' ,//パスワード
			'restaurant'//データベース名
			);
		if(!$db){
			die('Can not connect : '.mysql_connect_error());
		}
	?>

	<?php
		$db->set_charset('utf8');//文字化けを防ぐ

		$query = mysqli_query($db , 'select * from dishes');

		if(mysqli_num_rows($query) == 0){
			print '<p>データはありません</p>';
		}else{
			while ($dish = mysqli_fetch_object($query)){



				if($dish->is_spicy == 1){
					$spicy = 'Yes';
				}else{
					$spicy = 'No';
				}
				echo '<p>'.mb_convert_encoding($dish->dish_name , 'utf-8').'</p>';
				echo '<p>'.mb_convert_encoding($dish->price , 'utf-8').'</p>';
				echo '<p>'.mb_convert_encoding($dish->dish_id , 'utf-8').'</p>';
				//print ('<tr><td>%s</td><td>$%.02f</td><td>%s</td><tr>',
				//	htmlentities($dish->dish_name), $dish->price, $spicy)
			}
		}
	?>
</body>
</html>