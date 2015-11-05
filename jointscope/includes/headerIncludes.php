<?php include("includes/connect_db.php") ?>
<?php 
	/*
	if(isset($_SESSION['logedin'])){
		$id = $_SESSION['logedin'];
		$un = $_SESSION['username'];
		$query = mysql_query("SELECT username FROM controlOperator WHERE id = '$id' AND username = '$un'");
		$num = mysql_num_rows($query);
		if($num == 1){
			$username = mysql_result($query,0,'username');
		}
	}*/
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" type="image/x-icon" href="weeka pic">
	<title>Joint Scope</title>
	<link rel="stylesheet" href="./css/yeti.bootstrap.min.css">
	<link rel="stylesheet" href="./css/main.css">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
</head>
<body>	
	<div class="container"> <!--The container holding the website-->
<!--The header of the site and top navigation menu-->
		<div class="container navbar navbar-inverse navbar-fixed-top">
	        <div class="container1">
	           <div class="navbar-header">
	                <!-- <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button> -->
	                <a href="#" class="navbar-brand">Joint Scope</a>
	            </div>
	            <div class="navbar-collapse collapse">
	            <!-- them words go to task bar -->
	               <!--  <ul class="nav navbar-nav">
	                    <li><a href="#"></a></li>
	                    <li><a href="#"></a></li>
	                    <li><a href="#"></a></li>
	                </ul> -->
                    <ul class="nav navbar-nav navbar-right">
				        <li><a id="registerLink" href="#"><?php if (isset($username)){echo "$username"; } else{echo "ucweke k2";} ?></a></li>		
				        <li><a id="registerLink" href="./includes/logout.php"><?php if (isset($username)){echo "Log out"; }?></a></li>		
				    </ul>
	            </div>

	<!-- <!some table markers  -->
				<!-- <div class="list-group">
						  <a class="list-group-item" href="#"><i class="fa fa-camera-retro fa-5x"></i>&nbsp; Home</a>
						  <a class="list-group-item" href="new.php"><i class=""></i>&nbsp; New</a>
						  <a class="list-group-item" href="advertise.php"><i class=""></i>&nbsp; Advert</a>
						  <a class="list-group-item" href="magazine.php"><i class=""></i>&nbsp; Magazine</a>
						  <a class="list-group-item" href="pictures.php"><i class=""></i>&nbsp; Pictures</a>
						  <a class="list-group-item" href="videos.php"><i class=""></i>&nbsp; Videos</a>
						  <a class="list-group-item" href="audio.php"><i class=""></i>&nbsp; Audios</a>

					</div> -->
 -->
	        </div>
	    </div>
 
	    <br/>
	    <br/>
	    <br/>
	    <br/>