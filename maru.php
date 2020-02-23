<html>
<head>
<style>
.main_circle {
	position: relative;
	width: 150px;
	height: 150px;
	border-radius: 50%;
	background:linear-gradient(135deg, #aaaaaa, #888888);
	z-index:100;
}
 .circle {
	position: absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	margin:auto;
	border-radius: 50%;
	width: 124px;
	height: 124px;
	background:linear-gradient(135deg, #004000, #00a000);
	border-radius:50%;
	z-index:101;
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
    animation: circle 3s;
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
  z-index:112;
}

.point{
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:auto;
  z-index:111;

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

<!--div class="main_circle">
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
</div-->

<div class="main_circle">
	<div class="point"></div>
	<div class="point_2"></div>
	<div class="circle">
		<svg width="124" height="124">
		  <circle cx="62" cy="62" r="60" />
		</svg>
	</div>
</div>

</body>
</html>
