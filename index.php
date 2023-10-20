<?php
$insert = false ;
if(isset($_POST['name'])){
error_reporting(0);
$server = "localhost";
$username = "root";
$password ="";

$con = mysqli_connect($server, $username , $password);

if(!$con){
die("connection to this database failed due to" .mysqli_connect_error());
}
// echo "Success connecting to the db"

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$age = $_POST['age'] ;


$sql = "INSERT INTO `jerry`.`jerry` (`name`, `email`, `age`) VALUES ('$name', '$email', '$age');";
// echo $sql;

if($con->query($sql) == true){
    // echo "successfully inserted" ;
    $insert = true ;

}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="navbar">
                <a href="#" class="logo"><img src="img/logo2.png" alt=""></a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <a href="#register" class="btn"  >Register</a>
                </div>
                <div class="content">
                    <div class="text">
                        <h2>lets ride the</h2>
                        <h1>Future</h1>
                        <?php
        if($insert == true){
     echo "<p>Form has been submitted</p>";
        }
        ?>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi consectetur consequuntur saepe magnam dignissimos.</p>
                        <a href="#" class="btn btn-primary">Pre order</a>
                    </div>
                    <div class="image">
                        <img src="img/ola.png" alt="">
                        <div class="specification">
                            <span>80km/hr <br>Speed</span>
                            <span>100km <br>Battery range</span>
                            <span>3.5hr <br>Charging time</span>
                        </div>
                    </div>
                </div>
        </div>
        <div class="sidebar">
            <div class="top">
                <span>T</span>
                <span>H</span>
                <span>E</span>
                <span>&nbsp;</span>
                <span>C</span>
                <span>O</span>
                <span>N</span>
                <span>C</span>
                <span>E</span>
                <span>P</span>
                <span>T</span>
            </div>
            <div class="bottom">
                <span>E</span>
                <span>L</span>
                <span>E</span>
                <span>C</span>
                <span>T</span>
                <span>R</span>
                <span>I</span>
                <span>C</span>
                <span>&nbsp;</span>
                <span>O</span>
                <span>L</span>
                <span>A</span>
            </div>        
        </div>
    </div>
    <!-- contact -->
    <div class="Container" id="register">
        <h1>Welcome to my login page</h1>
        <!-- <p>Form has been submitted</p> -->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter ur name">
            <input type="email" name="name" id="name" placeholder="Enter ur email">
            <input type="text" name="age" id="age" placeholder="Enter ur age">
            <button class="btn">Submit</button>
        </form>
    </div>
    <!-- INSERT INTO `jerry` (`sno`, `name`, `email`, `age`) VALUES ('1', 'testname', 'this@this.com', '23'); -->
    
</body>
</html>