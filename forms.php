<form action="forms.php" method="GET">
Name: <input type= "text" name= "fName">
Last: <input type= "text" name= "SurName">
<br>
<input type="submit">
</form>


<?php
echo $_GET["fName"];
echo $_REQUEST["SurName"];

?>