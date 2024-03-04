<?php
include './dbcon.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <title>Crud</title>
</head>
<body class="container">
<form method="post" >
<?php
$id = $_GET['updateid'];
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql ="Update crudop set id= '$id' , name ='$name', email='$email', mobile='$number',password = '$password' where id= '$id'";
  $result =  mysqli_query($conn,$sql);
  if ($result){
    // echo "<div class='message'>
    // <p>data insert successfully!</p>
    // </div> <br>";
    header('location:display.php');
    // echo "<a href='index.php'><button class='btn btn-primary'>Back Now</button>";
  }else{
    die(mysqli_error($conn));
  }
}else{
?>
<div class="mb-3 mt-5 ">
  <label  class="form-label"  >Name</label>
  <input type="text" name="name" autocomplete="off" required>
</div>
<div class="mb-3">
  <label  class="form-label">Email</label>
  <input type="email" name="email" autocomplete="off" required>
</div>
<div class="mb-3">
  <label  class="form-label">Mobile</label>
  <input type="text" name="mobile" autocomplete="off" required>
</div>
<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" name="password" autocomplete="off" required>
</div>
  <button type="submit" name="submit" class="btn btn-primary" >Update</button>
</form>
<?php }?>
</body>
</html>