<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .container {
            text-align: center;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .container p {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        a {
            display: inline-block;
            margin: 10px 20px;
            padding: 15px 30px;
            background-color: #ffffff;
            color: #6a11cb;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        a:hover {
            background-color: #6a11cb;
            color: white;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        a:active {
            transform: scale(0.95);
        }
    </style>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="quiz _app\start.html">Start Quiz</a>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>