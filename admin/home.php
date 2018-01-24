<?php 
    include('../connection.php');
    session_start();
    if($_SESSION['id'] == "")
    {
      echo '<script>window.location="index.php"</script>';
    }
    $jobcat=$_GET['cat'];
    switch ($jobcat) {
        case "all":
            $sub = "";
            break;
        case "ui":
            $sub = "UI/UX Developer";
            break;
        case "ios":
            $sub = "iOS Application Developer";
            break;
        case "android":
            $sub = "Android Application Developer";
            break;
        default:
            $sub = "Web Developer";
    }
                
?>
<!DOCTYPE html>
<html>
<head>
<title>Maplegraph Admin</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style-admin.css">
</head>
<body>
<!--header start-->
<header>
      ADMIN PANEL
</header>
<div class="menu">
  <nav class="navbar navbar-inverse" style="border-radius:0px;">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a href="">Applicants</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
        </ul>
      </div>
  </nav>
</div>
<!--header close-->    
    <div>
        <div>
            <form method="GET" enctype="multipart/form-data">
                <select class="form-control" name="cat">
                    <option value="all">All Applicants</option>
                    <option value="ui">UI/UX Applicants</option>
                    <option value="ios">iOS Applicants</option>
                    <option value="android">Android Applicants</option>
                    <option value="web">Web Developer Applicants</option>
                </select>
                <input type="submit" name="submit" value="Search">
            </form>
        </div>
        <table border="1px" width="100%" cellpadding="6px" class="table table-hover table-responsive">
            <caption style="text-align:center;font-size:40px;"><?php echo $sub;?></caption>
            <thead style="text-align:center;">
                <th>Id</th>
                <th>Applicant</th>
                <th>Job Title</th>
                <th>CV</th>
                <th>Details</th>
                <th>E-mail ID</th>
                <th>Linkedin Profile</th>
                <th>Date</th>
                <th>Time</th>
            </thead>   
            <?php 
                if($sub=="")
                    $query=mysqli_query($conn,"SELECT * FROM job ORDER BY id desc");
                else
                    $query=mysqli_query($conn,"SELECT * FROM job WHERE jobtitle='$sub' ORDER BY id desc");
                while($data = mysqli_fetch_array($query))
                {
                ?>
                <?php
                    $d = date_create($data['ndate']);
                    $date=date_format($d,"d / m/ Y"); 
                ?>
                <tbody class="table table-hover table-bordered table-responsive">
                    <td><strong><?php echo $data['id']; ?></strong></td>
                    <td class="col-lg-1"><?php echo $data['uname'];?></td>
                    <td class="col-lg-1"><?php echo $data['jobtitle'];?></td>
                    <td class="col-lg-1"><?php echo $data['cv'];?></td>
                    <td><?php echo $data['detail'];?></td>
                    <td><?php echo $data['mail'];?></td> 
                    <td class="col-lg-2"><?php echo $data['linkedin'];?></td>
                    <td><?php echo $date;?></td>
                    <td><?php echo $data['ntime'];?></td>  
                </tbody>
          <?php } ?>
        </table>    
    </div>
</body>
</html>