<?php require('inc/toppart.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid  bg-dark">
<!-- To show data -->
<?php
if(isset($_GET['id'])) {
  $id=$_GET['id'];
  $show_query="SELECT * FROM tbl_developers WHERE id='$id'";
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
<!-- To show data -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 bg-primary p-2">
          <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold">X</span> 
                  <span class="text-white font-weight-bold">dezo</span><span>&nbsp&nbsp&nbsp&nbsp&nbsp
                  Technologies</span></h1>
            <h1 class="h3 mb-0 text-gray-800 ml-3">Edit Developers</h1>
          </div>
<!-- when submit button is clicked -->
      <?php
        if(isset($_POST['submit'])) {
          $name = $_POST['name'];
          $company = $_POST['company'];
          $address = $_POST['address'];
          $email = $_POST['email'];
          $qfn = $_POST['qfn'];
          $position = $_POST['position'];
          $contact = $_POST['contact'];
          $experience = $_POST['experience'];

          if($name!="" && $email!="" && $contact!="") {
            $query = "UPDATE tbl_developers SET name='$name', company='$company', address='$address', email='$email', qfn='$qfn', position='$position', contact='$contact', experience='experience',status='$status' WHERE id='$id'";
            $result = mysqli_query($conn,$query);
            if($result)
            ?>
            <meta http-equiv = "refresh" content = " 0 ; url = manage-developers.php?msg=usuccess"/>
            <?php
          }
          else {
            echo "Update Failed.";
          }
        }
 ?>
<!-- when submit button is clicked -->
          <!-- Content Row -->
          <div class="container-fluid ml-5 w-0">
                  <form action="#" method="POST" enctype="multipart/form-data ">
                    <div class="card-body bg-secondary">
                      <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name"  value="<?php echo $data_row['name']; ?>">
                          </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Company:</label>
                            <input type="text" class="form-control"  placeholder="Company" name="company" value="<?php echo $data_row['company']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Address:</label>
                            <input type="text" class="form-control"  placeholder="Address" name="address" value="<?php echo $data_row['address']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Email:</label>
                            <input type="email" class="form-control" placeholder="Email" name="email"  value="<?php echo $data_row['email']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Qualification.</label>
                            <input type="text" class="form-control"  placeholder="qualification." name="qfn"  value="<?php echo $data_row['qfn']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Position:</label>
                            <input type="text" class="form-control"  placeholder="position." name="position"  value="<?php echo $data_row['position']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Contacts:</label>
                            <input type="text" class="form-control"  placeholder="contacts." name="contact"  value="<?php echo $data_row['contact']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Experience:</label>
                            <input type="text" class="form-control"  placeholder="experience." name="experience"  value="<?php echo $data_row['experience']; ?>">
                          </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                  </form>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <?php require('inc/footer.php'); ?>
