<?php
require('../connection/config.php');

if(isset($_GET['id'])) {
  $id=$_GET['id'];
        
  $query="DELETE FROM tbl_contacts WHERE id='$id'";
  $result=mysqli_query($conn,$query);

  if($result)
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = ../manage-contact.php?msg=dsuccess"/>
    <?php
  }
  else
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = ../manage-contact.php?msg=derror"/>
    <?php
  }
}

 ?>
