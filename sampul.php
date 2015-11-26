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
		print '<p>PHPで出力しています</p>';
		print '';

		print '<ul>
		<li>beef</li>
		<li>Sauteed</li>
		<li>Soy Sauce</li>
		</ul>';

		$test1 = 3;
		$test2 = 4;
		$test3 = $test1 + $test2;

		$tashizan = 2 + 2;
		$hikizan = 17 - 3.5;
		print "<p>" . $tashizan ."</p>";
		print "<p>" . $hikizan ."</p>";
		print "<p>" . (10 / 3) ."</p>";
		print "<p>" . (6 * 9) ."</p>";
		print "<p>" . (17 % 3) ."</p>";


		/*配列の作成*/

		//文字列のキーを持つ$vegetblesという配列
		$vegetables = array('corn' => 'yellow',
			'beet' => 'red',
			'carrot' => 'orange');
	?>
	<table border="1">
		<tr>
			<th></th>
			<th>キー</th>
			<th>値</th>
		</tr>
		<?php
			foreach ($vegetables as $key => $value) {
				print '<tr>';
				print '<td>$vegetables[\''.$key.'\']</td>';
				print '<td>'.$key.'</td>';
				print '<td>'.$value.'</td>';
				print '</tr>';
			}
		?>
	</table>

	<?php
	//数値のキーを持つ$dinnerという配列
	$dinner = array('Sweet Corn and Asparagus',
		'lemon Chicken',
		'Braised Bamboo Fungus',
		'curry');
	$dinner_count = count($dinner);
	?>
	<ul>
		<?php
			foreach($dinner as $value){
				print '<li>You can eat:'.$value.'</li>';
			}

			for($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++){
				print '<li>Dish number '.$i.' is '.$dinner[$i].'</li>';
			}


		?>
	</ul>

	<?php
	//文字列と数値のキーが混在する $computersという配列
	$computers['trs-80'] = 'Radio Shack';
	$computers[2600] = 'Atari';
	$computers['Adam'] = 'Coleco';
	$computers['aaa'] = 'bbb';

	$computers_count = count($computers);
	?>
	<ul>
		<li><?php  print '$computers[\'trs-80\']の中身は'.$computers['trs-80'].'です。';  ?></li>
		<li><?php  print '$computers[2600]の中身は'.$computers[2600].'です。';  ?></li>
		<li><?php  print '$computers[\'Adam\']の中身は'.$computers['Adam'].'です。';  ?></li>
	</ul>
	<p>$computersの配列の数は<?php  print $computers_count;  ?>です。</p>

<!--11月26日-->
	<?php
		$implode_data = implode('</td><td>',$vegetables);
	?>
	<table border="1">
		<tr>
			<td>
				<?php print $implode_data; ?>
			</td>
		</tr>
	</table>
</body>
</html>