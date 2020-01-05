<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resturant Admin Side</title>
    <link rel="shortout icon" href="images/logo1.png">
    
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

<div class="wrapper">
    	<div class="sidebar">
    		<h2>Resturant</h2>
    		<ul>
    			<li> 
    			<a href="index.html"><i class="fas fa-tachometer-alt"></i><p>Dashboard</p></a></li>
    			<li><a href="receipe.html"><i class="fas fa-receipt"></i><p>Receipes</p></a></li>
    			<li><a href="blog.html"><i class="fas fa-blog"></i><p>Blogs</p></a></li>
    			<li><a href="user.html"><i class="fas fa-address-book"></i><p>User</p></a></li>
    			<li class="active">
    			<a href="admin.html"><i class="fas fa-id-badge"></i><p>Admins</p></a>
    			</li>
    		</ul>
    		<div class="social_media">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
    	</div>
		
    	<div class="main_content">
    		<div class="header">
    			<div class="heading">
    				<h2>Welcome Here!</h2>
    				<div class="picture">
    					<a href="#">
    						<img src="images/admin1.jpg" alt="">
    					</a>
    				</div>
    			</div>	
    		</div>	
    		
    	</div>
    </div>

<div class="main_wrapper">
		    <form action="" method="">
			
            <label for="">
                <h2>User Name</h2>
                <input type="text" name="name" required="required">
            </label>
            <label for="">
                <h2>Email</h2>
                <input type="email" name="name" required="required">
            </label>
            <label for="">
                <h2>Password</h2>
                <input type="password" name="name" required="required">
            </label>
            <label for="">
                <h2>Occupation</h2>
                <input type="text" name="name" required="required">
            </label>
            <label for="">
                <h2>Country</h2>
                <input type="text" name="name" required="required">
            </label>
            <label for="">
                <h2>Contact</h2>
                <input type="text" name="name" required="required">
            </label>
            <label for="">
                <h2>Upload Image</h2>
                <input type="file" name="name" required="required">
            </label>
            <label for="">
                <h2>About</h2>
                <br>
                <textarea name="message" id="address" required="required"></textarea>
                <br>
            </label>
            
            
            
            
            
            
            <br>
			
			
			<br><br>
			<a href="#"><input type="button" value="Add"></a>
			<button><a href="#"><input type="reset"></a></button>

			
		
		</form>

		    	</div>


 <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="fontawesome/js/all.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>