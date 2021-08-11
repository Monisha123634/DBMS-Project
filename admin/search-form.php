<html>
<head>
  
  <title>PRISONERS SEARCH RECORD</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table align="center" border="0" bgcolor="white" width="600" cellpadding="8" cellspacing="0" height="415">
          <tr> 
            <td  align ="center" colspan='3' height='1'><img src="e.png"></td>
            </tr>
      
          <tr>
            <td colspan="8" bgcolor="purple" height="3" align="center">
			
			
		<font size="4">  
		 <a href="../index.php">Logout</a> |
         <a href="adminpanel.php">Admin Panel</a>
          </font>
            </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><h1> Search Prisoners By ID</h1>
        <form action="search.php" method="get">
           <label>ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td>

    <tr>
     <td align="center" bgcolor="#FFFFFF"><h1> Search Officer/jailor By ID</h1>
        <form action="search1.php" method="get">
           <label> Officer ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>
<tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Search Visitor By prisoner ID</h1>
        <form action="search3.php" method="get">
           <label> Visitors ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

    <tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Seacrh Transfer By ID</h1>
        <form action="search2.php" method="get">
           <label>   Id :
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>



</table>
</body>
</html>