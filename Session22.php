<html>

<HEAD>
<TITLE>Employee Details</TITLE>
</HEAD>
<body>
<H4>Enter your details</H4>
<FORM METHOD=POST ACTION="EMP_DETAILS.PHP">
<TABLE>

<TR>
<TD>Employee ID</TD>
<TD><INPUT TYPE=""text" NAME="empid"></TD>
</TR>

<TR>
<TD>Name</TD>
<TD><INPUT TYPE=""text" NAME="Name"></TD>
</TR>

<TR>
<TD>Department</TD>
<TD>
<INPUT TYPE="radio" NAME="dept" VALUE="Finance">Finance
<INPUT TYPE="radio" NAME="dept" VALUE="Marketing">Marketing
<INPUT TYPE="radio" NAME="dept" VALUE="IT">IT
</TD>
</TR>
<TR>
<TD>Email</TD>
<TD><INPUT TYPE="text" NAME="email"</TD>
</TR>

</TABLE>
<BR>
<TD><INPUT TYPE="submit" VALUE="SUBMIT"></TD>
</FORM>
<?php
error_reporting(0);
$A=$_POST["empid"];
$B=$_POST["Name"];
$C=$_POST["dept"];
$D=$_POST["email"];
echo "YOUR PERSONAL DETAILS";
echo "<BR><BR>";
echo "EMPID: $A <BR>";
echo "NAME: $B <BR>";
echo "DEPARTMENT: $C <BR>";
echo "EMAIL: $D <BR>";

?>

</body>
</html>
