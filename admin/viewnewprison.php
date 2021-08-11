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
  <title>View new  prison </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' width='1100' cellpadding='8' cellspacing='0' height='200'>
 <tr> 
            <td  align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
      
          <tr>
            <td valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="newprison";
mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name");
echo"<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>NEW PRISON INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>Prison ID</th>
<th width='9%'>Prison Name</th>
<th width='10%'>Location</th>
<th width='5%'>Open Date</th>
<th width='5%'>Contact no.</th>
<th width='5%'>Capacity</th>
</tr>";

   while($row=mysql_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='9%'>".$row ['pname']."</td>";
echo  "<td width='10%'>".$row ['location']."</td>";
echo  "<td width='5%'>".$row ['opendate']. "</td>";
echo  "<td width='5%'>".$row ['contact']. "</td>";
echo  "<td width='5%'>" .$row ['capacity']."</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">Admin home <b>|</b></a>
			<a href="'../index.php'" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor="" height='1'>
	
            </td>
          </tr>
	</table>
</body>
</head>
</html>