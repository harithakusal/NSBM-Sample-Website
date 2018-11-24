<?php

      // connect to the database
      $con = mysqli_connect('localhost','root','','nsbm');

      if(mysqli_connect_errno())
      {
        die("Connection failed" . mysqli_connect_errno());
      }
      else
      {
        //echo "connection successful </br>";
      }


      if (isset($_POST['firstname'], $_POST['lastname'], $_POST['country'], $_POST['subject']))
      {
        // receive all input values from the form
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $country = $_POST['country'];
        $subject = $_POST['subject'];

          $insert = "INSERT INTO contact VALUES('{$fname}','{$lname}','{$country}','{$subject}')";

          $result = mysqli_query($con, $insert);

          if($result)
          {
            //echo "values inserted";
          }
          else
          {
            echo "insert failed";
          }


        mysqli_close($con);

        header("refresh:1 url=../contact.html");
      }





 ?>
