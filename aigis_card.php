<?php
$page_index="top";
include_once("./library/session.php");

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="./css/main.css?_<?=date("YmdHi")?>">

<style>

</style>
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/main.js?_<?=date("YmdHi")?>"></script>
<script>
</script>
</head>
<body style="text-align:center">

<div class="main">
<div class="page_01">
<?for($e=1;$e<11;$e++){?>
	<div id="s<?=$e?>" class="sel">
	<span class="sel_a"></span>
	<span class="sel_b">
	<span class="sel_b_1 <?if($unit[$e]["status_1"]==1){?>sel_on<?}?>"><?=$status[1]["name"]?></span>
	<span class="sel_b_1 <?if($unit[$e]["status_2"]==1){?>sel_on<?}?>"><?=$status[2]["name"]?></span>
	<span class="sel_b_1 <?if($unit[$e]["status_3"]==1){?>sel_on<?}?>"><?=$status[3]["name"]?></span>
	<span class="sel_b_1 <?if($unit[$e]["status_4"]==1){?>sel_on<?}?>"><?=$status[4]["name"]?></span>
	<span class="sel_b_1 <?if($unit[$e]["status_5"]==1){?>sel_on<?}?>"><?=$status[5]["name"]?></span>
	</span>
	<span class="sel_c"><?=$unit[$e]["name"]?></span>
	</div>
<?}?>
</div>
<div class="page_02">
	<table class="player">
		<tr>
			<td class="player_0 pl1">
				<div class="player_a"></div>
				<div class="player_b"></div>
			</td>
			<td class="player_0 pl2">
				<div class="player_a"></div>
				<div class="player_b"></div>
			</td>
			<td class="player_0 pl3">
				<div class="player_a"></div>
				<div class="player_b"></div>
			</td>
			<td class="player_0 pl4">
				<div class="player_a"></div>
				<div class="player_b"></div>
			</td>

			<td class="player_0 pl5">

			</td>
		</tr>
	</table>

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
</div>

<div class="pop_back">
	<div class="pop_a">
		<div class="pop_a_1"> </div>
		<div class="pop_a_2">みりあ</div>

		<span class="pop_a_3">
		<span class="sel_b_1">巨乳</span>
		<span class="sel_b_1">幼女</span>
		<span class="sel_b_1">清楚</span>
		<span class="sel_b_1">知的</span>
		<span class="sel_b_1">亜人</span>
		</span>

		<div id="reset" class="btn c1">取消</div> 
		<div id="start" class="btn c2">選択</div>
	</div>
</div>



</body>
</html>