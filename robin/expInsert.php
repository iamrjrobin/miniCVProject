<?php
include 'conn.php';
if(isset($_POST['submit']))
{
  $postname = $_POST['postname'];
  $uid = $_POST['uid'];
  $companyname = $_POST['companyname'];
  $works = $_POST['works'];
  $datein = $_POST['datein'];
  $dateout = $_POST['dateout'];
  $q = " INSERT INTO `exp`( `postname`, `companyname`,`works`,`datein`,`dateout`,`uid`) VALUES 
  ( '$postname', '$companyname', '$works', '$datein', '$dateout', '$uid' )";
  
  $query = mysqli_query($mysqli,$q);
  header('location:expshow.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="myjs.js"></script>
  <title>Information Input</title>
</head>
<body >

  <div class="container">
    <div id="header">
      <h1>Experience Information</h1>
      <h4></h4>
    </div>
    
    <div class="common_line"></div>

    </div>
    
   <form name="myform"  action="#" onsubmit="return pwd();"  method="post">

    <div class="C_details2">
      <p class="title">Experience<br></p>
      <span class="com1"><br>
        <label>User ID</label><br>
        <input type="text" name="uid" placeholder="User ID"><br>
        <label>Post Name</label><br>
        <input type="text" name="postname" placeholder="Post Name" ><br>
        <label>Company Name</label><br>
        <input type="text" name="companyname" placeholder="Company Name" ><br>
        <label>Work</label><br>
        <input type="text" name="works" placeholder="Work" ><br>
        <label>Joining Data</label><br>
        <input type="date" name="datein" placeholder="Joining Date" ><br>
        <label>Resignation Data</label><br>
        <input type="date" name="dateout" placeholder="Resignation Date" ><br>
        <input type="submit" name="submit" value="Insert" >
        </span>
        
      
    </div>

   

   
    <div class="C_details5">
      
      <div class="obj_details">
        
      </div>
    </div>
    <div class="C_details6">

    </div>
    

   
  </form>
   

  </div>

  <div id="footer">

    </div>
</body>

</html>
