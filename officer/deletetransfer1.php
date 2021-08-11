<html>
<head>
    <style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color:  #af0ad3;
}
</style>
  <title>Delete prisoner transfer</title>
  <link rel="stylesheet" media="screen" href="style1.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='white' width='800' cellpadding='8' cellspacing='0' height='200'>
        
           <tr> 
            <td   border="0" align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
<?php
ob_start();
$link=mysql_connect("localhost","root","");
mysql_select_db("prisonpro",$link);
$result=mysql_query("select * from transfer");
?>


<?php
//To delete:
if(isset($_POST["delete"])){
$id=$_POST["National_id"];
$delete=mysql_query("delete from transfer where National_id='$_POST[National_id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletetransfer1.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletetransfer1.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' bgcolor='#5D6D7E' border='0' cellpadding='3' cellspacing='2' bgcolor='#CD6155'>
<caption><b>DELETE TRANSFER </b></caption>
<tr bgcolor='#EC7063'>

<th width='10%'>Prisoner id</th>
<th width='20%'>From Prison</th>
<th width='20%'>To Prison</th>
<th width='20%'>Date of Transfer</th>


</tr>";
$i=1;
while($row=mysql_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='#AAB7B8'>
<td>$i<input type=\"hidden\" name=\"National_id\" value=\"$row[National_id]\"></td>
<td>$row[From_prison]</td>
<td>$row[To_prison]</td>
<td>$row[Dateoftransfer]</td>

<td align='center'><input type='submit' name='delete' value='delete'></td>
</tr>";
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center" ><a href="officerpanel.php" target="_parent">officer Home<b></b></a>
			<a href="viewtransfer1.php" target="_parent">View <b></b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
         
	</table>
</body>
</head>
</html>

