<?php 
include("./includes/headerIncludes.php");
?>

<?php 
	if(isset($_POST['login'])){
		$name = $_POST['user_name'];
		$password = $_POST['password'];	
		if($name && $password){				
			$query = mysql_query("SELECT * FROM controlOperator WHERE username = '$name' and password = '$password' LIMIT 1");
			$num = mysql_num_rows($query);
			if($num == 1){
				$id =mysql_result($query,0,'id'); 
				$un =mysql_result($query,0,'username'); 
					$_SESSION['logedin'] = $id;
					$_SESSION['username'] = $un;
					header("location:./viewer.php");
			}else {$error = "Wrong username or Password combination.";}	
			
		}else {$error = "Please fill in all fields.";}
	}
?>
<!--The log in form starts here-->
		    <div class="row">
		    	<div class="container">
		    		<fieldset>
						<legend style="text-align:center"></legend>
						
						<form action="index.php" class="form-horizontal col-lg-4 col-lg-offset-4 col-md-offset-4 col-md-4 col-sm-4" method="post">
							<label for="">Username</label>
							<input type="text" name="user_name" id="" class="form-control">

							<label for="">Password</label>
							<input type="password" name="password" id="" class="form-control">

							<h5><?php if(isset($error)){echo $error;} ?></h5>
							<div class="col-lg-offset-5">
								<br/>
								<input type="submit" name="login" value="Login" class="btn btn-info btn-sm">							
							</div>
						</form>
					</fieldset>
		    	</div>
		    </div>
			<br/>

<!--The footer starts here-->			
<?php include("./includes/footerIncludes.php"); ?>

