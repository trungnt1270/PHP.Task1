<html>
<body>
<title>Intro PHP</title>
<?php

echo "Hello World";

// this is a single line comment

/* and this is a
multi line
comment */

echo "The date is:".gmdate("M d Y");


echo "Hello Everybody";

$str = "My name is Trung";


echo $str;

header('WWW-Authenticate: Negitiate');
header('WWW-Authenticate: NTLM', false);
header('Location: http://google.com');
header('Location: http://google.com',true,303);


	
?>
</body>
</html>
