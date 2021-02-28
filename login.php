<?php
  require('connection/config.php');

  if(isset($_POST['submit'])) {
    $useremail=$_POST['email'];
    $userpassword=md5($_POST['password']);

    $query="SELECT * FROM tbl_admins WHERE email='$useremail' && password='$userpassword'";
    $result=mysqli_query($conn,$query)  or die(mysqli_error($conn));

    $count=mysqli_num_rows($result);

    if($count==1) {
      $data_row=$result->fetch_assoc();
      $_SESSION['email']=$data_row['email'];
      header('Location:add.php');
    }
    else {
        header('Location:index.php?msg=error_login');
    }


  }


 ?>