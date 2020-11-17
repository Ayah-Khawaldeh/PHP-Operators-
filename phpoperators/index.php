<?php
/*1*/
function year_check($my_year)
{
   if ($my_year % 400 == 0)
      print("It is a leap year");
   if ($my_year % 4 == 0)
      print("It is a leap year");
   else if ($my_year % 100 == 0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2021;
year_check($my_year);

echo "<hr>";                          
/*2*/

$temp = 3;
if ($temp<20) {
    echo "winter";
}else{
    echo "summer";
}

echo "<hr>";  

/*3*/

$a=2;
$h=2;
if ($a==$h) {
    $sum = $a*3;
}else{
    $sum = $a+$h;
}
echo $sum;

echo "<hr>";
/*4*/

function test($n) 
{
     $x = 100;

     if ($n > $x)
     {
       return ($n - $x)*3;
     }
   return $x - $n;
}

$absolute =101;
echo test($absolute);

echo "<hr>";  
/*5*/
$q = 14;
$r = 14;

if(($q==30) or ($r==30) or ($q+$r==30)){
    echo  true;
}
else{    
    echo false;
}
 

/*6*/

/*7*/
$number = 14;

if ($number % 3 == 0){
    echo "multiple of three";
    }
    if ($number % 7 == 0){
    echo "multiple of seven";
    }
    echo "<hr>";  

/*8*/
/*9*/
/*10*/
$s =5;
$l = 9;
if(($a>=100 ) or ($l>=100 )){
    echo true;
}else{    
    echo false;
}
/*11*/
/*12*/
/*13*/

/*14*/



?>