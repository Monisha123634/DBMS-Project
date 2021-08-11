
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
  <title>View visitors </title>
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
$tbl_name="visitor";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name ORDER BY id DESC LIMIT 0,7");
echo"<table align='center' width='100%' bgcolor='#5D6D7E' border='0' cellpadding='3' cellspacing='2' bgcolor='#F50C0C'>
<caption><h3>VISITORS INFORMATION</h3></caption>
<tr bgcolor='#F50C0C'>
<th width='3%'>Prisoner id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Address</th>
<th width='10%'>Date of visit</th>
<th width='10%'>Time in</th>
<th width='10%'>Time out</th>
<th width='10%'>Relationship</th>
<th width='10%'>Telephone</th>
<th width='3%'>Prisoner Name</th>

</tr>";

   while($row=mysql_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['fullname']."</td>";
echo  "<td width='10%'>".$row ['address']."</td>";
echo  "<td width='10%'>".$row ['dateofvisit']. "</td>";
echo  "<td width='10%'>".$row ['timein']. "</td>";
echo  "<td width='10%'>".$row ['timeout']. "</td>";
echo  "<td width='10%'>".$row ['relationship']."</td>";
echo  "<td width='3%'>" .$row ['telephone']."</td>";
echo  "<td width='10%'>".$row ['prisoner']."</td>";



echo "</tr>";
}
echo"</table>";

?>

            <br/>
        </table>
         	<table align='center' border='0' width='1375' cellpadding='8' cellspacing='0' height='50'>

          <tr>
			<td align="center"><a href="officerpanel.php" target="_parent">Officer Admin <b></b></a>|
			<a href="../index.php" target="_parent">Log out</a></td>
		
          </tr>
        
	</table>
</body>
</head>
</html>