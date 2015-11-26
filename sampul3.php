<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>サンプル</title>
	<style>
		body{
			color: #0055ff;
		}
	</style>
</head>
<body>
	<h1>Hello World!!</h1>
	<?php
		/*配列の作成*/

		//文字列のキーを持つ$vegetblesという配列
		$vegetables = array('corn' => 'yellow',
			'beet' => 'red',
			'carrot' => 'orange');
	?>

	<?php
	//数値のキーを持つ$dinnerという配列
	$dinner = array('Sweet Corn and Asparagus',
		'Lemon Chicken',
		'Braised Bamboo Fungus',
		'Curry');
	$dinner_count = count($dinner);
	?>




<!--asortで並べ替え-->
	<h3>アソート並び替え前</h3>
	<ul>
		<?php
		foreach($vegetables as $key => $value){
			print '<li>$vegetables[\''.$key.'\']:'.$value.'</li>';
		}
		?>
	</ul>
	<ul>
		<?php
		foreach($dinner as $key => $value){
			print '<li>$dinner['.$key.']:'.$value.'</li>';
		}
		?>
	</ul>

	<?php
	asort($vegetables);
	asort($dinner);

	?>

	<h3>アソート後</h3>
	<ul>
		<?php
		foreach($vegetables as $key => $value){
			print '<li>$vegetables[\''.$key.'\']:'.$value.'</li>';
		}
		?>
	</ul>
	<ul>
		<?php
		foreach($dinner as $key => $value){
			print '<li>$dinner['.$key.']:'.$value.'</li>';
		}
		?>
	</ul>

</body>
</html>