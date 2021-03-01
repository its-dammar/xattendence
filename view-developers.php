<?php require('inc/toppart.php'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid bg-dark ">
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
          <div class="card">
              <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1 ">X</span> 
                  <span class="text-white font-weight-bold h1">dezo</span><span>&nbsp&nbsp&nbsp&nbsp&nbsp
                  Technologies</span></h1>
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">View developers</h3>
                </div>
          <!-- Content Row -->
          <div class="container-fluid w-0">
          <form action="#" method="POST" enctype="multipart/form-data ">
            <div class="row">
                <div class="form-group col-6">
                  <label for="exampleInputEmail1">Name:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" disable aria-describedby="emailHelp" name="name" disabled value="<?php echo $data_row['name']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Company:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" disabled name="company" value="<?php echo $data_row['company']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Address:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" disabled name="address" value="<?php echo $data_row['address']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Email:</label>
                  <input type="email" class="form-control" id="exampleInputPassword1"   name="email" disabled value="<?php echo $data_row['email']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Qualification</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" disabled  name="qfn" value="<?php echo $data_row['qfn']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">position:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="position" disabled value="<?php echo $data_row['position']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Contact:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="contact" disabled value="<?php echo $data_row['contact']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Experience:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="experience" disabled value="<?php echo $data_row['experience']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Status:</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" disabled name="status" value="<?php echo $data_row['status']; ?>">
                </div>
                <div class="card-footer">
                <a href="manage-developers.php"><button type="button" class="btn btn-primary mb-4 " name="submit">Manage Developerss</button></a>
                    </div>
              </form>
              
            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <?php require('inc/footer.php'); ?>
