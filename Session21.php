<html>
<body>
<B>ENTER YOUR PERSONAL DETAILS</B>
<FORM METHOD=GET ACTION="Details.php">
FIRST NAME:
<INPUT NAME="n1text" TYPE="TEXT"><BR>
LAST NAME:
<INPUT NAME="n2text" TYPE="TEXT"><BR>
ADDRESS:
<TEXTAREA NAME="n3text" ROW=1,COLUMNS=1000></TEXTAREA><BR>
CONTACT NO:
<INPUT NAME="n4text" TYPE="TEXT"><BR>
<INPUT TYPE="SUBMIT" NAME="SUBMIT" VALUE="SUBMIT"><BR>
</FORM>
<?php
error_reporting(0);
$A = $_GET["n1text"];
$B = $_GET["n2text"];
$C = $_GET["n3text"];
$D = $_GET["n4text"];
echo "YOUR PERSONAL DETAILS";
echo "<BR><BR>";
echo "FIRST NAME: $A <BR>";
echo "LASTNAME NAME: $B <BR>";
echo "ADRESS: $C <BR>";
echo "CONTACT NO.: $D <BR>";
?>
</body>
</html>
