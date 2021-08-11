<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//escape variable for security here or problem
        $Nid =$_POST['Nid'];
        $Fname = $_POST['Fname'];
        $date1 = $_POST['date1'];
       
        $date2 = $_POST['date2'];
        
        $date3 = $_POST['date3'];
       
        
        $address=$_POST['address'];
        $states =$_POST['states'];
        $Gender =$_POST['Gender'];
        $education=$_POST['education'];
        $status =$_POST['status'];
        $sentence =$_POST['sentence'];
        $offence =$_POST['offence'];
        $prison =$_POST['prison'];
        

//we are using mysql_query function. it returns a resource on true else False on error
       $sql="insert into prisoner set
                    id = '$Nid',
                    Full_Name = '$Fname',  
                    DOB = '$date1', 
                    datein = '$date2',             
                    dateout = '$date3',
                    Address = '$address',
                    states = '$states',
                    Gender = '$Gender',
                    Education = '$education',
                    Marital = '$status',
                    Offence = '$offence',
                    Sentence = '$sentence',
                    prison = '$prison'";  


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("added successfully...!");
						window.location = "prisoner.php";
					</script>