<html>
    <head>
        <body>
   <?php
   $con = mysqli_connect("localhost","root","root","vansh");
   if(!$con){
       echo( "Failed to connect");
   }
   $sql = "INSERT INTO Person VALUES('$_POST[fname]','$_POST[lname]','$_POST[age]')";
 if(  mysqli_query($con,$sql))
 {
 echo "one record inserted";
 }

 $result=mysqli_query($con,"Select*from Person");
 echo '<table border =1>';
 echo '<tr>';
 echo'<th>First Name </th>';
 echo'<th>last Name </th>';
 echo'<th>Age </th>';
 echo '</tr>';



 while($row = mysqli_fetch_array($result)){
     echo'<tr>';
     echo'<th>'. $row['fname'].'</th>';
     echo'<th>'. $row['lname'].'</th>';
     echo'<th>'. $row['age'].'</th>';
     echo '</tr>';



 }
 echo '</table>';

   

   mysqli_close($con);
   ?>



        </body>
    </head>
</html>