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


<!DOCTYPE html>
<!---CREATED--BY--DILLI-HANG-RAI--FROM--APRIL 19-->
<html lang="en">
<head>

    <!---META-TAGS--------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Kamana Diary & Bakery Contact</title>
     <!--------CONTACT-PAGE---CSS-STYLESHEETS-->
     <!--MAIN--CSS-STYLESHEET-->
     <link rel="stylesheet" href="contact-style.css">

     <!---CONTACT-MEDIA-QUERY-CSS-->
     <link rel="stylesheet" href="contact-media-query.css">


     <!---------------------------------------------------------------------------FONTSAWESOME--ICONS--------------------------------------------------------------------------------------------->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <!----------------------------------------------------------------------------GOOGLE-FONTS--------------------------------------------------------------------------------------------------->
     <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Roboto+Condensed&display=swap" rel="stylesheet"> 

    </head>
    <body>

        <headings>
            <!------------------------------------------------------------------------TOP-MOST-NAV-HEADER--WITH-LOGO------------------------------------------------------------------------------------->
            <div class="topnav" id="myTopnav">
              <section class="top-most-head">
              <nav>
              <img class="logo-head" src="kamana-org-website-logo-.png" alt="kamana-dairy-cafe-logo">
              <a href="#home" class="active">Reservation</a>
              <a href="contact.html">Contact</a>
              <a href="gallery.html">Gallery</a>
              <a href="about-us.html">About Us</a>
              <a href="menu.html">Menu</a>
              <a href="index.html">Home</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
             </nav>
             </section>
             </div>
             </headings>
    
      <!-----BANNER--PART--STARTS---->
      <div class="banner">
          <h1>Book A Table</h1>
          <h6><a href="tel:9811075414">+977-9811075414</a></h6>
        
      </div>


      <!-----GOOGLE-MAPS-LOCATION-->
      <div class="container-location-hours">
        <section class="location">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.89801175807!2d87.28179141540271!3d26.811375870898917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef4198d77ef809%3A0x19d4b6751923882c!2sKamana%20Dairy%20%26%20Bakery!5e0!3m2!1sen!2snp!4v1618807146868!5m2!1sen!2snp" width="800" height="550px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       </section>
    
       <section class="Slideshow">
       <figure class="slide-img">
       <img class="mySlides" src="kamana-org-website-logo-.png">
        <img class="mySlides" src="https://scontent.fbir2-1.fna.fbcdn.net/v/t1.6435-9/135766043_1563528360502675_7821449312006863420_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=xVM6CqNuVYQAX8QsgsN&_nc_ht=scontent.fbir2-1.fna&oh=b7648179996ff79a8ac7871486584421&oe=60A3D1E4" width="550" alt="">
        <img class="mySlides" src="https://scontent.fbir2-1.fna.fbcdn.net/v/t1.6435-9/173862177_1634528820069295_6352164830186311966_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=HxbYMmTDFQ0AX_xhSy8&_nc_ht=scontent.fbir2-1.fna&oh=ce565c54f886060104a3b8a09eec0538&oe=60A2508D"width="700" >
        <img class="mySlides" src="https://scontent.fbir2-1.fna.fbcdn.net/v/t1.6435-9/173194939_1634529286735915_5796087527779221445_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=rRjyYdYiKggAX9wRITl&_nc_ht=scontent.fbir2-1.fna&oh=c70be996f345b1510802380f5513e1b8&oe=60A1B5F3"width="700" >
        </figure></section></div>

     <!---CONTACT--AND--ENQUIRY--FORM --PART--->
    
     <div class="contact-enquiry-container">
         <section class="left-contact-box">
            <header> <h3>Our location:</h3></header>  
                <span><a href="https://www.google.com/maps/place/Kamana+Dairy+%26+Bakery/@26.8113759,87.2817914,17z/data=!4m12!1m6!3m5!1s0x39ef4198d77ef809:0x19d4b6751923882c!2sKamana+Dairy+%26+Bakery!8m2!3d26.8113711!4d87.2839801!3m4!1s0x39ef4198d77ef809:0x19d4b6751923882c!8m2!3d26.8113711!4d87.2839801" target="_blank"><i class="fa fa-map-marker"></a></i>
                </span>
                Putali-line,Dharan <br><br>
                <span>
                  <i class="fa fa-map-marker"></i> 
                </span>Dharan-9,Sunsari<br><br>
                <i class="fa fa-map-marker"></i> 
               </span>Province no.One, Nepal
                

            <header> <h2>Check Reviews On</h2>  </header>
            <section class="social-media-icons">
                <span><a href="https://www.facebook.com/kamanadairyandbakery" target="_blank"><i class="fa fa-facebook-square"></a></i></span>
                <span><i class="fa fa-instagram"><a href=""></a></i></span>
                <span><i class="fa fa-twitter"><a href=""></a></i></span>
                <span><i class="fa fa-youtube-play"><a href=""></a></i></span>
             </section> </section>
            <section class="right-contact-box">
            <header>
                <h4>For Online Enquiries</h4>
            </header>
            <aside class="brief">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</aside>

            <form action="#">
                <input type="text" required placeholder="First Name"> <br>
                <input type="text"  placeholder="Middle Name"> <br>
                <input type="text"  required placeholder="Last Name"> <br>

                <input type="email" required placeholder="Email"> <br>
                <input type="text"  required placeholder="Contact No."> <br>
                <br>

                <textarea name="Message" id="" cols="30" rows="10" placeholder="Message"></textarea>
               <br>
              <button class="send-btn">
                  Send Enquiries
               </button>
              </form>
               </section>   
               </div>




      <!-------------------------------------------------------FOOTER----------------------------------------------------------------->
      <footer>
        <div class="footer-bg">
        <span>
        <i id="phone-icon" class="fa fa-phone"></i> </span>
         <h5>Call for All your Reservation</h5>
         <br>
         <aside class="phone-num">
            <a class="num" style="color:white;" href="tel:+977-9811075414">+977-9811075414</a>
          </aside> 
          <br><br>
          <aside class="copyright">
           Copyright© 2021 Kamana Bakery & Diary||Powered by Kamana Team.
          </aside>
          </div>     
          </footer>

   <!---------------------------------------------------------------SCRIPT--JS-------------------------------------------------------------->
   <script src="index.js"></script>
   <!---------------------------------------------------------------SCRIPT--JS-------------------------------------------------------------->

</body>
</html>