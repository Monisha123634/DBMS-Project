
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login </h1>
            <form action="login1.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Select Usertype</p><select  type="text" name="cmbUser" >

		 <option >User</option>
                 <option >Police</option>
                 <option >Admin</option>
            </select>
        <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
     
     <br>
     <br>
     

            <input align="center" type="submit" name="submit" value="Login">
            </form>
        
        
        </div>
    
    </body>
</html>