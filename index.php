<?php
$insert = false;
if (isset($_POST['name'])){
//if(isset($_POST)['name'])){

  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server,$username, $password);

  if(!$con){
      die("connection to this database failed due to" .
      mysqli_connect_error());
  }
  //echo "success connecting to the db"
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$gender', '$phone', '$desc', current_timestamp());";
//echo $sql;

if($con->query($sql) == true){
   //echo "Successfully Inserted";
   //echo"Thank you!";
   $insert = true;

}
else{
    echo "ERROR: $sql <br> $con->error";
    //$not_insert == true;
}
$con->close();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kamana diary & bakery cafe</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome to kamana diary & bakery cafe</h1>
        <p>enter your details to config you!</p>
    <?php
    if($insert == true){
      echo"<p class='SubmitMsg'>Thanks for submitting your form.</p>";
    }
     ?> 


        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">Submit</button>
        <button class="btn">Reset</button>
        </form>
    </div>

    <script src="index.js"></script>
   <!---- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'text name', '23', 'male', 'this@this.com', '989898989', 'this is my first php ever admin message', current_timestamp()); -->
</body>
</html>