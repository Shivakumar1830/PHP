<?php
$servername = "localhost";
$username = "root";
$password = "admin123";
$dataname= "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dataname);

// Check connection

//$sql = "CREATE TABLE user (id INT(6)  AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,phonenumber Bigint not null,email VARCHAR(50),password varchar(50) not null)";
$sql=insert into user(id,firstname,lastname,phonenumber,email.password)values(1,"shiva","M",8838046331,"shiva@gmail.com","abcefgh");
if ($conn->query($sql) === TRUE) {
    echo " data added successfully";
  } else {
    echo "Error addind data: " . $conn->error;
  }
  
  $conn->close();
  ?>

  

