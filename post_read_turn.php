<?

$unit_data[0][0]=2;
$unit_data[0][1]=3;
$unit_data[0][2]=7;
$unit_data[0][3]=8;

$unit_data[1][0]=2;
$unit_data[1][1]=4;
$unit_data[1][2]=7;
$unit_data[1][3]=9;

$unit_data[2][0]=2;
$unit_data[2][1]=5;
$unit_data[2][2]=7;
$unit_data[2][3]=10;

$unit_data[3][0]=2;
$unit_data[3][1]=6;
$unit_data[3][2]=7;
$unit_data[3][3]=11;

$unit_data[4][0]=3;
$unit_data[4][1]=4;
$unit_data[4][2]=8;
$unit_data[4][3]=9;

$unit_data[5][0]=3;
$unit_data[5][1]=5;
$unit_data[5][2]=8;
$unit_data[5][3]=10;

$unit_data[6][0]=3;
$unit_data[6][1]=6;
$unit_data[6][2]=8;
$unit_data[6][3]=11;

$unit_data[7][0]=4;
$unit_data[7][1]=5;
$unit_data[7][2]=9;
$unit_data[7][3]=10;

$unit_data[8][0]=4;
$unit_data[8][1]=6;
$unit_data[8][2]=9;
$unit_data[8][3]=11;

$unit_data[9][0]=5;
$unit_data[9][1]=6;
$unit_data[9][2]=10;
$unit_data[9][3]=11;

$turn		=$_POST["turn"];
$sort["p"]	=$_POST["bet"];

$sort["a"]	=$_POST["data_a"];
$sort["b"]	=$_POST["data_b"];
$sort["c"]	=$_POST["data_c"];
$sort["d"]	=$_POST["data_d"];

$unit["a"]	=$_POST["unit_a"];
$unit["b"]	=$_POST["unit_b"];
$unit["c"]	=$_POST["unit_c"];
$unit["d"]	=$_POST["unit_d"];
$unit["p"]	=$_POST["unit_p"];

$card		=$_POST["data_e"];

$p=0;
arsort($sort);

foreach($sort as $a1 => $a2){
    $check[$p]	=$a2;
    $name[$p]	=$a1;
    $p++;
} 

if($check[0] >$check[1]){
    $win=$name[0];

}elseif($check[1] >$check[2] && $check[2] >$check[3]){
    $win=$name[2];

}elseif($check[1] == $check[2] && $check[3] >$check[4]){
    $win=$name[3];

}elseif($check[1] == $check[2] && $check[2] == $check[3] && $check[3] != $check[4]){
    $win=$name[4];

}elseif($check[2] == $check[3] && $check[3] != $check[4]){
    $win=$name[4];

}else{
    $win="l";
}

if($win!=1){	
	$sort["z"]=$win;
}

if($unit_data[$unit[$win]][0] == $card || $unit_data[$unit[$win]][1] == $card){
	$sort["pts"]=3;

}elseif($unit_data[$unit[$win]][2] == $card || $unit_data[$unit[$win]][3] == $card){
	$sort["pts"]=(-2);

}elseif($card==0){
	$sort["pts"]=4;

}elseif($card==1){
	$sort["pts"]=3;
	
}elseif($card<7){
	$sort["pts"]=1;

}else{
	$sort["pts"]=2;
}


echo json_encode($sort);
?>
