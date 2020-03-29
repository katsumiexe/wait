<?

$t_day1="2021-01-01 00:00:00";
$t_day2="2021-12-31 00:00:00";
$t_day3="2020-01-01 00:00:00";
$t_day4="2020-12-31 00:00:00";

$t_day5="2019-01-01 00:00:00";
$t_day6="2019-12-31 00:00:00";

$day0=date("Y",strtotime($t_day1));
$day1=date("Y",strtotime($t_day1."-1 year"));
$day2=date("Y",strtotime($t_day2."-1 year"));
$day3=date("Y",strtotime($t_day3."-1 year"));
$day4=date("Y",strtotime($t_day4."-1 year"));
$day5=date("Y",strtotime($t_day5."-1 year"));
$day6=date("Y",strtotime($t_day6."-1 year"));
print("0_".$day0."<br>\n");
print("1_".$day1."<br>\n");
print("2_".$day2."<br>\n");
print("3_".$day3."<br>\n");
print("4_".$day4."<br>\n");
print("5_".$day5."<br>\n");
print("6_".$day6."<br>\n");

?>

