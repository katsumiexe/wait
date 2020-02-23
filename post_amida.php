<?

$tmp=$_POST["tmp"];

if($tmp ==0){
	$st=3;
}elseif($tmp ==1){
	$st=2;
}elseif($tmp ==2){
	$st=1;
}elseif($tmp ==3){
	$st=0;
}


include_once("./amida_data{$st}.php");

for($s=0;$s<6;$s++){
	for($n=0;$n<3;$n++){
		$top	=$s*12;
		$left	=$n*20;

		$dat.="<div class=\"a_line ";
		$dat2.="<div class=\"b_line ";
		$dat3.="<div class=\"c_line ";
		$dat4.="<div class=\"d_line ";

		if($dat_ami[$s][$n] ==1){
		$dat.=" a_line_on";
		$dat2.=" b_line_on";
		$dat3.=" c_line_on";
		$dat4.=" d_line_on";
		}
		if($n ==2){
		$dat.=" a_line_end";
		$dat2.=" b_line_end";
		$dat3.=" c_line_end";
		$dat4.=" d_line_end";
		}
		$dat.="\" style=\"top:{$top}vw; left:{$left}vw;\"></div>";
		$dat2.="\" style=\"top:{$top}vw; left:{$left}vw;\"></div>";
		$dat3.="\" style=\"top:{$top}vw; left:{$left}vw;\"></div>";
		$dat4.="\" style=\"top:{$top}vw; left:{$left}vw;\"></div>";
	}
}

$dat.=$dat2.$dat3.$dat4;

echo $dat;
exit;
?>
