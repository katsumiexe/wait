<?php
/*include_once("./library/session.php");*/

$item[12]="";
$item[11]="";
$item[10]="";

$item[9]="";
$item[8]="";
$item[7]="";

$item[6]="";
$item[5]="";
$item[4]="";

$item[3]="";
$item[2]="";
$item[1]="";

$check[1]="";
$check[2]="";

$card[1]="";

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
	<img src="./img/unit/unit_0.png" class="sel_a">
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
				<span id="sub_a" class="get_sub"><?=$check[1]?></span>
				<span id="ring_a" class="get_ring"><?=$check[2]?></span>
				<div class="player_b pl1">
					<span class="get_icon"><?=$card[1]?></span>
					<span id="count_a" class="get_count">0</span>
				</div>
				<div id="down_a" class="player_d">▼</div>
				<div id="set_a" class="player_c"></div>
			</td>
			<td class="player_0 pl2">
				<div class="player_a"></div>
				<span id="sub_b" class="get_sub"><?=$check[1]?></span>
				<span id="ring_b" class="get_ring"><?=$check[2]?></span>
				<div class="player_b pl2">
					<span class="get_icon"><?=$card[1]?></span>
					<span id="count_b" class="get_count">0</span>
				</div>
				<div id="down_b" class="player_d">▼</div>
				<div id="set_b" class="player_c"></div>
			</td>
			<td class="player_0 pl3">
				<div class="player_a"></div>
				<span id="sub_c" class="get_sub"><?=$check[1]?></span>
				<span id="ring_c" class="get_ring"><?=$check[2]?></span>
				<div class="player_b pl3">
					<span class="get_icon"><?=$card[1]?></span>
					<span id="count_c" class="get_count">0</span>
				</div>
				<div id="down_c" class="player_d">▼</div>
				<div id="set_c" class="player_c"></div>
			</td>
			<td class="player_0 pl4">
				<div class="player_a"></div>
				<span id="sub_d" class="get_sub"><?=$check[1]?></span>
				<span id="ring_d" class="get_ring"><?=$check[2]?></span>
				<div class="player_b pl4">
					<span class="get_icon"><?=$card[1]?></span>
					<span id="count_d" class="get_count">0</span>
				</div>
				<div id="down_d" class="player_d">▼</div>
				<div id="set_d" class="player_c"></div>
			</td>

			<td class="player_0 pl5">

			</td>
		</tr>
	</table>

<span id="rest0" class="rest_card"></span>
<span id="rest1" class="rest_card"></span>
<span id="rest2" class="rest_card"></span>
<span id="rest3" class="rest_card"></span>
<span id="rest4" class="rest_card"></span>
<span id="rest5" class="rest_card"></span>
<span id="rest6" class="rest_card"></span>
<span id="rest7" class="rest_card"></span>
<span id="rest8" class="rest_card"></span>
<span id="rest9" class="rest_card"></span>
<span id="rest10" class="rest_card"></span>
<span id="rest11" class="rest_card"></span>
<div class="main_card">
</div>
<div class="turn_start">
START
</div>
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
					<td class="td_b2">
						<?for($s=12;$s>0;$s--){?>
						<span id="i<?=$s?>" class="p_pts">
						<span class="p_pts_icon"><?=$item[$s]?></span>
						</span>
						<?}?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>
</div>




<div class="pop_back">
	<div class="pop_a">
		<img src="" class="pop_a_1">
		<div class="pop_a_2">みりあ</div>

		<span class="pop_a_3">
		</span>

		<div id="reset" class="btn c1">取消</div> 
		<div id="start" class="btn c2">選択</div>
	</div>
</div>



</body>
</html>