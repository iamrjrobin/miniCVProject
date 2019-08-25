<?php
include 'conn.php';
if(isset($_POST['submit']))
{
  $uid=$_GET['uid'];
  $fullname = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $religion = $_POST['religion'];
  $code=$_POST['code'];
  $q = " update `users` set fullname='$fullname', pwd='$password', age='$age', religion='$religion', gender='$gender',code='$code' where uid=$uid ";
  $query = mysqli_query($mysqli,$q);
  header('location:home.php');
} else {
  $uid = $_GET["uid"];
  $q = "SELECT * FROM users WHERE uid='". $uid . "';";
  $query = mysqli_query($mysqli, $q);
  if (mysqli_num_rows($query) > 0 ) {
  $res = mysqli_fetch_assoc($query);
  }
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
      <h1>Information Update</h1>
      <h4></h4>
    </div>
    <div class="C_details1">
      <div class="details">
        <p></p>
        <span>
          
        </span>
      </div>
    </div>
    <div class="common_line"></div>

    </div>
    
   <form name="myform"  action="#" onsubmit="return pwd();"  method="post">

    <div class="C_details2">
      <p class="title">Name and E-mail<br></p>
      <span class="com1"><br><label>Full Name</label><br>
        <input type="text" name="name" placeholder="Full Name" required minlength="5" value="<?php echo $res['fullname'] ?>"><br>
        <label>E-Mail</label><br>
        <input type="email" name="email" placeholder="E-Mail" value="<?php echo $res['email'] ?>"><br></span>
      
    </div>

    <div class="C_details3">
      <p class="title">Enter Age</p><br>
      <div class="skill_details">
        <span>
            <label>Age</label><br>
          <input id ="age"type="number" name="age" placeholder="Age"required value="<?php echo $res['email'] ?>"><br></span>
      </div>
    </div>

    <div class="C_details4">
      <p class="title">Select Gender</p>
      <div class="vol_details">
        <span> <label>Gender</label><br>
          <input type="radio" name="gender" value="male" <?php if($res["gender"] == "male") : ?> checked <?php endif ?>> Male<br>
          <input type="radio" name="gender" value="female" <?php if ($res["gender"] == "female") : ?> checked <?php endif ?>> Female<br>
          <input type="radio" name="gender" value="other" <?php if ($res["gender"] == "other") : ?> checked <?php endif ?>> Other<br> </span>
      </div>
    </div>
    <div class="C_details5">
      <p class="obj_title">Password Section</p>
      <div class="obj_details">
        <span><label>Password</label><br>
          <input type="password" name="password" placeholder="Password" required><br>
          <label>Re-type Password</label><br>
          <input type="password" name="repassword" placeholder="Re-type Password" required><br></span>
      </div>
    </div>
    <div class="C_details6">

    </div>
    <div class="C_details7">
      <p class="ex_title">Religion</p>
      <div class="ex_details">
        <span><br>
        <input type="text" name="religion" placeholder="Enter Religion" value="<?php echo $res['religion'] ?>"><br>
          
      </select><br></span>
      </div>
    </div>

    <div class="C_details8">
      <p class="aw_title"></p>
      <div class="aw_details">
        <span>  <br>
        <input type="number" name="code" placeholder="code" value="<?php echo $res['code'] ?>"><br>
          <input type="submit" name="submit" value="Update" >

    </div>
  </form>
   

  </div>

  <div id="footer">

    </div>
</body>

</html>