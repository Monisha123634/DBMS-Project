<?php
//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

//we specify here the Database name we are using
mysql_select_db('prisonpro');
$Nid=$_POST['Nid'];
$Phone=$_POST['Phone'];
$From=$_POST['from'];
$To=$_POST['to'];
$dot=$_POST['date'];

//Protecting form submitting an empty data

if (!$Nid || !$Phone || !$From  || !$To || !$dot )
	{
	echo'<body bgcolor="white">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."back" . "<a href='officertransfer.php'>"."  ". "here"  . "</a>"  . "  " . "to Officer Transfer"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}
//It wiil insert a row to our recruit details`
$sql = "INSERT INTO `officertransfer` (`National_id`,`Telephone`, `From_prison`,`To_prison`,`Dateoftransfer`) 
	VALUES ('{$Nid}', '{$Phone}', '{$From}', '{$To}', '{$dot}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
?>
					<script type="text/javascript">
						alert(" Added    thank you");
						window.location = "officertransfer.php";
					</script>
					<?php
//close of connection
mysql_close($conn);
?>