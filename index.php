<?php 
	include('connection.php');
	$x=$y=null;
	if(isset($_POST["submit"]))
	{
		$targetfolder = "files/";
		$filetype=$_FILES['cv']['type'];
		if($filetype=="application/pdf")
		{
			$rnum=rand(1,10000);
			$filename=basename( $_POST['name'].'-'.$rnum.'.pdf');
			$targetfolder = $targetfolder . $filename;
			move_uploaded_file($_FILES['cv']['tmp_name'], $targetfolder);
			$date=date("Y-m-j");
			$time=date("H:i:s");
			$detail = addslashes($_POST['detail']);
			$ins = "INSERT into job (uname,cv,mail,linkedin,jobtitle,detail,ndate,ntime) VALUES ('".$_POST['name']."','$filename','".$_POST['mail']."','".$_POST['linkedin']."','".$_POST['jobtitle']."','".$_POST['detail']."','$date','$time')";
			mysqli_query($conn,$ins);
			$y="success";
		}
		else{
			$x='error';
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Maplegraph</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
						   <h1 class="title">MapleGraph</h1>
						   <a href="admin/index.php">( Link To Admin Panel )</a>
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<?php if($y=='success'){?>
						 <div style="color:#32CD32;margin-bottom:10px;text-align:center;">Successfully Applied.</div>
					<?php }?>
					<form class="form-horizontal" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" placeholder="Enter your Name" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Job Title</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil fa" aria-hidden="true"></i></span>
                                    <select required class="form-control" name="jobtitle">
                                        <option value="">Choose the Job Title</option>
                                        <option value="UI/UX Developer">UI/UX Developer</option>
                                        <option value="iOS Application Developer">iOS Application Developer</option>
                                        <option value="Android Application Developer">Android Application Developer</option>
                                        <option value="Web Developer">Web Developer</option>
                                    </select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="emailid" class="cols-sm-2 control-label">E-Mail ID</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="mail"  placeholder="Enter your mail-id" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="linkedin" class="cols-sm-2 control-label">LinkedIn Profile</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
									<input type="url" class="form-control" name="linkedin" placeholder="Enter your profile name or paste the link" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Upload CV (*.pdf)</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="cv" required/>
								</div>
								<?php if($x=='error') echo "<div style='color:#ff0000;'>*Please Check the file type*</div>"; ?>
							</div>
						</div>
						<div class="form-group">
							<label for="resume" class="cols-sm-2 control-label">Tell us something about you.</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i aria-hidden="true"></i></span>
									<textarea rows="5" cols="100%" name="detail" required></textarea>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit" value="Submit">
						</div>';
					</form>
				</div>
			</div>
        </div>
    <footer>
		<div>By: Gaurav kumar</div>
	</footer>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>