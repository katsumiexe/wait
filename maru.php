<html>
<head>
<style>
.main_circle {
  position: relative;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background:linear-gradient(135deg, #aaaaaa, #888888);
  background:#888888;
}
 .circle {
  position: absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:auto;
  border-radius: 50%;
  width: 80px;
  height: 80px;
  box-shadow: 0px 0px 2px 4px rgba(255,255,200,1);
  border:2px solid #ffffff;
}

.cover0{
  animation: draw 0.5s linear forwards;
}
.cover1{
  position: absolute;
  overflow: hidden;
  top:-2px;
  width: 42px;
  height: 84px;
  left: 40px;
  border-radius:0 100% 100% 0 / 0 50% 50% 0;
  background: #ff0000;
  transform-origin: 0 50%;
  z-index:1;
}

.cover2{
  position: absolute;
  overflow: hidden;
  top:-2px;
  width: 42px;
  height: 84px;
  left: -2px;
  border-radius:100% 0 0 100% / 50% 0 0 50%;
  background: #0000ff;
  transform-origin: 100% 50%;
  z-index:2;
}

.cover3{
  position: absolute;
  border-radius:0 100% 100% 0 / 0 50% 50% 0;
  top:0px;
  left:40px;
  width: 40px;
  height: 80px;
  z-index:5;
  background:#008000;
  background:linear-gradient(135deg, #00a000, #004000);
  z-index:3;
}

.cover3_a{
  box-shadow: 0px 0px 2px 4px rgba(255,255,200,0.4);
  border:2px solid #ffffff;
  left:38px;
  top:-2px;
  }
.cover4{
  position: absolute;
  border-radius:100% 0 0 100% / 50% 0 0 50%;
  top:0px;
  left:0px;
  width: 40px;
  height: 80px;
  z-index:5;
  background:#008000;
  background:linear-gradient(135deg, #00a000, #004000);
  z-index:4;
}

/* 円を描くアニメーション */
@keyframes draw {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(180deg);
  }
}

/*----------------------------------*/
svg {
    transform: rotate(-90deg);
}

circle {
    fill: transparent;
    stroke: #ffffc0;
    stroke-width: 4;
    animation: circle 1.5s;
}

@keyframes circle {
  0% { stroke-dasharray: 0 377; }
/*  99.9%,to { stroke-dasharray: 377 377; }*/
  99.9%{ stroke-dasharray: 377 377; }

}
/*----------------------------------*/


.box_1{
  position:relative;
  width:100px;
  height:100px;
  background:#000000;
}
.point_2{
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:auto;
  height:2px;
  width:2px;
  border-radius:50%;
  background:#ffffff;
  box-shadow:0px 0px 4px 4px rgba(255,255,255,0.5);
  z-index:2;
}

.point{
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:auto;
  z-index:1;

  border:1px solid #ffffff;
  display:inline-block;
  height:1px;
  width:1px;
  border-radius:50%;
  box-shadow:0 0 2px 4px rgba(255,255,255,0.5),0 0 1px 2px rgba(255,255,255,0.5) inset;
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
<div class="main_circle">
  <div class="circle">
    <span class="cover1"></span>
    <span class="cover2"></span>

    <span class="cover3"></span>
    <span class="cover4"></span>
  </div>
</div>
<br><br>
<div class="box_1">
  <div class="point"></div>
  <div class="point_2"></div>
</div>



<svg width="124" height="124">
  <circle cx="62" cy="62" r="60" />
</svg>

</body>
</html>
