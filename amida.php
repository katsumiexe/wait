<?

$dat_ami[0][0]=1;
$dat_ami[0][1]=-1;
$dat_ami[0][2]=1;
$dat_ami[0][3]=-1;

$dat_ami[1][0]=0;
$dat_ami[1][1]=0;
$dat_ami[1][2]=0;
$dat_ami[1][3]=0;

$dat_ami[2][0]=0;
$dat_ami[2][1]=0;
$dat_ami[2][2]=0;
$dat_ami[2][3]=0;

$dat_ami[3][0]=0;
$dat_ami[3][1]=0;
$dat_ami[3][2]=0;
$dat_ami[3][3]=0;

$dat_ami[4][0]=0;
$dat_ami[4][1]=1;
$dat_ami[4][2]=-1;
$dat_ami[4][3]=0;

?>

<html>
<head>
<style>

.a_line{
	display:inline-block;
	position:absolute;
	width:20vw;
	height:12vw;
	border-left:1vw solid #909090;
	box-sizing:border-box;
	z-index:1;
}
.a_line_end{
	border-right:1vw solid #909090;
	z-index:1;
}

.a_line_on{
	border-bottom:1vw solid #909090;
	z-index:1;
}

.discover{
	position:absolute;
	bottom:32vw;
	left:-4vw;
	width:92vw;
	height:40vw;
	z-index:5;
	background:linear-gradient(#c0e0ff,#a0c0ff);
	box-shadow:0.5vw 0.5vw 1vw rgba(60,60,60,0.8);
/*	background:rgba(20,20,255,0.6);*/
}

.b_line{
	display:inline-block;
	position:absolute;
	width:20vw;
	height:0vw;
	border-left:2vw solid #ff0000;
	box-sizing:border-box;
	z-index:2;
}

.c_line{
	display:inline-block;
	position:absolute;
	width:0vw;
	height:12vw;
	border-bottom:2vw solid #ff0000;
	box-sizing:border-box;
	z-index:3;
}

.d_line{
	display		:inline-block;
	position	:absolute;
	width		:0vw;
	height		:12vw;
	border-bottom:2vw solid #ff0000;
	box-sizing	:border-box;
	z-index		:4;
}


.amida_box{
	display		:inline-block;
	position	:relative;
	background	:#fafafa;
	width		:84vw;
	height		:100vw;	
	margin		:0 auto;
}

.box_base{
	position	:absolute;
	top			:10vw;
	left		:0;
	right		:0;
	margin		:auto;
	width		:60vw;
	height		:90vw;
}

.start{
	position	:absolute;
	width		:15vw;
	height		:6vw;
	line-height	:6vw;
	z-index		:4;
	box-shadow	:0.5vw 0.5vw 1vw rgba(80,80,80,0.8);
	font-size	:3.5vw;
	cursor		:pointer;	
	border		:1vw solid #fafafa;
}

.goal_1{
	position	:absolute;
	width		:15vw;
	height		:8vw;
	line-height	:8vw;
	z-index		:4;
	box-shadow	:0.5vw 0.5vw 1vw rgba(80,80,80,0.8);
	font-size	:3.5vw;
	cursor		:pointer;	
	border		:1vw solid #ff3030;
	background	:#fff0f5;
	color		:#ff3030;
	font-weight:600;
}

.goal_2{
	position	:absolute;
	width		:15vw;
	height		:8vw;
	line-height	:8vw;
	z-index		:4;
	box-shadow	:0.5vw 0.5vw 1vw rgba(80,80,80,0.8);
	font-size	:3.5vw;
	cursor		:pointer;	
	border		:1vw solid #a0a0a0;
	background	:#f0f0f0;
	color		:#a0a0a0;
	font-weight:600;
}


#r0{
	top:2vw;
	left:4vw;;
	background:#903090;
}

#r1{
	top:2vw;
	left:24vw;;
	background:#ffa0d0;
}

#r2{
	top:2vw;
	left:44vw;;
	background:#e0f000;
}

#r3{
	top:2vw;
	left:63vw;;
	background:#9090e0;
}


#g0{
	bottom:2vw;
	left:4vw;;
}

#g1{
	bottom:2vw;
	left:24vw;;
}

#g2{
	bottom:2vw;
	left:44vw;;
}

#g3{
	bottom:2vw;
	left:63vw;;
}

</style>
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script>
$(function(){
	$('.amida_box').on('click','.sel',function(){
		$(this).css('border-color','#ff0000');
	
		$('.sel').removeClass('sel');
		Tmp=$(this).attr('id').replace("r", "");

		$.post("post_amida.php",{
			'tmp':Tmp,
		},
		function(data){
			$('.discover').delay(100).animate({'height':'0vw'},500);
			$('.box_base').html(data);
		});
/*	
		function(){	$('#b_0_0').animate({'height':'12vw'},1000)});
		$('#c_0_0').animate({'width':'20vw'},1000)});
*/
	});
});

</script>
</head>
<Body style="background:#f0e0ff;text-align:center;">
<div class="amida_box">
	<div id="r0" class="start sel">START</div>
	<div id="r1" class="start sel">START</div>
	<div id="r2" class="start sel">START</div>
	<div id="r3" class="start sel">START</div>
    <div class="box_base">	
    	<?for($s=0;$s<6;$s++){?>
    		<?for($n=0;$n<3;$n++){?>
    	 		<div class="a_line <?if($dat_ami[$s][$n] ==1 ){?> a_line_on<?}?> <?if(($n) ==2){?> a_line_end<?}?>" style="top:<?=$s*12?>vw; left:<?=$n*20?>vw;"></div>
    	 	<?}?>
    	<?}?>
		<?for($s=0;$s<6;$s++){?>
			<?for($n=0;$n<3;$n++){?>
				<div class="b_line" style="top:<?=$s*12?>vw; left:<?=$n*20?>vw;"></div>
			<?}?>
		<?}?>
		<?for($s=0;$s<6;$s++){?>
			<?for($n=0;$n<3;$n++){?>
				<div class="c_line" style="top:<?=$s*12?>vw; left:<?=$n*20?>vw;"></div>
			<?}?>
		<?}?>
		<?for($s=0;$s<6;$s++){?>
			<?for($n=0;$n<3;$n++){?>
				<div class="d_line" style="top:<?=$s*12?>vw; right:<?=40-($n*20)?>vw;"></div>
			<?}?>
		<?}?>
    </div>
	<div class="discover"></div>

	<div id="g0" class="goal_1">当り！</div>
	<div id="g1" class="goal_2">残念…</div>
	<div id="g2" class="goal_2">残念…</div>
	<div id="g3" class="goal_2">残念…</div>
</div>
</body>
</html>
