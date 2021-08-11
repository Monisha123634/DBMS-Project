
<html>
<head>
  <title>OFFICER INFORMATION </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='white' width='1300' cellpadding='8' cellspacing='0' height='200'>
<tr> 
            <td  align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
          <?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="officerdetails";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name ORDER BY id DESC LIMIT 0,7");
echo"<table align='center' width='100%' bgcolor='#5D6D7E' border='0'  cellpadding='3' cellspacing='2' bgcolor='#CD6155'>
<caption><h3>OFFICER INFORMATION</h3></caption>
<tr bgcolor='#EC7063'>
<th width='3%'>Officer id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Address</th>
<th width='10%'>Date of birth</th>
<th width='10%'>Gender</th>

<th width='10%'>Telephone</th>

<th width='10%'>Education</th>
<th width='10%'>Experience</th>


</tr>";

   while($row=mysql_fetch_array ($sel))
{
echo "<tr bgcolor='#AAB7B8'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['fullname']."</td>";
echo  "<td width='10%'>".$row ['address']."</td>";
echo  "<td width='10%'>".$row ['dateofbirth']. "</td>";
echo  "<td width='10%'>".$row ['gender']. "</td>";

echo  "<td width='3%'>" .$row ['telephone']."</td>";
echo  "<td width='10%'>".$row ['education']."</td>";
echo  "<td width='10%'>".$row ['experience']."</td>";




echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
</table>
    
          
                                  	<table align='center' border='0' bgcolor='#5C6BC0' width='1375' cellpadding='8' cellspacing='0' height='50'>
                                            <tr>
			<td align="center" bgcolor='#5C6BC0'><a href="officerpanel.php" target="_parent"><b>Officer home </b></a>|
                            <a href="../index.php" target="_parent"><b>Log out</b></a></td>
		
          </tr>
          
	</table>
</body>
</head>
</html>