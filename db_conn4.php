
<?php 
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "web_app";

// create connection

$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection

if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    //echo "Successfull conectd";
}

// sql to create table
/*$sql = "CREATE TABLE IF NOT EXISTS  `user` (
    `userId` int(11) NOT  NULL AUTO_INCREMENT,
    `userName` varchar(30) NOT  NULL,
    `userEmail` varchar(60) NOT  NULL,
    `userPass` varchar(255) NOT  NULL,
    PRIMARY KEY (`userId`),
     UNIQUE KEY `userEmail` (`userEmail`)
   )";
       if($connect->query($sql) === TRUE) {
        echo "Table created successfully"  . "\n";
     } else {
        echo  "Error creating table";
     }*/

?>