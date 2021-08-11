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
  <title>View Prisoners  </title>
   <link rel="stylesheet" media="screen" href="login_1.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='white' width='1300' cellpadding='8' cellspacing='0' height='200'>
<tr> 
            <td   border="0" align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="prisoner";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name ORDER BY id DESC LIMIT 0,7");
echo"<table align='center' width='100%' bgcolor='#5D6D7E' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>PRISONER INFORMATION</h3></caption>
<tr bgcolor='#F50C0C'>
<th width='3%'>Prisoner id</th>
<th width='10%'>Full Name</th>
<th width='10%'>Date of Birth</th>
<th width='10%'>Date in</th>
<th width='10%'>Date out</th>
<th width='15%'>Address</th>
<th width='10%'>State</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>
<th width='10%'>Prison</th>
</tr>";

   while($row=mysql_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['Full_Name']."</td>";
echo  "<td width='10%'>".$row ['DOB']."</td>";
echo  "<td width='10%'>".$row ['datein']."</td>";
echo  "<td width='10%'>".$row ['dateout']."</td>";
echo  "<td width='10%'>".$row ['Address']. "</td>";
echo  "<td width='10%'>".$row ['states']."</td>";
echo  "<td width='3%'>" .$row ['Gender']."</td>";
echo  "<td width='10%'>".$row ['Education']."</td>";
echo  "<td width='10%'>".$row ['Marital']."</td>";
echo  "<td width='10%'>".$row ['Offence']. "</td>";
echo  "<td width='10%'>".$row ['prison']."</td>";
echo '<td width="3%"><b><a href="deleteprisoners1.php?id=' . $row['id'] . '">Delete</a></font></b></td>';


echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="officerpanel.php" target="_parent">Officer Admin <b></b></a>|
			<a href="../index.php" target="_parent">Log out</a></td>
		
          </tr>
        
	</table>
</body>
</head>
</html>