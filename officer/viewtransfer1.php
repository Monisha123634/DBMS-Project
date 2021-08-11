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
  background-color:  darkviolet;
}
</style>
  <title>View transfer record  OFFICER </title>
  <link rel="stylesheet" media="screen" href="style1.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='white' width='1350' cellpadding='8' cellspacing='0' height='200'>
         <tr> 
            <td   border="0" align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="transfer";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name ORDER BY National_id DESC LIMIT 0,7");
echo"<table align='center' bgcolor='#5D6D7E' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='#CD6155'>
<caption><h3>PRISONER TRANSFER  INFORMATION</h3></caption>
<tr bgcolor='#EC7063'>
<th width='3%'>Prisoner id</th>
<th width='15%'>From Prison</th>
<th width='15%'>To Prison</th>
<th width='15%'>Date of Transfer</th>
</tr>";

   while($row=mysql_fetch_array ($sel))
{
echo "<tr bgcolor='#AAB7B8'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='7%'>".$row ['From_prison']."</td>";
echo  "<td width='20%'>".$row ['To_prison']."</td>";
echo  "<td width='15%'>".$row ['Dateoftransfer']. "</td>";
echo '<td width="3%"><b><a href="deletetransfer1.php?id=' . $row['National_id'] . '">Delete</a></font></b></td>';
echo '<td width="3%"><b><a href="edit.php?id=' . $row['National_id'] .'">update</a></font></b></td>';

echo "</tr>";
}
echo"</table>";
?>


<br/>
			</td>
</table>
                    	<table align='center' border='0' width='1375' cellpadding='8' cellspacing='0' height='50'>
                            <tr>
			<td align="center" ><a href="officerpanel.php" target="_parent"><b>Panel Officer</b></a>|
                            <a href="../index.php" target="_parent"><b>Log out</b></a></td>
		
          </tr>
         
	</table>
</body>
</head>
</html>