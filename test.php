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

.set,.sel{
    display:inline-block;
    width:90px;
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
var Doll=[];
var Rand=[0,1,2,3,4,5,6,7,8,9,];
var St_Rand1=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand2=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand3=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand4=[0,1,2,3,4,5,6,7,8,9,10,11];
var St_Rand5=[0,1,2,3,4,5,6,7,8,9,10,11];

var Pts={
		"a": 0,
		"b": 0,
		"c": 0,
		"d": 0,
		"e": 0,
		"p": 0
};

var R=0;
$(function(){ 
    $('.sel').on('click',function(){
		Doll["p"]=$(this).attr('id').replace('s','');
		for (i =0; i <50; i++) {
			Rnd_a = Math.floor( Math.random() * 10);
			Rnd_b = Math.floor( Math.random() * 10);
			Tmp=Rand[Rnd_a];
			Rand[Rnd_a]=Rand[Rnd_b];
			Rand[Rnd_b]=Tmp;
		}

		if(Rand[R] == Doll["p"]){
			R++;
		}
		Doll["a"]=Rand[R];
		R++;

		if(Rand[R] == Doll["p"]){
			R++;
		}
		Doll["b"]=Rand[R];
		R++;

		if(Rand[R] == Doll["p"]){
			R++;
		}
		Doll["c"]=Rand[R];
		R++;

		if(Rand[R] == Doll["p"]){
			R++;
		}
		Doll["d"]=Rand[R];
		R++;
    });

	$('.start').on('click',function(){
		$('.p_pts').addClass('p_pts_on');

		for (i =0; i <40; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand1[Rnd_a];
			St_Rand1[Rnd_a]=St_Rand1[Rnd_b];
			St_Rand1[Rnd_b]=Tmp;
		}
		Up_a=St_Rand1;

		for (i =0; i <30; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand2[Rnd_a];
			St_Rand2[Rnd_a]=St_Rand2[Rnd_b];
			St_Rand2[Rnd_b]=Tmp;
		}
		 Up_b=St_Rand2;

		for (i =0; i <20; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand3[Rnd_a];
			St_Rand3[Rnd_a]=St_Rand3[Rnd_b];
			St_Rand3[Rnd_b]=Tmp;
		}
		Up_c=St_Rand3;

		for (i =0; i <45; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand4[Rnd_a];
			St_Rand4[Rnd_a]=St_Rand4[Rnd_b];
			St_Rand4[Rnd_b]=Tmp;
		}
		Up_d=St_Rand4;

		for (i =0; i <35; i++) {
			Rnd_a = Math.floor( Math.random() * 12);
			Rnd_b = Math.floor( Math.random() * 12);
			Tmp=St_Rand5[Rnd_a];
			St_Rand5[Rnd_a]=St_Rand5[Rnd_b];
			St_Rand5[Rnd_b]=Tmp;
		}
		Up_e=St_Rand5;

			console.log(Up_a)
			console.log(Up_b)
			console.log(Up_c)
			console.log(Up_d)
			console.log(Up_e)
	});

    $('.td_b2').on('click','.p_pts_on',function(){
        $(this).removeClass('p_pts_on');
        No=$(this).attr('id').replace('i','');

		$.post({
			url:'post_read_turn.php',
			dataType: 'json',
			data:{
				'turn':Turn,
				'bet':No,
				'data_a':Up_a[Turn],
				'data_b':Up_b[Turn],
				'data_c':Up_c[Turn],
				'data_d':Up_d[Turn],
				'data_e':Up_e[Turn],
			},
		}).done(function(data2, textStatus, jqXHR){
			Pts[data2.z]=parseInt(Pts[data2.z])+parseInt(data2.pts);

            $('#set_z').text(data2.z);
            $('#set_a').text(data2.a +'□'+Pts['a']);
            $('#set_b').text(data2.b +'□'+Pts['b']);
            $('#set_c').text(data2.c +'□'+Pts['c']);
            $('#set_d').text(data2.d +'□'+Pts['d']);
            $('.td_a').text(Turn);

			console.log(data2.pts);
			console.log(Pts);

		});
        Turn++;
    });
});
</script>
</head>
<body style="text-align:center">


<div class="main">
<div class="start">START</div>
<?for($e=0;$e<10;$e++){?>
<span id="s<?=$e?>" class="sel"><?=$e?></span>
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