<?php 
include ('./dbconn.php');


// $stmt = $conn->prepare("SELECT user_name,phone_number,Email FROM users");
// $stmt->execute();
// $data =$stmt->fetchAll();

 $data = $conn->query("SELECT user_name,phone_number,Email FROM users")->fetchALL();

// foreach ($data as $k){ 
 
//     echo "<br>" . $k['user_name'] . " " . $k['phone_number'] . " " .$k["Email"]. "<br>";

// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task 11 Mahi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Resturant Table</h2>
  <p>The table users:</p>            
  <table class="table">
    <thead>
     
      
    </thead>
    <tbody>
        <?php
        foreach ($data as $k){ 

       
      echo " <tr>
        <td>{$k['user_name']}</td>
        <td>{$k['phone_number']}</td>
        <td>{$k['Email']}</td>
      </tr>
      </tr>";
      }
        ?>
     
       
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
