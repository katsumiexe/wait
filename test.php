<?
session_save_path('./session/');
ini_set('session.gc_maxlifetime', 3*60*60); // 3 hours
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.cookie_secure', FALSE);
ini_set('session.use_only_cookies', TRUE);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.main{
    width:100%;
    max-width:600px;
    background:#f0f0f0;
    margin:0 auto;    
}

.hako{ 
    display:inline-block;
    width:55px;
    height:55px;
    line-height:55px;
    background:#f00000;
    box-sizing:border-box;
    border:0.5vw solid #0000ff;
    text-align:center;
    font-size:20px;
}

.table_a{
    width:100%;    
    background:#e0f0ff;
}

.td_a{
    width:120px;    
    background:#a0f0ff;
}

.table_b{
    width:100%;    
    background:#e0f0ff;
}

.td_b1{
    height:30px;    
    background:#00f020;
}

.td_b2{
    background:#00f0ff;
}

.p_name{
    display:inline-block;
    width:200px;
    background:#ff5030;
}

.p_status{
    display:inline-block;
    width:45px;
    background:#ff50a0;
}

.p_pts{
    display:inline-block;
    width:74px;
    height:40px;
    background:#cccccc;
    box-sizing:border-box;
    border:1px solid #ffffff;
	color:#fafafa
}

.p_pts_on{
    background:#906000 !important;
}

.set{
    display:inline-block;
    width:40px;
	height:30px;
	line-height:30px;
	text-align:right;
    background:#ffe0f0;
	margin:5px;
}

</style>
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script>
var Turn=0;
var St=[];
var Rand=[0,1,2,3,4,5,6,7,8,9];

$(function(){ 
    $('.sel').on('click',function(){
		Doll["p"]=$(this).attr('id').replace('d','');

    });

    $('.start').on('click',function(){

console.log(Rand);
for (i =0; i <10; i++) {
	Rnd_a = Math.floor( Math.random() * 10);
	Rnd_b = Math.floor( Math.random() * 10);
	Tmp=Rand[Rnd_a];
	Rand[Rnd_a]=Rand[Rnd_b];
	Rand[Rnd_b]=Tmp;

console.log(Rnd_a);
console.log(Rnd_b);
console.log(tmp);
console.log("〇");


}
console.log(Rand);


        $('.p_pts').addClass('p_pts_on');
		$.post({
			url:'post_start.php',
			dataType: 'json',

		}).done(function(data1, textStatus, jqXHR){
		console.log(data1.a);
			Up=data1;
            $('#set_a').text(Up.a[0]);
            $('#set_b').text(Up.b[0]);
            $('#set_c').text(Up.c[0]);
            $('#set_d').text(Up.d[0]);
		});
    });

    $('.td_b2').on('click','.p_pts_on',function(){
        $(this).removeClass('p_pts_on');
        No=$(this).attr('id').replace('i','');

		console.log(Up);
		$.post({
			url:'post_read_turn.php',
			dataType: 'json',
			data:{
				'turn':Turn,
				'bet':No,
				'data_a':Up.a[Turn],
				'data_b':Up.b[Turn],
				'data_c':Up.c[Turn],
				'data_d':Up.d[Turn],
			},
		}).done(function(data2, textStatus, jqXHR){
			console.log(data2);
            $('#set_z').text(data2.z);
            $('#set_a').text(data2.a);
            $('#set_b').text(data2.b);
            $('#set_c').text(data2.c);
            $('#set_d').text(data2.d);
            $('.td_a').text(Turn);
		});
        Turn++;
    });
});
</script>
</head>
<body style="text-align:center">
<!--
St[0][0]="みりあ";
St[0][1]=1;
St[0][2]=2;

St[1][0]="みりあ";
St[1][1]=1;
St[1][2]=3;

St[2][0]="みりあ";
St[2][1]=1;
St[2][2]=4;

St[3][0]="みりあ";
St[3][1]=1;
St[3][2]=5;

St[4][0]="みりあ";
St[4][1]=2;
St[4][2]=3;

St[5][0]="みりあ";
St[5][1]=2;
St[5][2]=4;

St[6][0]="みりあ";
St[6][1]=2;
St[6][2]=5;

St[7][0]="みりあ";
St[7][1]=3;
St[7][2]=4;

St[8][0]="みりあ";
St[8][1]=3;
St[8][2]=5;

St[9][0]="みりあ";
St[9][1]=4;
St[9][2]=5;
-->
<div class="main">
<div class="start">START</div>
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