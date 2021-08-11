<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//escape variable for security here or problem
        $id =$_POST['id'];
        $Fname = $_POST['Fname'];
        
        $age = $_POST['age'];
       
        
        $address=$_POST['address'];
        $Gender =$_POST['Gender'];
        $phone=$_POST['phone'];
        $relationship =$_POST['relationship'];
        $prisoner =$_POST['prisoner'];
        

//we are using mysql_query function. it returns a resource on true else False on error
       $sql="insert into dependents
                    id = '$Nid',
                    dname = '$Fname',  
                    age = '$age',             
                    Address = '$address',
                    phone = '$phone',
                    relationship = '$relationship',
                    
                    pname = '$prisoner'";  


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "userpanel.php";
					</script>