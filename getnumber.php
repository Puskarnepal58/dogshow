<?php
  
  $con = new mysqli('localhost', 'root', '', 'dogform');

  
  $randomNumber = rand(1, 5000);

  
  $result = $con->query("SELECT * FROM register WHERE reg_num=$randomNumber");
  if ($result->num_rows > 0) {
    
    while ($result->num_rows > 0) {
      $randomNumber = rand(1, 5000);
      $result = $con->query("SELECT * FROM register WHERE reg_num=$randomNumber");
    }
  }

  
  $stmt = $con->prepare("INSERT INTO register (reg_num) VALUES (?)");
  $stmt->bind_param("i", $randomNumber);
  $stmt->execute();

  echo $randomNumber; 
?>
