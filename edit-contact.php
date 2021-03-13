<?php require('inc/toppart.php'); ?>
        <div class="container-fluid  bg-dark">
<?php
if(isset($_GET['id'])) {
  $id=$_GET['id'];
  $show_query="SELECT * FROM tbl_contacts WHERE id='$id'";
  $show_result=mysqli_query($conn,$show_query);
  // To get only one row data
  $data_row=$show_result->fetch_assoc();
  // $title=$data_row['title'];
  // $image=$data_row['image'];
  // $heading=$data_row['heading'];
  // $subheading=$data_row['subheading'];
  // $status=$data_row['status'];
}
 ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4 bg-primary p-2">
            <h1 class="h3 mb-0 text-gray-800 ml-3">Edit Contact</h1>
          </div>
<?php
if(isset($_POST['submit'])) {
  $name=$_POST['name'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $company=$_POST['company'];
  $notes=$_POST['notes'];
  $status=$_POST['status'];
    if($name!="" && $contact!="" && $email!="" && $address!="" && $company!="" && $notes!="" && $status!="") {
      $query="UPDATE tbl_contacts SET name='$name', contact='$contact', email='$email', address='$address', company='$company',  notes='$notes', status='$status' WHERE id='$id'";
      $result=mysqli_query($conn,$query);

      if($result) {
        ?>
        <meta http-equiv = "refresh" content = " 0 ; url = manage-contact.php?msg=usuccess"/>
        <?php
      }
      else {
        echo "Update Failed.";
      }
    }
}
 ?>
          <div class="container-fluid ml-5 w-0">
          <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Name:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $data_row['name']; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Contact:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="contact" value="<?php echo $data_row['contact']; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Email:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo $data_row['email']; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Address:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="<?php echo $data_row['address']; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Company:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="company" value="<?php echo $data_row['company']; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Notes:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="notes" value="<?php echo $data_row['notes']; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Status:</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" name="status" value="<?php echo $data_row['status']; ?>">
                </div>
                <div class="card-footer">
                    <a href="manage.php"><button type="submit" class="btn btn-primary p-3 " name="submit">Submit</button></a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  <?php require('inc/footer.php'); ?>
