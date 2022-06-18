<!-- 負責運算的網頁 -->
<?php

// 兩種接收方式
if(empty($_GET)){ //判斷$_GET是否為空
  $height=$_POST['height'];
  $weight=$_POST['weight'];
}else{
  $height=$_GET['height'];
  $weight=$_GET['weight'];
};

// 計算
$bmi=round($weight/(($height/100)*($height/100)),1); // 取小數點後一位

// 判斷
$result='';

if($bmi>=35){
  $result= "重度肥胖";
}else if($bmi >= 30 && $bmi < 35){
  $result= "中度肥胖";
}else if ($bmi >= 27 && $bmi < 30){
  $result= "輕度肥胖";
}else if($bmi >=24 && $bmi < 27 ){
  $result= "過重";
}else if ($bmi >=18.5 && $bmi < 24){
  $result= "健康";
}else if($bmi < 18.5 ){
  $result= "過輕";
}

// 導向
header("location:Result.html?bmi=$bmi&result=$result");

?>