<?php
$num2 =0;
echo "The multiplication value of 15 * 15 is <BR>";
function multiply(){
	$num1=14;
	$num2=15;
	$num2=$num1 * $num2;
	echo $num2;
}
multiply();
echo "<BR> The value of the local variable on exiting the function is<BR>";
echo $num2;

$var1;
function sum(){
	static $var1 = 9;
	$var2 = $var1 + 12;
	
	echo "The value of the variable is : $var1<BR>";
	echo "The addition value of 9+12=";
	echo "$var2<BR>";
}
sum();

echo $_SERVER['SERVER_SOFTWARE'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['SERVER_PROTOCOL'];
echo $_SERVER['SERVER_PORT'];


$Month = 86400 + time();
setcookie('Name','Jerry',$Month);
echo "The cookie has been set.";

if(isset($_COOKIE['Name'])){
	$last = $_COOKIE['Name'];
	echo "Welcome back! <BR> Your name is".$last;
}else{
	echo "Welcome to our site!";
}

echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['HTTP_ACCEPT'];


?>

