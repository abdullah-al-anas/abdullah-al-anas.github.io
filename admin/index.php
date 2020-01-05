<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resturant Admin Side</title>
    <link rel="shortout icon" href="images/logo1.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    
    <div class="wrapper">
    	<div class="sidebar">
    		<img src="images/logo.png" alt="">
    		<ul>
    			<li class="active"> 
    			<a href="index.html"><i class="fas fa-tachometer-alt"></i><p>Dashboard</p></a></li>
    			<li><a href="receipe.html"><i class="fas fa-receipt"></i><p>Receipes</p></a></li>
    			<li><a href="blog.html"><i class="fas fa-blog"></i><p>Blogs</p></a></li>
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
                    <h2>Hello, Welcome Here!</h2>
                    <div class="picture">
                        <a href="user_profile.html">
                            <img src="images/admin1.jpg" alt="">
                        </a>
                    </div>
                </div>  
            </div>  
            
       
   	

    		<div class="info">
    			<div class="receipes">
    				<div class="up1">
    					<a href="#" class="receipe1"><i class="fas fa-concierge-bell"></i></a>
    					<div class="huge">
    					0
    					</div>
    				</div>

    				<div class="down1">
    					<a href="#">Receipes</a>
    				</div>
    				
    			</div>
    			<div class="receipes">
    				<div class="up2">
    					<a href="#" class="receipe2"><i class="fas fa-align-justify"></i></a>
    					<div class="huge">
    					0
    					</div>
    				</div>
    				<div class="down2">
    					<a href="#">Categories</a>
    				</div>
    			</div>
    			<div class="receipes">
    				<div class="up3">
    					<a href="#" class="receipe3"><i class="fab fa-blogger-b"></i></a>
    					<div class="huge">
    					0
    					</div>
    				</div>
    				<div class="down3">
    					<a href="#">Blogs</a>
    				</div>
    			</div>
    			<div class="receipes">
    				<div class="up4">
    					<a href="#" class="receipe4"><i class="fas fa-user"></i></a>
    					<div class="huge">
    					0
    					</div>
    				</div>
    				<div class="down4">
    					<a href="#">Users</a>
    				</div>
    			</div>
    		</div>

            <div class="container">
                <h2>Hospitality</h2>
                <div id="jq"></div>
                <h2>Visitors</h2>
                <div id="html"></div>
                <h2>Ratings</h2>
                <div id="css"></div>
                <h2>Users</h2>
                <div id="css2"></div>
                <h2>Satisfied</h2>
                <div id="css3"></div>
            </div>
            <h2>Pie Chart</h2>
            <canvas id="mycanvas" width="300" height="300"></canvas>
            <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
            
         </div>
    </div>
		<div class="main_wrapper">
		    		<table class="content-table">
		    			<thead>
		    				<tr>
		    					<th>Rank</th>
		    					<th>Users</th>
		    					<th>Emails</th>
		    					<th>Comments</th>
		    					<th>Likes</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				<tr>
		    					<td>1</td>
		    					<td>Jon</td>
		    					<td>jhon@gmail.com</td>
		    					<td>5</td>
		    					<td>10</td>
		    				</tr>

		    				<tr>
		    					<td>2</td>
		    					<td>Clington</td>
		    					<td>clington@gmail.com</td>
		    					<td>8</td>
		    					<td>12</td>
		    				</tr>

		    				<tr>
		    					<td>3</td>
		    					<td>Trump</td>
		    					<td>trump@gmail.com</td>
		    					<td>4</td>
		    					<td>15</td>
		    				</tr>

		    				<tr>
		    					<td>4</td>
		    					<td>Nur</td>
		    					<td>nur@gmail.com</td>
		    					<td>6</td>
		    					<td>13</td>
		    				</tr>

		    				<tr>
		    					<td>5</td>
		    					<td>Islam</td>
		    					<td>islam@gmail.com</td>
		    					<td>7</td>
		    					<td>19</td>
		    				</tr>

		    				<tr>
		    					<td>6</td>
		    					<td>Obama</td>
		    					<td>obama@gmail.com</td>
		    					<td>8</td>
		    					<td>16</td>
		    				</tr>
		    			</tbody>
		    		</table>
		    	</div>

<script type="text/javascript" src="js/loader.js"></script>
<script type="text/javascript" src="js/linechart.js"></script>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
<script type="text/javascript" src="fontawesome/js/all.min.js"></script>
<script src="js/jquery.lineProgressbar.js"></script>
<script type="text/javascript" src="js/Chart.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
$('#jq').LineProgressbar({
percentage:90,
radius: '25px',
height: '20px',
});
$('#html').LineProgressbar({
percentage:80,
radius: '25px',
height: '20px',
fillBackgroundColor: '#DA4453'
});
$('#css').LineProgressbar({
percentage:70,
radius: '25px',
height: '20px',
fillBackgroundColor: '#E0C341'
});
$('#css2').LineProgressbar({
percentage:75,
radius: '25px',
height: '20px',
fillBackgroundColor: '#E0C341'
});
$('#css3').LineProgressbar({
percentage:100,
radius: '25px',
height: '20px',
fillBackgroundColor: '#E0C341'
});
</script>
</body>
</html>