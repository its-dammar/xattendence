<?php
require('../connection/config.php');

if(isset($_GET['id'])) {
  $id=$_GET['id'];
        
  $query="DELETE FROM tbl_days WHERE id='$id'";
  $result=mysqli_query($conn,$query);

  if($result)
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = ../manage-days.php?msg=dsuccess"/>
    <?php
  }
  else
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = ../manage-days.php?msg=derror"/>
    <?php
  }
}

 ?>
