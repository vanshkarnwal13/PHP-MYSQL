<!DOCTYPE html>
<html>
    <head>
    <style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h2>for deleting mobile number from the table</h2>

<?php
$con = mysqli_connect("localhost", "root", "root", "vansh");

if(!$con){
    echo( "Failed to connect");
}
$sql2 = "SELECT * FROM mobile_details";
$result = mysqli_query($con,$sql2);
 echo ' <form action="" method = "POST">
  Choose a Mobile number to delete record:
  <select name="mobinum" id="mobinum">';
  echo '<option> --Select Mobinum-- </option>';
    while ($row0 = mysqli_fetch_assoc($result)) {
        
        echo "<option value='".$row0['mobinum']."'>".$row0['mobinum']."</option>";
        
    }
    
echo '</select><br><br>
<input type="submit" value="Delete Record">
</form>';



mysqli_close($con);

 if (isset($_POST['mobinum'])){
     $mobinumm = $_POST['mobinum'];
    
 $conn2 = new mysqli("localhost", "root", "root", "vansh");
 $sql = "DELETE FROM mobile_details WHERE mobinum='$mobinumm'";

 if (mysqli_query($conn2,$sql) === TRUE) {
     echo $mobinumm;
  echo " Record deleted successfully.Refresh Page to see new list";
  
 }
mysqli_close($conn2);
}

?>

</body>
</html>