<html>
<head>
<style>

.a_line{
  display:inline-block;
  width:20vw;
  height:12vw;
  bordr-left:0.5vw solid #909090;
  border-right:0.5vw solid #909090;
}
.a_line_on{
  border-bottom:0.5vw solid #909090;

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

<div>
<?for($s=0;$s<8;$s++){?>
  <?for($n=0;$n<4;$n++){?>
     <div class="a_line <?if(($s+$n)%5 ==0){?> a_line_on<?}?>"></div>
  <?}?>
<?}?>
</div>
</div>
</body>
</html>
