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

<h2>Data whose mobile number whose cost is greater than Rs5000/-</h2>

<?php
$con = mysqli_connect("localhost", "root", "root", "vansh");

if(!$con){
    echo( "Failed to connect");
}

$sql = "SELECT * FROM mobile_details WHERE cost>5000";
$sql2 = "SELECT * FROM mobile_details";
$result = mysqli_query($con,$sql);
//$result2 = $conn->query($sql2);



if ($result->num_rows > 0) {
    echo "<table style='width:50%;'><tr>";
    echo "<th>Mobile Number</th>";
    echo "<th>user name</th>";
    echo "<th>cost</th></tr>";

  while ($row = $result -> fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['mobinum']."</td>";
      echo "<td>".$row['user_name']."</td>";
      echo "<td>".$row['cost']."</td>";
      echo "</tr>";
  }
  echo "</table><br><br>";
}
//  echo ' <form action="" method = "POST">
//   <label for="cars">Choose a Mobinum to delete record:</label>
//   <select name="mobileNum" id="mobileNum">';
//   echo '<option> --Select Mobinum-- </option>';
//     while ($row2 = $result2 -> fetch_assoc()) {
        
//         echo "<option value='".$row2['Mobinum']."'>".$row2['Mobinum']."</option>";
        
//     }
    
//  echo '</select><br><br>
//   <input type="submit" value="Delete Record">
// </form>';

// }else {
//     echo "0 results";
//   }

mysqli_close($con);
?>
<!-- // if (isset($_POST['mobileNum'])){
//     $mobinum = $_POST['mobileNum'];
    
// $conn2 = new mysqli("localhost", "root", "", "mobile_data");
// if ($conn2->connect_error) {
//   die("Connection failed: " . $conn2->connect_error);
// }

// $sql = "DELETE FROM mobile_details WHERE Mobinum='$_POST['mobileNum']'";

// if ($conn2->query($sql) === TRUE) {
//     echo $mobinum;
//   echo " Record deleted successfully.Refresh Page to see new list";
  
// } else {
//   echo "Error deleting record: " . $conn2->error;
// }

// $conn2->close();
// } -->

</body>
</html>