<?php
include "./dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <title>Document</title>
</head>
<body class= "container mt-5" >
<a href="crud.php" class="btn btn-primary">Add User</a>
<table class="table" style=" margin-top:50px ; ">
  <thead >
    <tr>
    <th scope="col">SNO.</th>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>

      
    </tr>
  </thead>
  <tbody>
    <?php
   
    $sql = "Select * from crudop";
    $result  = mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_assoc($result)){
        $id= $row['id'];
        $name= $row['name'];
        $email= $row['email'];
        $number= $row['mobile'];
        $password= $row['password'];
        echo '<tr><th>'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$number.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td>
    </tr>';
    }

    
   
    ?>
    

  </tbody>
</table>
</body>
</html>