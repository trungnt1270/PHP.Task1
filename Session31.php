<?php
$a= "hello\n";
$b= 'hello\n';

echo $a;
echo "<BR>";
echo $b;

$salary = 5000;
echo $salary;

$msg ="HELLO! How are you?";
echo $msg;

$n1 = 1000;
$n2 = 500;
$n3 = $n1 + $n2;
echo $n3;


$Fname = "John";
$Lname = "Smith";
$name =& $Fname;

echo $name;
echo"<BR>";
echo $Fname
echo"<BR>";

error_reporting(-1);
define("NAME", "John Smith");
echo NAME;
echo "<BR>";
echo name;
echo "<BR>";



define("NAME", "Michael Graff", TRUE);
echo NAME;
echo "<BR>";
echo name;
echo "<BR>";

?>

