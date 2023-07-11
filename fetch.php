<?php
    session_start();
    $_SESSION['fname'] = $_POST['firstname'];
    $_SESSION['lname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['mail'];
    $_SESSION['number'] = $_POST['phone'];
    $_SESSION['cit'] = $_POST['city'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration page</title>
    <link rel="stylesheet" href="style.css">
    <style>
    a{
      text-decoration: none;
      color: #fff;
      text-transform: uppercase;
    }
        input{
            width:800px;
            height:30px;
            background-color: white;
        }
        .button {
            background-color:red;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
          .container{
            margin: auto;
            height:450px;
            width:840px;
            border:5px solid rgb(10, 10, 10);
            border-radius: 20px;
            padding:20px;
            background-color: rgb(132, 210, 234);
          }
          h1{
            color: black;
          }
    </style>
</head>
<body>
  <div class="banner">
    <div class="navbar1">
        <!-- <img src="logo2.png" class="logo" alt="DWFF"> -->
        <a href="index.html">
            <h3>DWFF</h3>
            </a>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="speakers/speakers.html">Event</a></li>
          <li><a href="schedule/schedule.html">Schedule</a></li>
          <li><a href="register1.php">Register</a></li>
          <li><a href="ticket.php">Ticket</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="faq.html">FAQ</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>REGISTERATION</h1>
        <h1>ENTER TEAM DETAILS</h1>
        <form action="fetch2.php" method="POST">
        <input type="text" name="scriptwritername" placeholder="Scriptwriter name" size="50"><br><br>
        <input type="text" name="directorname" placeholder=" Director name" size="50"><br><br>
        <input type ="text" name="editorname" placeholder="Editor name" size="50"><br><br>
        <input type="text" name="actorname" placeholder="Actor name" size="50"><br> <br> <br>
        <button class="button" type ="submit" name="submit">REGISTER</button> <br> <br>
        </form>
    </div>
  </div>
</body>
</html>
