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
  background-color: #af0ad3;
}
</style>
  <title>Delete prisoners</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='white' width='1250' cellpadding='8' cellspacing='0' height='200'>
        <tr> 
            <td  align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
          
<?php
ob_start();
$link=mysql_connect("localhost","root","");
mysql_select_db("prisonpro",$link);
$result=mysql_query("select * from prisoner");
?>


<?php

//To delete:
if(isset($_POST["delete"])){
$id=$_POST["id"];
$delete=mysql_query("delete from prisonerdetails where id='$_POST[id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deleteprisoners1.php\"
	</script>";
}
else{
print "<script language=\"j<th>Prisoner id</th>
avascript\">
	alert(\"Not deleted!...\")
	location.href=\"deleteprisoners1.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' bgcolor='#5D6D7E' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE PRISONER RECORD</b></caption>
<tr bgcolor='#F50C0C'><th width='3%'>Prisoner id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Date of Birth</th>
<th width='10%'>Date in</th>
<th width='10%'>Date out</th>
<th width='15%'>Address</th>
<th width='10%'>State</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>



</tr>";
$i=1;
while($row=mysql_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='grey'>
<td>$i<input type=\"hidden\" name=\"id\" value=\"$row[id]\"></td>
<td>$row[Full_Name]</td>
<td>$row[DOB]</td>
<td>$row[datein]</td>
<td>$row[dateout]</td>
<td>$row[Address]</td>
<td>$row[states]</td>
<td>$row[Gender]</td>
<td>$row[Education]</td>
<td>$row[Marital]</td>
<td>$row[Offence]</td>


<td align='center'><input type=submit name=delete value=delete></td>
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
		  <td align="center" ><a href="officerpanel.php" target="_parent">officer Home <b></b></a>
			<a href="viewprisoners1.php" target="_parent">Back <b></b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          
	</table>
</body>
</head>
</html>

