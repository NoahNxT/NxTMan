<?php 
  if( isset( $_REQUEST['a'] ))
  {
    $chosen_Letter = $_POST['a'];
    echo  $chosen_Letter;
    $send_Letter = "INSERT INTO	pickedletters	(Letter) VALUES ('$chosen_Letter')";  
    if (mysqli_query($conn, $send_Letter)) 
    {
      echo "New record created successfully";
    }else {
      echo "Error: " . $send_Letter . "" . mysqli_error($conn);
   }
  }   
  ?>