<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/receipes_details.css">
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="css/myaccount.css">
  <link rel="stylesheet" href="css/continue_reading.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/about.css">
  <title>Resturant</title>
  <link href="images/logo2.png" rel="shortout icon">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">

  
</head>
<body>

  <!--

  <div class="container_full">
    <div class="fix container">
    
    </div>
  </div>

-->

<style>
  
.header_top_bg{
  background: #1d1d1d;
}
#header_top{
  padding: 5px 50px;
  overflow: hidden;
}
#header_top .phn_number{
  font-size: 15px;
  color: #2add54;
  float: left;
}
#header_top .phn_number marquee{
  width: 300px;
  overflow: hidden;
  transition: 2s;
  display: inline-block;
  scroll-behavior: smooth;
}
#header_top .signup-register a{
  font-size: 15px;
  color: #fff;
  margin-left: 50px;
  float: left;
}
#header_top .signup-register a:hover{
  color: #0cee6c;
}
#header_top .social_icons_top{
  float: right;
}
#header_top .social_icons_top ul{
  overflow: hidden;
}
#header_top .social_icons_top ul li.facebook{
  height: 22px;
  width: 22px;
  float: left;
  margin-right: 10px;
  list-style: none;
  cursor: pointer;
}
#header_top .social_icons_top ul li.facebook a{
  color: #fff;
  transition: 0.4s ease;
}
#header_top .social_icons_top ul li.facebook a:hover{
  color: #2add54;
}
#header_top .social_icons_top ul li.twitter{
  height: 22px;
  width: 22px;
  float: left;
  margin-right: 10px;
  list-style: none;
  cursor: pointer;
}
#header_top .social_icons_top ul li.twitter a{
  color: #fff;
  transition: 0.4s ease;
}
#header_top .social_icons_top ul li.twitter a:hover{
  color: #2add54;
}

#header_top .social_icons_top ul li.behance{
  height: 22px;
  width: 22px;
  float: left;
  margin-right: 10px;
  list-style: none;
  cursor: pointer;
}
#header_top .social_icons_top ul li.behance a{
  color: #fff;
  transition: 0.4s ease;
}
#header_top .social_icons_top ul li.behance a:hover{
  color: #2add54;
}

#header_top .social_icons_top ul li.dribble{
  height: 22px;
  width: 22px;
  float: left;
  margin-right: 10px;
  list-style: none;
  cursor: pointer;
}
#header_top .social_icons_top ul li.dribble a{
  color: #fff;
  transition: 0.4s ease;
}
#header_top .social_icons_top ul li.dribble a:hover{
  color: #2add54;
}

#header_top .social_icons_top ul li.instagram{
  height: 22px;
  width: 22px;
  float: left;
  margin-right: 10px;
  list-style: none;
  cursor: pointer;
}
#header_top .social_icons_top ul li.instagram a{
  color: #fff;
  transition: 0.4s ease;
}
#header_top .social_icons_top ul li.instagram a:hover{
  color: #2add54;
}

.header_bg{
  background: #292929;
  position: sticky;
  top: 0%;
  display: block;
  z-index: 9999;
}

#header .logo_left{
  float: left;
}
#header .logo_left img{
  width: 150px;
  height: 60px;
  padding: 15px;
  float: left;
}
#header nav{
  float: right;
}
#header>nav #menu{
  list-style: none;
}
#header>nav #menu li{
  float: left;
  border-right: 1px solid #1e1e1e;
}
#header>nav #menu li:first-child{
  border-left: 1px solid #1e1e1e;
}
#header>nav #menu li a{
  display: block;
  color: #fff;
  font-family: lato;
  font-size: 13px;
  font-weight: bold;
  padding: 36px 19px;
  border-bottom: 5px solid #1e1e1e;

}
#header>nav #menu li:hover a{
  color: #2add54;
  border-bottom: 5px solid #2add54;
}
#header>nav #menu li.active a{
  color: #2add54;
  border-bottom: 5px solid #2add54;
}

#header_bottom .logo_left img{
  width: 100px;
  height: 40px;
  float: left;
  margin: 15px 0px;
  margin-left: 15px;
}

.srch{
  background: #1d1d1d;
  height: 50px;
  position: sticky;
  top: 0;
  display: block;
  z-index: 999;
}
.search{
  position: absolute;
  margin: 24px 217px;
}

.search .inptt{
  color: #fff;
  padding: 0px 0px 0px 40px;
  font-size: 17px;
  border: 1px solid #f8f8f8;
  float: left;
  width: 30%;
  background-color: #f1f1f1;
  background: url(images/search-icon.png);
  background-position: 6px 8px;
  background-size: 25px 25px;
  background-repeat: no-repeat;
  transition: 0.3s ease;
}
.search .inptt:focus{
  width:80%;
}

.box{
  position: fixed;
  width: 30px;
  z-index: 999;
  top: 50%;
  left: 40px;
  padding: 1px;
  border-radius: 25px;
  background: #4f4e4e;
  border-radius: 25px;
  transform: translate(-40px, 0px);
  transition: 0.5s ease;
}
.box a{
  width: 20px;
  height: 20px;
  border-radius: 50%;
  float: left;
  text-indent: -9999px;
  margin: 5px;
  cursor: pointer;
}

#green{
  background: #0cebeb;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #29ffc6, #20e3b2, #0cebeb);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #29ffc6, #20e3b2, #0cebeb); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
#black{
  background: #000000;
}
#red{
  background: #e55039;
}
#white{
  background: #ffffff;
}
/* navigation  start*/


</style>

<div id="jump">
  
</div>

<div class="container_full header_top_bg">
  <div class="fix container">
    <div id="header_top">
    <div class="phn_number">
      <marquee behavior="scroll" direction="left">Call For Book a Table : +880 1600-000000
        __________________________
        Sign Up For Amesing Offer!
      </marquee>
      
    </div>
    <div class="signup-register"><a href="signup.php"><button class="distribution">Sign Up</button></a><a href="login.php"><button class="distribution">Log In</button></a></div>
    <div class="social_icons_top">
      <ul>
        <li class="facebook"><a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a></li>
        <li class="twitter"><a href="https://www.twitter.com/" target="blank"><i class="fab fa-twitter"></i></a></li>
        <li class="behance"><a href="https://www.behance.com/" target="blank"><i class="fab fa-behance"></i></a></li>
        <li class="dribble"><a href="https://www.dribble.com/" target="blank"><i class="fab fa-dribbble"></i></a></li>
        <li class="instagram"><a href="https://www.instagram.com/" target="blank"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
    </div>
  </div>
</div>
<!-- navigation-->


<div class="container_full header_bg">
  <div class="fix container">   
    <header id="header">
      <div class="logo_left">
        <a href="index.php"><img src="images/logo1-1.png" alt=""></a>
      </div>
       <div class="search">
      <form action="">
        <input class="inptt" type="text" placeholder="Search...">
       
        </form>
    </div>
      <nav>
        <ul id="menu">
          <li class="<?php if($active=='Home') echo"active";?>">
            <a href="index.php">Home</a>
          </li>
          <li class="<?php if($active=='Receipes') echo"active";?>"><a href="receipes_details.php">Receipes</a></li>
          <li class="<?php if($active=='Blog') echo"active";?>"><a href="blog.php">Blog</a></li>
          <li class="<?php if($active=='My Account') echo"active";?>"><a href="myaccount.php">My Account</a></li>
          <li class="<?php if($active=='Contact Us') echo"active";?>"><a href="contact.php">Contact</a></li>
          <li class="<?php if($active=='About') echo"active";?>"><a href="about.php">About</a></li>
        </ul>
      </nav>
    </header>

<div class="box">
  <a onclick="changecolor('green')" id="green"> #0cebeb</a>
  <a onclick="changecolor('black')" id="black">#000000</a>
  <a onclick="changecolor('red')" id="red">#e55039</a>
  <a onclick="changecolor('white')" id="white">#ffffff</a>
</div>

  </div>
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
</div>
</div>

<!--navigation finish-->