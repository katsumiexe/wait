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
	height:15vw;
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
	height:15vw;
	border-bottom:2vw solid #ff0000;
	box-sizing:border-box;
	z-index:3;
}

.d_line{
	display		:inline-block;
	position	:absolute;
	width		:0vw;
	height		:15vw;
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
}

#r0{
	top:2vw;
	left:5vw;;
	background:#903090;
}

#r1{
	top:2vw;
	left:25vw;;
	background:#ffa0d0;
}

#r2{
	top:2vw;
	left:45vw;;
	background:#e0f000;
}

#r3{
	top:2vw;
	left:65vw;;
	background:#9090e0;
}

</style>
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script>
$(function(){
	$('.start').on('click',function(){
		Tmp=$(this).attr('id').replace("r", "");
		$.post("post_amida.php",{
			'Dat':Tmp,
		},
		function(data){
			console.log(data);
			$('.discover').delay(100).animate({'height':'0vw'},500);
			$('.box_base').html(data);



		});
	});

/*	$('.d_line').animate({'width':'25vw'},1000);*/
});
</script>
</head>
<Body style="background:#f0e0ff;text-align:center;">
<div class="amida_box">
	<div id="r0" class="start">START</div>
	<div id="r1" class="start">START</div>
	<div id="r2" class="start">START</div>
	<div id="r3" class="start">START</div>

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
</div>
</body>
</html>
