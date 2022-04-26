<html>
    <head>
        <body>
   <?php
   $con = mysqli_connect("localhost","root","root","vansh");
   if(!$con){
       echo( "Failed to connect");
   }
   $sql = "INSERT INTO mobile_details VALUES('$_POST[mobinum]','$_POST[name]','$_POST[cost]')";
 if(  mysqli_query($con,$sql))
 {
 echo "one record inserted";
 }

 $result=mysqli_query($con,"Select * from mobile_details");
 echo '<table border =1>';
 echo '<tr>';
 echo'<th>mobile number </th>';
 echo'<th>user name </th>';
 echo'<th>cost </th>';
 echo '</tr>';



 while($row = mysqli_fetch_array($result)){
     echo'<tr>';
     echo'<th>'. $row['mobinum'].'</th>';
     echo'<th>'. $row['user_name'].'</th>';
     echo'<th>'. $row['cost'].'</th>';
     echo '</tr>';



 }
 echo '</table>';

   

   mysqli_close($con);
   ?>



        </body>
    </head>
</html>