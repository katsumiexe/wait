<?

$dat_ami[0][0]=1;
$dat_ami[0][1]=-1;
$dat_ami[0][2]=1;
$dat_ami[0][3]=-1;

$dat_ami[1][0]=0;
$dat_ami[1][1]=0;	
$dat_ami[1][2]=1;
$dat_ami[1][3]=-1;

$dat_ami[2][0]=0;
$dat_ami[2][1]=1;
$dat_ami[2][2]=-1;
$dat_ami[2][3]=0;

$dat_ami[3][0]=1;
$dat_ami[3][1]=-1;
$dat_ami[3][2]=0;
$dat_ami[3][3]=0;

$dat_ami[4][0]=0;
$dat_ami[4][1]=0;
$dat_ami[4][2]=1;
$dat_ami[4][3]=-1;

$dat_ami[5][0]=1;
$dat_ami[5][1]=-1;
$dat_ami[5][2]=0;
$dat_ami[5][3]=0;

$dat_ami[6][0]=0;
$dat_ami[6][1]=1;
$dat_ami[6][2]=-1;
$dat_ami[6][3]=0;

$dat_ami[7][0]=0;
$dat_ami[7][1]=0;
$dat_ami[7][2]=0;
$dat_ami[7][3]=0;

for($s=0;$s<8;$s++){
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
