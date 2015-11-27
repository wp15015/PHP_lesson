<?php page_header('#008800' , 'body'); ?>
<p>関数</p>

<?php
function page_header($color = 'pink' , $tag = 'body'){
	print '<!DOCTYPE html>';
	print '<html lang="ja">';
	print '<head>';
	print '<meta charset="UTF-8">';
	print '<style>';
	print $tag.'{color: '.$color.'}';
	print '</style>';
	print '<title>Welcom to my site</title>';
	print '</head>';
	//print '<body bgcolor="#ffffff">';
}
/*
page_header();
print "Welcome, $user";
print "</body></thml>";
*/
?>

<?php
	function page_footer(){
		print '</body>';
		print '</html>';
	}

//カウントダウン
function countdown($top){
	while ($top > 0){
		print $top.'...<br>';
		$top--;
	}
	print 'boom!<br>';
}

$counter = 5;
countdown($counter);
print '<p>Now , counter is '.$counter.'</p>'
?>

<h2>関数から値を返す</h2>
<?php
//関数から値を返す
$number_to_display = number_format(285266237);
print 'The population of the US is about:'.$number_to_display;
?>
<hr>
<?php
function restaurant_check($meal,$tax,$tip){
	$tax_amount = $meal * ($tax/100);
	$tip_amount = $meal * ($tip/100);
	$total_notip = $meal + $tax_amount;
	$total_tip = $meal + $tax_amount + $tip_amount;
	if($total_tip > 5000){
		return array('notip' => $total_notip,
		          'tip' => $total_tip,
		          'message' => '高すぎる!');
	}else{
		return array('notip' => $total_notip,
		          'tip' => $total_tip,
		          'message' => 'ごちそうさまでした！');
	}
}

$check = restaurant_check(5000, 8, 5);
print '<p>税込みの金額は'.$check['notip'].'</p>';
print '<p>税込みの金額は'.$check['tip'].'</p>';
print '<p>'.$check['message'].'</p>';
?>

<hr>
<h2>変更のスコープ</h2>
<?php
$dinner = 'Curry Cuttlefish';

function vegetarian_dinner(){
	print 'Dinner is '.$dinner.' or ';
	$dinner = 'Sauteed Pea Shoots';
	print $dinner.'<br>';
}

function kosher_dinner(){
	print 'Dinner is '.$dinner.' or ';
	$dinner = 'Kung Pao Chicken';
	print $dinner.'<br>';
}

print 'Vegetarian';
vegetarian_dinner();
print 'Kosher';
kosher_dinner();
print 'Regular dinner is '.$dinner;
?>

<h2>関数内からグローバル変数を使う</h2>
<?php
$dinner = 'Curry Cuttlefish';

function macrobiotic_dinner(){
	$dinner = 'Some Vegetables';
	print 'Dinner is '.$dinner;
	//海からの恵みに打ち負かされてしまう
	print 'but I\'d rather have ';
	print $GLOBALS['dinner'].'<br>';
}

macrobiotic_dinner();
print 'Regular dinner is : '.$dinner;
?>

<h2>$GLOBALS配列の変数を修正する</h2>
<?php
$dinner = 'Curry Cuttlefish';

function hungry_dinner(){
	$GLOBALS['dinner'] .= ' and Deep-fried Taro';
}

print 'Regular dinner is : '.$dinner.'<br>';
hungry_dinner();
print 'Hungry dinner is : '.$dinner;
?>

<h2>globalキーワードを使ったやり方</h2>
<?php
$dinner = 'Curry Cuttlefish';

function vegetarian_dinner2(){
	global $dinner;
	print 'Dinner was '.$dinner.', but now it\'s';
	$dinner = 'Sauteed Pea Shoots';
	print $dinner.'<br>';
}

print 'Regular dinner is : '.$dinner.'<br>';
vegetarian_dinner2();
print 'Regular dinner is : '.$dinner;
?>
