<?php
        $conn = mysqli_connect("localhost:3307", "root", "", "dwff");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
         
        // Taking all 4 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject =  $_REQUEST['subject'];
        $message = $_REQUEST['message'];
         
        // Performing insert query execution
        // here our table name is contact
        $sql = "INSERT INTO contact  VALUES ('$name',
            '$email','$subject','$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $email\n "
                . "$subject\n $message");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
		
        // Close connection
        mysqli_close($conn);
        ?>