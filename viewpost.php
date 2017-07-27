<?php
   
    $post_query = "SELECT * FROM post";
    $post_result = mysqli_query($conn, $post_query);
    $count = mysqli_num_rows($post_result);
    if ($post_result->num_rows > 0) 
    {
      while($row = $post_result->fetch_assoc()) 
      {
         $post_id = $row["post_id"];
         $userid = $row["userinfo_id"];
         $feed = $row["post"];
         $time = $row["time"];
          

          $name_query = "SELECT firstname,lastname FROM userinfo WHERE userinfo_id = $userid";
          $name_result = $conn->query($name_query);
          if ($name_result->num_rows > 0) {
            while($row = $name_result->fetch_assoc()) {
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];

                ?>
                  <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                    <img src="img/default-image.png" alt="My Account" class="w3-left w3-circle w3-margin-right" style="width:60px">
                    <span class="w3-right w3-opacity"><?php echo $time;?></span>
                    <h4><?php echo $firstname." ".$lastname?></h4><br>
                    <hr class="w3-clear">
                    <p><?php echo $feed;?></p>  
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
                  </div>
                <?php      
            }
          }   
      }    
    } 

    else {
      echo "No Feeds Found";
    }   
?>