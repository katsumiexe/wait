<?

$tmp=$_POST["tmp"];
include_once("./amida_data{$tmp}.php");

for($s=0;$s<6;$s++){
	for($n=0;$n<3;$n++){
		$top	=$s*12;
		$left	=$n*20;
		$left_r	=(2-$n)*20;

		$dat.="<div id=\"a_{$n}_{$s}\" class=\"a_line ";
		$dat2.="<div id=\"b_{$n}_{$s}\" class=\"b_line ";
		$dat3.="<div id=\"c_{$n}_{$s}\" class=\"c_line ";
		$dat4.="<div id=\"d_{$n}_{$s}\" class=\"d_line ";
		$dat5.="<div id=\"e_{$n}_{$s}\" class=\"e_line ";

		if($dat_ami[$s][$n] ==1){
			$dat.=" a_line_on";
		}
		if($n ==2){
			$dat.=" a_line_end";
			$dat5.=" a_line_end";
		}
		$dat.="\" style=\"top:{$top}vw; left:{$left}vw;\"></div>";
		$dat2.="\" style=\"top:{$top}vw; left:{$left}vw;\"></div>";
		$dat3.="\" style=\"top:{$top}vw; left:{$left}vw;\"></div>";
		$dat4.="\" style=\"top:{$top}vw; right:{$left_r}vw;\"></div>";
		$dat5.="\" style=\"top:{$top}vw; right:{$left_r}vw;\"></div>";

	}
}

$dat.=$dat2.$dat3.$dat4.$dat5;

echo $dat;
exit;
?>
