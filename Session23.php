<html>
<FORM METHOD='get' action='continent.php'>
Specify the continent:
<SELECT TYPE='LISTBOX' NAME='continent'>
<OPTION>ASIA</OPTION>
<OPTION>AUSTRALIA</OPTION>
<OPTION>EUROPE</OPTION>
</select>
<BR><BR>
<INPUT TYPE=HIDDEN NAME=Asia>
<INPUT TYPE=HIDDEN NAME=Australia>
<INPUT TYPE=HIDDEN NAME=Europe>
<BR><INPUT TYPE=SUBMIT>
<BODY>
<?php
$A = $_GET["Asia"];
$B = $_GET["Australia"];
$C = $_GET["Europe"];
$Name=$_GET['continent'];
echo "<BR>";
echo "Continents:<BR><BR> Asia <BR> Australia <BR> Europe <BR> <BR>";
echo "The continent you have selected is: $Name";
?>
</BODY>
<FORM>
<html>