<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resturant Admin Side</title>
    <link rel="shortout icon" href="images/logo1.png">
    <link rel="stylesheet" href="css/blog.css">
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
    			<li class="active"><a href="blog.html"><i class="fas fa-blog"></i><p>Blogs</p></a></li>
    			<li><a href="user.html"><i class="fas fa-address-book"></i><p>User</p></a></li>
    			<li>
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
		    					<th>Title</th>
		    					<th>Description</th>
		    					<th>Image</th>
		    					<th>Rating</th>
		    					<th>Like</th>
		    					<th>Comment</th>
		    					<th>Edit</th>
		    					<th>Delete</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				<tr>
		    					<td>1</td>
		    					<td>DUIS AUTE IRURE DOLOR IN HENDERIT IN VOLUPTATE.</td>
		    					<td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>
		    					<td><img src="../images/blog_templet1.png" alt=""></td>
		    					<td>4</td>
		    					<td>2</td>
		    					<td>2</td>
		    					<td><a href="blog-edit.html" class="edit">Edit</a></td>
		    					<td><a href="blog-delete.html" class="delete">Delete</a></td>
		    				</tr>

		    				<tr>
		    					<td>2</td>
		    					<td>DUIS AUTE IRURE DOLOR IN HENDERIT IN VOLUPTATE.</td>
		    					<td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>
		    					<td><img src="../images/blog_templet2.png" alt=""></td>
		    					<td>4</td>
		    					<td>2</td>
		    					<td>2</td>
		    					<td><a href="blog-edit.html" class="edit">Edit</a></td>
		    					<td><a href="blog-delete.html" class="delete">Delete</a></td>
		    				</tr>
		    			</tbody>
		    		</table>

		    		<a href="blog-add-new.html"><button class="button">Add New</button></a>
		    	</div>


 <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="fontawesome/js/all.min.js"></script>
</body>
</html>