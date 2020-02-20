<?

$dat_ami[0][0]=1;
$dat_ami[0][1]=-1;
$dat_ami[0][2]=0;
$dat_ami[0][3]=0;

$dat_ami[1][0]=0;
$dat_ami[1][1]=0;
$dat_ami[1][2]=1;
$dat_ami[1][3]=-1;

$dat_ami[2][0]=0;
$dat_ami[2][1]=1;
$dat_ami[2][2]=-1;
$dat_ami[2][3]=0;

$dat_ami[3][0]=0;
$dat_ami[3][1]=0;
$dat_ami[3][2]=0;
$dat_ami[3][3]=0;

$dat_ami[4][0]=1;
$dat_ami[4][1]=-1;
$dat_ami[4][2]=1;
$dat_ami[4][3]=-1;

$dat_ami[5][0]=1;
$dat_ami[5][1]=-1;
$dat_ami[5][2]=0;
$dat_ami[5][3]=0;

$dat_ami[6][0]=0;
$dat_ami[6][1]=0;
$dat_ami[6][2]=1;
$dat_ami[6][3]=-1;

$dat_ami[7][0]=0;
$dat_ami[7][1]=1;
$dat_ami[7][2]=-1;
$dat_ami[7][3]=0;

$dat_ami[8][0]=0;
$dat_ami[8][1]=0;
$dat_ami[8][2]=0;
$dat_ami[8][3]=0;



?>
<html>
<head>
<style>

.a_line{
  display:inline-block;
  width:25vw;
  height:12vw;
  border-left:1vw solid #909090;
  box-sizing:border-box;
}
.a_line_end{
  border-right:1vw solid #909090;
}

.a_line_on{
  border-bottom:1vw solid #909090;
}

.a_line2{
  display:inline-block;
  width:25vw;
  height:12vw;
  box-sizing:border-box;
}

.a_line_on2{
  border-bottom:2vw solid #ff0000;
}

.amida_box{
  display:inline-block;
  position:relative;
  background:#fafafa;
}

.box_base,.box_line{
  position:absolute;
  top:1vw;
  left:0;
  right:0;
  margin:auto;
  width:75vw;
  height:96vw;
}

.box_base{
  z-index:1;
}

.box_line{
  z-index:2;
}

</style>
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script>
$(function(){
  $('.cover1').addClass('cover0');
  $('.cover2').delay(500).queue(function(){
     $(this).addClass('cover0').dequeue();
     $('.cover3').addClass('cover3_a');
     $('.cover1').hide();
  });
   setInterval(function(){
    $('.point').animate({width:'30px',height:'30px', opacity: 0}, 1000).animate({width:'1px',height:'1px', opacity: 1}, 1);
  },1000);
});
</script>
</head>
<Body style="background:#f0e0ff;">
<div class="amida_box">
    <div class="box_base"><?for($s=0;$s<8;$s++){?><?for($n=0;$n<3;$n++){?><div class="a_line <?if($dat_ami[$s][$n] ==1 ){?> a_line_on<?}?> <?if(($n) ==2){?> a_line_end<?}?>"></div><?}?><?}?></div>
    <div class="box_line"><?for($s=0;$s<8;$s++){?><?for($n=0;$n<3;$n++){?><div class="a_line2 <?if(($s+$n)%2 ==0 ){?> a_line_on3<?}?> <?if(($n) ==2){?> a_line_end2<?}?>"></div><?}?><?}?></div>
</div>
</body>
</html>