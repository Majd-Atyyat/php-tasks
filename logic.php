<!-- 1 -->
<?php
echo"<h3>Q1</h3>";
echo "<br>";
?>
<!-- 1starts here -->
<?php
   function year_check($my_year){
      if ($my_year % 400 == 0)
         print("It is a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   $my_year = 2023;
   year_check($my_year);
?>

<?php
echo "<br>";
function checkLeapYear($year) {
    if (checkdate(2, 29, $year) ==true){
        echo "$year is a leap year.";
    }
    else {
        echo "$year is not a leap year."; 
    }
}
checkLeapYear(2022);
?>
<!-- 2 -->
<?php
echo"<h3>Q2</h3>";
echo "<br>";
?>
<!-- 2starts here -->
<?php
   function checkTemp($temperature){
      if ($temperature < 20 ){
        print("It is Winter Time!");
      }
        
      else{
        print("It is Summer Time <3 <3 <3");
      }
         
   }
   checkTemp(29);
?>

<!-- 3 -->
<?php
echo"<h3>Q3</h3>";
echo "<br>";
?>
<!-- 3starts here -->
<?php
   function sum($int1,$int2){
    if ($int1==$int2){
        $result=($int1+$int2)*3;
        return $result;
    }
    else {
        return $int1+$int2;
    }
     
         
   }
    echo sum(1,3)."<br>";
    echo sum(1,1);
?>

<!-- 4 -->
<?php
echo"<h3>Q4</h3>";
echo "<br>";
?>
<!-- 4starts here -->
<?php
   function cheakSum($int1,$int2){
    if ($int1+$int2==30){
        return $int1+$int2;
        
    }
    else {
        return "false";
    }
     
         
   }
    echo cheakSum(1,3)."<br>";
    echo cheakSum(20,10);

    
?>

<!-- 5 -->
<?php
echo"<h3>Q5</h3>";
echo "<br>";
?>
<!-- 5starts here -->
<?php
   function multiple($int){
    if ($int %3 ==0){
        return $int;
        
    }
    else {
        return "false";
    }
     
         
   }
    echo multiple(3)."<br>";
    echo multiple(22);

?>

<!-- 6 -->
<?php
echo"<h3>Q6</h3>";
echo "<br>";
?>
<!-- 6starts here -->
<?php
   function rangeInt($int){
    if ($int >=20 && $int<=50){
        return "true";
        
    }
    else {
        return "false";
    }
     
         
   }
    echo rangeInt(3)."<br>";
    echo rangeInt(22);

?>

<!-- 7 -->
<?php
echo"<h3>Q7</h3>";
echo "<br>";
?>
<!-- 7starts here -->
<?php
   function largestNum($int1,$int2,$int3){
    if ($int1 >$int2 && $int1>$int3){
        return $int1;
        
    }
    else if ($int2>$int1 && $int2>$int3){
        return $int2;
    }
      

        else{
            return $int3;
        }
     
         
   }
    echo largestNum(3,6,7)."<br>";
    echo largestNum(22,8,9);

?>


<!-- 8 -->
<?php
echo"<h3>Q8</h3>";
echo "<br>";
?>
<!-- 8starts here -->
<?php
   function electricity_bill($units) {
    $first_unit_cost = 2.5;
    $second_unit_cost = 5;
    $third_unit_cost = 6.2;
    $fourth_unit_cost = 7.5;

    if($units <= 50) {
        $bill = $units * $first_unit_cost;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $first_unit_cost;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $second_unit_cost);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * $first_unit_cost) + (100 * $second_unit_cost);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $third_unit_cost);
    }
    else {
        $temp = (50 * $first_unit_cost) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourth_unit_cost);
    }
    return number_format($bill, 2, '.', ',');
}
echo electricity_bill(400);
?>


<!-- 9 -->
<?php
echo"<h3>Q8</h3>";
echo "<br>";
?>
<!-- 9starts here -->
<?php
function calculator($int1,$int2,$operation){
    if ($operation=="add"||$operation=="+") {
        return $int1+$int2;
        
    }
    else if ($operation=="subtract"||$operation=="-"){
        return $int1-$int2;
    }
    else if ($operation=="multiply"||$operation=="*"){
        return $int1*$int2;
    }
    else if ($operation=="division"||$operation=="/"){
        return $int1/$int2;
    }

}
    echo calculator(3,6,"/")."<br>";


?>

<!-- 10 -->
<?php
echo"<h3>Q10</h3>";
echo "<br>";
?>
<!-- 10starts here -->
<?php
function eligibility($age){
    if ($age>=18) {
        return "eligible to vote.";
        
    }
   else{
    return "not eligible to vote."; 
}
}
    echo eligibility(19)."<br>";
    echo eligibility(17);

?>

<!-- 11 -->
<?php
echo"<h3>Q11</h3>";
echo "<br>";
?>
<!-- 11 starts here -->
<?php
function cheakNum($num){
    if ($num < 0) {
        return "Negative.";
        
    }
   else if($num >0){
    return "Positive"; 
}
else if($num == 0){
    return "Zero"; 
}
}
echo cheakNum(19)."<br>";
echo cheakNum(-1)."<br>";
echo cheakNum(0)."<br>";


?>

<!-- 12 -->
<?php
echo"<h3>Q12</h3>";
echo "<br>";
?>
<!-- 12 starts here -->
<?php
function avg($marks){
$avg= array_sum($marks)/count($marks);
if ($avg <= 60){
    return "F";
}
else if ($avg <= 70){
    return "D";
}
else if ($avg <= 80){
    return "C";
}
else if ($avg <= 90){
    return "B";
}
else if ($avg <= 100){
    return "B";
}
}
$marks=[81,90,95,80,91];

echo avg($marks);

?>
