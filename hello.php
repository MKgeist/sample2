<?php echo "hello world!" ;?>

<br>

<?php   $a=3 ;
$b=7 ;
echo $a + $b ;
?>

<br>

<?php
$array_month=["１月","２月","３月","４月","５月","６月","７月","８月","９月","１０月","１１月","１２月"];
echo $array_month[7];
 ?>

<br>

<?php
$hello ="Hello, ";
$hello .="Masanobu";
$hello .="`s World!";

echo $hello ;

 ?>
<br>

<?php
$tech_boost="tech";
$tech_boost.=" boost";
echo $tech_boost;
 ?>
 <br>
 <?php
 $calendar_2018 = [
   "January" => "1月",
   "February" => "2月",
   "March" => "3月",
   "April" => "4月",
   "May" => "5月",
   "June" => "6月",
   "July" => "7月",
   "August" => "8月",
   "September" => "9月",
   "October" => "10月",
   "November" => "11月",
   "December" => "12月"
 ];

 // 12月を表示する
 echo $calendar_2018[December];  ?>

<br>

 <?php
$height = 230;
if ($height < 150) {
  echo '150cm未満の方はご乗車できません。';
} else if ($height >=200){
echo "200cm 以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
  }
  ?>
<br>
<?php
$weekday = "月曜";
switch ($weekday) {
  case "月曜":
    echo "可燃ゴミの日です。";
    break;
  case "水曜":
    echo "資源ゴミの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
  }
 ?>
 <br>
 <?php
 $total = 0;
 for ($i = 0 ; $i <= 100; $i++) {
   $total += $i;
 }
 echo $total;
  ?>
<br>
<p>PHP/Laravel 03 課題</p>
<br>
<?php
$name="masanobu";
if ($name = "masanobu") {
  echo "私は" . $name ;
  echo "です。";
}else{
  echo $name . "ではありません。";
}
 ?>

 <br>

 <?php
$total= $i;

for ($i = 0; $i <= 10000 ; $i++){
  $total += $i;
}
echo $total;
  ?>
<br>

<?php
$fruits = array("apple","orange","peach","banana","strawberry");
foreach ($fruits as $fruit){
  echo $fruit;
  echo "\n";
}
 ?>
 <br>
<?php
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n<br />";
  }
}
 ?>
