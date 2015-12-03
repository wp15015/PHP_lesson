<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Webフォームの作成5</title>
</head>
<body>

<?php
	if($_POST['_submit_check']){
		$defaults = $_POST;
	}else{
		$defaults = array('delivery' => 'yes',
			                'size' => 'medium',
			                'main_dish' => array('taro','tripe'),
			                'sweet' => 'cake',
			                //追記
			                'my_name' => '',
			                'comments' => ''
			                //追記);
			                );
	}
	//追記
	print '<form method="post" action="'.$_SERVER['SCRIPT_NAME'].'">';
	//追記

	//6-24
	print '<input type="text" name="my_name" value="'.htmlentities($defaults['my_name']).'"><br>';
	//6-25
	print '<textarea name="comments">';
	print htmlentities($defaults['comments']);
	print '</textarea><br>';
	//6-26
	$sweet = array('puff' => 'Sesame Seed puff',
		             'square' => 'Coconut Milk Gelation Square',
		             'cake' => 'Brown Sugar Cake',
		             'ricement' => 'Sweet Rice and Meat');

	print '<select name="sweet">';
	//$valはオプション知値で、$choiceが表示される
	foreach($sweet as $option => $label){
		print '<option value="'.$option.'"';
		if($option == $defaults['sweet']){
			print 'selected="selected"';
		}
		print ">$label</option><br>";
	}
	print '</select><br>';

	//6-27
	$main_dishes = array('cake' => 'Braised sea Cucumber',
                      'stomach' => 'Sauteed Pig\'s Stomach',
                      'trie' => 'Sauteed Tripe with Wine Sauce',
                      'taro' => 'Stewed Pork with Taro',
                      'giblets' => 'Baked Gidlets with Taro',
                      'abalone' => 'Abalone with Marrow and Duck Feet');

	print '<select name="main_dish[]" multiple="multiple">';

	$selected_options = array();
	foreach ($defaults['main_dish'] as $option){
		$selected_options[$option] = true;
	}

	//<option>タグを出力
	foreach ($main_dishes as $option => $label){
		print '<option value="'.htmlentities($option).'"';
		if(array_key_exists($option, $selected_options)){
			print 'selected="selected"';
		}
		print '>'.htmlentities($label).'</option>';
		print "<br>";
	}
	print '</select>';

	//6-28

	//チェックボックス
	print '<input type="checkbox" name="delivery" value="yes"';
	if(array_key_exists('delivery' , $defaults)){print ' checked="checked"';}
	print '> Delivery?<br>';
	//チェックボックスから返される値を確認
	//チェックボックスが外されると$defaults['delivery']は作成されないのでエラーとなる。
	print $defaults['delivery']."<br>";

 //ラジオボタン
	print '<input type="radio" name="size" value="small"';
	if($defaults['size'] == 'small'){print 'checked="checked"';}
	print'> Small <br>';

	print '<input type="radio" name="size" value="medium"';
	if($defaults['size'] == 'medium'){print 'checked="checked"';}
	print'> Medium <br>';

	print '<input type="radio" name="size" value="large"';
	if($defaults['size'] == 'large'){print 'checked="checked"';}
	print'> Large <br>';

	//追記
	print '<input type="hidden" name="_submit_check" value="1">';
	print '<input type="submit"value="submit">';
	//追記
?>

<!--メインディッシュ確認のためダンプを出力-->
	<pre>
	<?php
	var_dump($selected_options);

	var_dump($main_dishes);

	var_dump($defaults);
	?>
	</pre>
</body>
</html>