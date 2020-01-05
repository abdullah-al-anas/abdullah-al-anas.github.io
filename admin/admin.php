<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resturant Admin Side</title>
    <link rel="shortout icon" href="images/logo1.png">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
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
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><p>Log Out</p></a>
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
    					<a href="user_profile.html">
    						<img src="images/admin1.jpg" alt="">
    					</a>
    				</div>
    			</div>	
    		</div>	
    		
    	</div>
    </div>

<div class="main_wrapper">
		    		<table class="content-table">
		    			<thead>
		    				<tr>
		    					<th>Rank</th>
		    					<th>User Name</th>
		    					<th>Email</th>
		    					<th>Password</th>
                                <th>Occupation</th>
                                <th>Country</th>
                                <th>Contact</th>
                                <th>Image</th>
                                <th>About</th>
		    					<th>Delete</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				<tr>
		    					<td>1</td>
		    					<td>Jon</td>
		    					<td>jon@gmail.com</td>
		    					<td>12345</td>
                                <td>Engineering</td>
                                <td>Bangladesh</td>
                                <td>+880 1638 276980</td>
                                <td><img src="images/admin1.jpg" alt=""></td>
                                <td> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</td>
		    					<td><a href="#" class="delete">Delete</a></td>
		    				</tr>

		    			</tbody>
		    		</table>
                    <a href="admin-add-new.html"><input type="button" value="Add New"></a>
		    	</div>


 <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="fontawesome/js/all.min.js"></script>
</body>
</html>