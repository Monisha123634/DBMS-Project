<html>
<head>
  <title>View new  prison </title>
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
$tbl_name="newprison";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name ORDER BY id  LIMIT 0,7");
echo"<table align='center' width='100%' bgcolor='#5D6D7E' border='0'  cellpadding='3' cellspacing='2' bgcolor='#CD6155'>
<caption><h3>NEW PRISON INFORMATION</h3></caption>
<tr bgcolor='#EC7063'>
<th width='3%'>Prison Number</th>
<th width='3%'>Prison Name</th>
<th width='10%'>Location</th>
<th width='15%'>Open Date</th>
<th width='10%'>Contact</th>
<th width='10%'>Capacity</th>



</tr>";

   while($row=mysql_fetch_array ($sel))
{
echo "<tr bgcolor='#AAB7B8'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['pname']."</td>";
echo  "<td width='10%'>".$row ['location']."</td>";
echo  "<td width='10%'>".$row ['opendate']. "</td>";
echo  "<td width='10%'>".$row ['contact']. "</td>";
echo  "<td width='3%'>" .$row ['capacity']."</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
</table>
          	<table align='center' border='0' bgcolor='#5C6BC0' width='1300' cellpadding='8' cellspacing='0' height='50'>

          <tr>
			<td align="center" bgcolor='#5C6BC0'><a href="officerpanel.php" target="_parent">Officer  </a>|
     
			<a href="../index.php" target="_parent">Log out</a></td>
		
          </tr>
         
	</table>
</body>
</head>
</html>