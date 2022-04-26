<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
<style>
   table,tr,td {
  border: 1px solid black;
}
</style>
</head>
<body style="text-align:center">
    <div >
    <h1>Response Page</h1>
    </div> 
    <div style="display:flex;justify-content:center;align-items:center;">
  <table>
        <tr>
            <td>Thank you for your survey</td>
        </tr>
        <tr>
            <td>
           <br>  Name : 
           <?php echo $_POST['name']; ?> 
          <br>  Email Id : 
          <?php echo $_POST['email']; ?>
           <br> No. of fruits per day : 
           <?php if (isset($_POST['0'])) echo "0";?> 
           <?php if (isset($_POST['1'])) echo "1";?> 
           <?php if (isset($_POST['2'])) echo "2";?> 
           <?php if (isset($_POST['m2'])) echo "More than 2";?>
          <br>  Favorite fruit : 
          <?php echo $_POST['fav']; ?>
            </td>
     

        </tr>
    </table>
    </div>
  

</body>
</html>