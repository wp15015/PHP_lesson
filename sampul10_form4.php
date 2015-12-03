<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Webフォームの作成</title>
</head>
<body>
	<?php
	//
	if(array_key_exists('_submit_check',$_POST)){
		//validate_form()がエラーを返した場合、show_fromに渡す
		$form_errors = validate_form();
		if($form_errors){
			show_form($form_errors);
		}else{
			process_form();
		}
	}else{
		show_form();
	}
 //フォームがサブミットされるときに何かをする
	function process_form(){
		print '<p>Hellow, '.$_POST['my_name'].'</p>';
		print '<p>Hellow, '.strip_tags($_POST['my_name']).'</p>';
		print '<p>Hellow, '.htmlentities($_POST['my_name'] , ENT_QUOTES , 'utf-8').'</p>';
	}
	?>

<?php
		//フォームを表示
		function show_form($errors = ''){
			//何かエラーを渡されると、をれを出力
			if($errors){
				print 'Please correct these errors:<ul><li>';
				print implode('</li></li>',$errors);
				print '</li></ul>';
			}
print<<<_HTML_
			<form method="post" action="$_SERVER[SCRIPT_NAME]">
			Your name: <input type="text" name="my_name"><br>
			<input type="submit" value="Say Hello">
			<input type="hidden" name="_submit_check" value="1">
		</form>
_HTML_;
		}
		//フォームデータをチェック
		function validate_form(){
			//エラーメッセージをからの配列で初期化
			$errors = array();
			//my_name長さは少なくとも3文字はあるか？
			if(strlen($_POST['my_name']) < 3){
				$errors[] = 'Your name must be at least 3 letters long.';
			}
			//エラーメッセージの配列
			return $errors;
		}

?>



	<pre>
	<?php
		var_dump($_POST);
	?>
	</pre>
</body>
</html>