<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
          <img src="images/A-X.png" alt="Logo" class="logo">

          <ul class="menu">
            <li class="active"> <a href="#"><i class="fas fa-th-large"></i>Dashboard</a></li>
            <li ><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-users"></i>Team</a></li>
            <li><a href="#"><i class="fas fa-folder-open"></i>Settings</a></li>
            <li><a href="#"><i class="fas fa-cog"></i>Log-out</a></li>
          </ul>
         
          </div>
          <div>
            
		<div class="main-content">
			<h1>Dashboard</h1>
			<div class="panel-wrapper">
				<div class="panel-head">
					<p> Members</p>
				</div>
				<div class="panel-body">
					
				<?php
					session_start();
					$con = mysqli_connect('localhost','root','','athlete');
					$cont = " SELECT * FROM signin;";
					$result = mysqli_query($con,$cont);
					if($result){
						$rowcount=mysqli_num_rows($result);
					}else{
						echo('error');
					}
				?>
				<h1 style="color:#fff"><?php echo '   '.$rowcount?></h1>
				</div>
			</div>
			<div class="panel-wrapper">
				<div class="panel-head">
					<p> Trainers</p>
				</div>
				<div class="panel-body">
					


				</div>
			</div>
			<div class="panel-wrapper">
				<div class="panel-head">
					<p>New Members</p>
				</div>
				<div class="panel-body">
					<p>4</p>
				</div>
			</div>
		</div>
          </div>
      </div> 
    
             
</body>
</html>