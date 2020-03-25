<?
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>

</style>
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script>
</script>
</head>
<body style="text-align:center">


<div class="main">
<div class="start">START</div>

<?for($e=0;$e<10;$e++){?>
	<div id="s<?=$e?>" class="sel">
	<span class="sel_a"></span>
	<span class="sel_b">
	<span class="sel_b_1">巨乳</span>
	<span class="sel_b_1">幼女</span>
	<span class="sel_b_1">清楚</span>
	<span class="sel_b_1">知的</span>
	<span class="sel_b_1">亜人</span>
	</span>
	<span class="sel_c"><?=$unit[$e]["name"]?></span>
	</div>



<?}?>
<hr>
<span id="set_a" class="set">0</span>
<span id="set_b" class="set">0</span>
<span id="set_c" class="set">0</span>
<span id="set_d" class="set">0</span>
<span id="set_z" class="set">0</span>
<table class="table_a">
	<tr>
		<td class="td_a">あ</td>
		<td>
			<table class="table_b">
				<tr>
					<td class="td_b1">
						<span class="p_name">みりあ</span>
						<span class="p_status">みり</span>
						<span class="p_status">みり</span>
						<span class="p_status">みり</span>
						<span class="p_status">みり</span>
						<span class="p_status">みり</span>
					</td>
				</tr>
				<tr>
					<td class="td_b2"><?for($n=0;$n<12;$n++){?><span id="i<?=$n?>" class="p_pts"></span><?}?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>
</body>
</html>