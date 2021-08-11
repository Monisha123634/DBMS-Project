

    <?php

$Nid=$_REQUEST['id'];
 function valid($Nid, $From, $To, $dateoftransfer)
 {}
 $backpic = "u_1.jpg";

?>

<html>
<head>
<title>update</title>



         <style type="text/css">

body {
background-image: url('<?php echo $backpic;?>');
}
</style>
   
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <table  height="500" border="0" align="center">
        
<tr>
<td colspan="2" align="center"><b><font size="5" color='red'>EDIT TRANSFER  RECORDS </font></b></td>
</tr>

    <tr>


 <td width="179"><b><font size="4"color='#663300'>prisoner id*<em></em></font></b></td>
<td><label>
<input type="text" name="Nid" required class="reg_fields" value="<?php echo $Nid; ?>"/>
</label></td>
</tr>


<tr>
<td width="50"><b><font font size="4" color='#663300'>From<em>*</em></font></b></td>
 <td style="margin: 0; padding: 0;">
                    <select id="From" name="From" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;" >
                     <option v>--Select prison name--</option>
                   <?php
                   mysql_connect('localhost', 'root', '');
                   mysql_select_db('prisonpro');
                   $msql = mysql_query("SELECT * FROM newprison");
                    while($m_row = mysql_fetch_array($msql))        
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                    ?>
                     </select></td>

 
<tr>
    <td width="200"><b><font font size="4" color='#663300'>To<em>*</em></font></b></td>

    <td style="margin: 0; padding: 0;">
                    <select id="To" name="To" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display block;" >
                     <option>--Select prison name--</option>
                   <?php
                   mysql_connect('localhost', 'root', '');
                   mysql_select_db('prisonpro');
                   $msql = mysql_query("SELECT * FROM newprison");
                    while($m_row = mysql_fetch_array($msql))        
                    echo("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                    ?>
                     </select></td>

</tr>

<tr>
<td width="200"><b><font font size="4" color='#663300'>date of transfer<em>*</em></font></b></td>
<td><label>
<input type="date" name="dateoftransfer" class="reg_fields" required />
</label></td>
</tr>

<tr align="center">
<td><label>
<input type="submit" name="submit" value="Update">
</label></td>
<td align="center"><a href='viewtransfer1.php'><input type="button" name="back" value="Back"></a></td>
</tr>
</table>
</form>
</body>
</html>
<?php


$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="transfer";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");


 if (isset($_POST['submit']))
 {

     if (is_numeric($_POST['Nid']))
    {


    //use this one from form
    $Nid = $_POST['Nid'];
    $From = mysql_real_escape_string(htmlspecialchars($_POST['From']));
    $To = mysql_real_escape_string(htmlspecialchars($_POST['To']));
    $dateoftransfer = mysql_real_escape_string(htmlspecialchars($_POST['dateoftransfer']));
//use this from database 
    if ($Nid == ''  ||$From == '' || $To == '' ||$dateoftransfer == '' )	
    {
    $error = 'ERROR: Please fill in all required fields!';
// use this 2nd from database
    valid($Nid, $From, $To, $dateoftransfer);

    }
    else
    {
// use code update db
    mysql_query("UPDATE transfer SET  From_prison='$From', 
	To_prison='$To' , Dateoftransfer='$dateoftransfer'  WHERE National_id='$Nid'")
    or die(mysql_error());
    header("Location: viewtransfer1.php");
    }
  }
  else
  {

     echo 'Error!';
   }
 }