<!-- Object-Oriented Start-->
<?php

    $servername =  "localhost"; //Hostname
    $username = "root"; //Admin Username
    $password = ""; //Admin Password
    $dbname = "mysqldb"; //Database Name

    //Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    //Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->error);
    }
    echo "Connected Successfully."
?>
<!-- Object-Oriented End-->

<!-- Procedural Start -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysqldb";

    //Create Connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    //Check Connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected Successfully.";
?>
<!-- Procedural End -->

<!-- PDO Start -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysqldb";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=mysqldb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully.";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
?>
<!-- PDO End -->