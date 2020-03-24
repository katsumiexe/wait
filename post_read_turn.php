<?

$unit[0][0]=2;
$unit[0][1]=3;
$unit[0][2]=7;
$unit[0][3]=8;

$unit[1][0]=2;
$unit[1][1]=4;
$unit[1][2]=7;
$unit[1][3]=9;

$unit[2][0]=2;
$unit[2][1]=5;
$unit[2][2]=7;
$unit[2][3]=10;

$unit[3][0]=2;
$unit[3][1]=6;
$unit[3][2]=7;
$unit[3][3]=11;

$unit[4][0]=3;
$unit[4][1]=4;
$unit[4][2]=8;
$unit[4][3]=9;

$unit[5][0]=3;
$unit[5][1]=5;
$unit[5][2]=8;
$unit[5][3]=10;

$unit[6][0]=3;
$unit[6][1]=6;
$unit[6][2]=8;
$unit[6][3]=11;

$unit[7][0]=4;
$unit[7][1]=5;
$unit[7][2]=9;
$unit[7][3]=10;

$unit[8][0]=4;
$unit[8][1]=6;
$unit[8][2]=9;
$unit[8][3]=11;

$unit[9][0]=5;
$unit[9][1]=6;
$unit[9][2]=10;
$unit[9][3]=11;

$turn	=$_REQUEST["turn"];
$bet	=$_REQUEST["bet"];
$data_a	=$_REQUEST["data_a"];
$data_b	=$_REQUEST["data_b"];
$data_c	=$_REQUEST["data_c"];
$data_d	=$_REQUEST["data_d"];
$data_e	=$_REQUEST["data_e"];

$sort["p"]=$bet;
$sort["a"]=$data_a;
$sort["b"]=$data_b;
$sort["c"]=$data_c;
$sort["d"]=$data_d;

$p=0;
arsort($sort);
foreach($sort as $a1 => $a2){
    $check[$p]=$a2;
    $name[$p]=$a1;
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

$sort["z"]=$win;

if($unit[$win][0] == $data_e || $unit[$win][1] == $data_e){
	$sort["pts"]+=3;

}elseif($unit[$win][2] == $data_e || $unit[$win][3] == $data_e){
	$sort["pts"]-=2;

}elseif($data_e==0){
	$sort["pts"]+=4;

}elseif($data_e==1){
	$sort["pts"]+=3;

}elseif($data_e<7){
	$sort["pts"]+=1;

}else{
	$sort["pts"]+=2;
}

echo json_encode($sort);
?>
