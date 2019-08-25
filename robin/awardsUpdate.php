<?php
include 'conn.php';
if(isset($_POST['submit']))
{
  
  $aid=$_GET['aid'];
  $awardname = $_POST['awardname'];
  $uid=$_POST['uid'];
  $q= " update `awards` set awardname='$awardname', uid=$uid where aid=$aid";
  $query = mysqli_query($mysqli,$q);
  header('location:awardsshow.php');
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
      <h1>Award Info Input</h1>
      <h4></h4>
    </div>
    
    <div class="common_line"></div>

    </div>
    
   <form name="myform"  action="#" onsubmit="return pwd();"  method="post">

    <div class="C_details2">
      <p class="title">Award name and User ID<br></p>
      <span class="com1"><br><label>Award Name</label><br>
        <input type="text" name="awardname" placeholder="Award Name" ><br>
        <label>User ID</label><br>
        <input type="text" name="uid" placeholder="User ID"><br>
        <input type="submit" name="submit" value="Insert" ></span>
        
      
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
