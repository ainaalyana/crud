<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .logo{
        height:100px;
        width:100px;
        position:absolute;
        top:30px;
        left:30px;
        background-image:url("logo.png");
        background-size:cover;
        background-position:center;
    }
    .main{
        opacity:  0.8 ;
    }
    .container{
        position: absolute;
        top:65%;
        left:50%;
        transform:translate(-50%,-50%);
        background-color: #20212e;
        padding:40px;
    }
    .container h1, h5, h6{
        color:white;
    }
    .form-group input:focus{
        border:2px solid black;
        background-color:#f3f6ff;
    }
    .form-group input{
        background-color:#f3f6ff;
    }
    .form-group select{
        background-color:#f3f6ff;
    }
    .triangle-right {
	width: 0;
	height: 0;
	border-top: 25px solid transparent;
	border-left: 50px solid #416489;
	border-bottom: 25px solid #20212e;
    }
    </style>
</head>
<body style="background-color:#f3f6ff">
<div class="main" style="height:500px; width:100%;">
    <img src="logo9.jpg" alt="" style="width:100%; height:100%;">
<div class="logo"></div>
</div>
    <div class="container" style="font-family:Quicksand; margin-top:50px;">
        <h1 style="text-align:center; font-family:Quicksand;">Contact Us</h1>
        <h5 style="text-align:center; font-family:Quicksand;">Email use with any question or query or call-0900000000. We would be happy to answer your questions.</h5>
        <br>
        <h6 style="text-align:center"><i class="fa fa-phone"></i>&nbsp; Phone: +09000000000</h6>
        <h6  style="text-align:center"><i class="fa fa-envelope"></i>&nbsp; Email: <a href="#">info@kewo.org</a></h6>
        <h6  style="text-align:center"><i class="fa fa-map-marker"></i>&nbsp; Address: DHA, Karachi KARSAZ.pvt ltd.<a href="#"></a></h6>
        <br>
        <form action="" method="POST">
        <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label" style="background-color:#416489; color:white; text-align:center">Name:</label>
        <!-- <div class="triangle-right"></div> -->
        <div class="col-sm-10">
         <input type="text" placeholder="Enter your name" name="username" class="form-control" class="col-sm-10"></div>
        </div>
    
         <div class="form-group row">
         <label for="name" class="col-sm-2 col-form-label" style="background-color:#416489; color:white; text-align:center">Email:</label>
        <!-- <div class="triangle-right"></div> -->
         <div class="col-sm-10"><input type="email" placeholder="Enter your email" name="useremail" class="form-control"></div>
         </div>
         
         <div class="form-group row">
         <label for="name" class="col-sm-2 col-form-label" style="background-color:#416489; color:white; text-align:center">Whatsapp/Phone:</label>
        <!-- <div class="triangle-right"></div> -->
         <div class="col-sm-10">
         <input type="number" placeholder="Enter your number" name="usernumber" class="form-control">
         </div>
         </div>
        
         <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label" style="background-color:#416489; color:white; text-align:center">Location:</label>
        <!-- <div class="triangle-right"></div> -->
        <div class="col-sm-10"><input type="text" placeholder="Enter your location" name="userlocation" class="form-control"></div>
        </div>

        <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label" style="background-color:#416489; color:white; text-align:center">Site:</label>
        <!-- <div class="triangle-right"></div> -->
        <div class="col-sm-10">
            <select name="site" id="site" name="site" class="form-control">
            <option value="Orginization" disabled >Select</option>
                <option value="office">School</option>
                <option value="College">College</option>
                <option value="University">University</option>
                <option value="Home">Home</option>
                <option value="Other">Other</option>
            </select>
        </div>
        </div>

         <div class="form-group row">
         <button type="submit" name="subbtn" class="col-sm-2" style="background-color:#416489; color:white; text-align:center; border:none; padding:8px; width:150px; float:right;">Submit</button>
        <div class="triangle-right"></div>
         <h6 class="col-sm-4 mt-3" style="float:right; margin-left:0; color:#808080">Don't worry we do not spam!</h6>
         </div>
        
        </form>
    </div>
    <?php
    if(isset($_POST['subbtn'])){
        $username= $_POST['username'];
        $email=$_POST['useremail'];
        $usernumber = $_POST['usernumber'];
        $userlocation = $_POST['userlocation'];
        $usersite  = $_POST['site'];

        $q="insert into user_data_final_table (user_name,user_email, user_number, user_location, user_site) values('".$username."', '".$email."', '".$usernumber."', '".$userlocation."' , '".$usersite."')";
        mysqli_query($connection,$q);
        
    }
    
    ?>
</body>
</html>