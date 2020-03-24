<?
$turn	=$_REQUEST["turn"];
$bet	=$_REQUEST["bet"];
$data_a	=$_REQUEST["data_a"];
$data_b	=$_REQUEST["data_b"];
$data_c	=$_REQUEST["data_c"];
$data_d	=$_REQUEST["data_d"];

$card	=$_REQUEST["card"];

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



echo json_encode($sort);
?>
