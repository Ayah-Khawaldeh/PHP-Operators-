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

$temp =100;
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

function test1($n) 
{
     $x = 100;

     if ($n > $x)
     {
       return ($n - $x)*3;
     }
   return $x - $n;
}
echo test1(107)."<br>";
echo test1(60)."<br>";
echo test1(100)."<br>"; 

echo "<hr>";  
/*5*/
function test2($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test2(25,8));
var_dump( test2(25, 5));
var_dump( test2(20, 30));
var_dump(test2(800, 30)); 
echo "<hr>";  


/*6*/

function test3($x) 
{
  if (abs($x - 100) <= 10 || abs($x - 200) <= 10)
            return true;
     return false;
}

var_dump(test3(107));        
var_dump(test3(50));
var_dump(test3(90));  
echo "<hr>";

/*7*/
function test4($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test4(28));
var_dump(test4(50));
var_dump(test4(27));
var_dump(test4(37));
echo "<hr>";

/*8*/
 
function test0($m) 
{
  if ( substr($m,0, 2) == "if")
            {
                return $m;
            }
      return "if ".$m;
}
echo test0("if my study");

echo "<hr>";

/*9*/
function test5($s, $n) 
{
   return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo test5("Ayah", 1)."<br>";
echo test5("Ayah", 0)."<br>";
echo test5("Ayah", 4)."<br>";
echo test5("Ayah", 3)."<br>";

echo "<hr>";

/*10*/
function test6($x, $y) 
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump(test6(100, 200));
var_dump(test6(250, 70));
var_dump(test6(105, 190));
echo "<hr>";

/*11*/
function test7($x, $y) 
{
   return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
}

var_dump(test7(20, 84));
var_dump(test7(14, 50));
var_dump(test7(11, 45));
var_dump(test7(25, 40));
echo "<hr>";
/*12*/
function test8($x, $y, $z) 
{
  $max = max($x, max($y, $z));
  return $max;
}

echo test8(6, 2, 3)."<br>";
echo test8(1, 3, 2)."<br>";
echo test8(1, 8, 1)."<br>";
echo test8(1, 2, 100)."<br>";
echo "<hr>";
/*13*/
function test9($x, $y) 
{
   $n = 100;
   $val = abs($x - $n);
   $val2 = abs($y - $n);
   return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}

echo test9(85,60)."<br>";
echo test9(90, 30)."<br>";
echo test9(97, 97)."<br>";
echo "<hr>";
/*14*/

function test10($x, $y)
{
   return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
 }

var_dump(test10(17,10));
var_dump(test10(10,15));
var_dump(test10(1, 4));
echo "<hr>";

?>