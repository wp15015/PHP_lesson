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
	<?php
	/*多次元配列の作成*/
	$meals = array('breakfast' => array('Walnut Bun','Coffee'),
		             'lunch' => array('Cashew Nuts','White Mushrooms'),
		             'snack' => array('Dried Mulberries','Salted Sesame Crab'));

	$lunch = array(array('Chicken','Eggplant','Rice'),
		            array('Beef','Scallions','Noodles'),
		            array('Eggplant','Tofu'));

	$flavors = array('Jpanese' => array('hot' => 'wasabi',
		                                 'salty' => 'soy sauce'),
	                  'Chinese' => array('hot' => 'mustard',
	                  	                'pepper-salty' => 'prickly ash'));
	?>
	<h2>多次元配列にアクセスする</h2>
	<?php
	//多次元配列にアクセルする
		print '<p>$meals[\'breakfast\'][\'0\'] => '.$meals['breakfast']['0'].'</p>';
	?>
	<h2>foreachで多次元配列を繰り返す($meals)</h2>
	<?php
	foreach($meals as $meals_time => $meals_menu){
		foreach ($meals_menu as $menu => $example){
			print '<p>$meals[\''.$meals_time.'\']['.$example.'] => '.$example.'</p>';
		}
	}
	?>
	<h2>foreachで多次元配列を繰り返す</h2>
	<?php
	//foreachで多次元配列を繰り返す
		foreach ($flavors as $culture => $culture_flaver) {
			foreach ($culture_flaver as $flavors => $example){
				print '<p>$flavors[\''.$culture.'\'][\''.$flavors.'\'] => '.$example.'</p>';
			}
		}


		?>

</body>
</html>