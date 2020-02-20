<html>
<head>
<style>

.a_line{
  display:inline-block;
  width:30vw;
  height:12vw;
  border-left:0.5vw solid #909090;
  box-sizing:border-box;
}
.a_line_end{
  border-right:0.5vw solid #909090;
}

.a_line_on{
  border-bottom:0.5vw solid #909090;
}

.a_line2{
  display:inline-block;
  width:30vw;
  height:12vw;
  box-sizing:border-box;
}

.a_line_on2{
  border-bottom:0.5vw solid #ff0000;
}


.amida_box{
  display:inline-block;
  position:relative;
  background:#fafafa;
}

.box_base{
  position:absolute;
  top:1vw;
  left:1vw;
  width:95vw;
  height:120vw;
  background:#f0ffff;
}
.box_line{
  position:absolute;
  top:1vw;
  left:1vw;
  width:95vw;
  height:120vw;
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
    <div class="box_base">
      <div><?for($s=0;$s<8;$s++){?><?for($n=0;$n<3;$n++){?><div class="a_line <?if(($s+$n)%2 ==0 ){?> a_line_on<?}?> <?if(($n) ==2){?> a_line_end<?}?>"></div><?}?><?}?></div>
    </div>
    <div class="box_line">
      <div><?for($s=0;$s<8;$s++){?><?for($n=0;$n<3;$n++){?><div class="a_line2 <?if(($s+$n)%2 ==0 ){?> a_line_on2<?}?> <?if(($n) ==2){?> a_line_end2<?}?>"></div><?}?><?}?></div>
    </div>
</div>

</body>
</html>
