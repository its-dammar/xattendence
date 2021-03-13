<?php require('inc/toppart.php'); ?>
    <div class="container-fluid bg-dark ">
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
        <div class="card">
        <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1 ">X</span> 
            <span class="text-white font-weight-bold h1">dezo</span><span class="f-l">
            Technologies</span></h1>
            <div class="d-sm-flex align-items-center justify-content-between mb-4  bg-primary p-2">
                <h1 class="h3 mb-0 text-gray-800 ml-5">View Contacts</h1>
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
                  <label for="exampleInputPassword1">Contact:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="contact" disabled value="<?php echo $data_row['contact']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Email:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1"   name="email" disabled value="<?php echo $data_row['email']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Address:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" disabled name="address" value="<?php echo $data_row['address']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Company:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" disabled name="company" value="<?php echo $data_row['company']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Notes:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" disabled  name="notes" value="<?php echo $data_row['notes']; ?>">
                </div>
                <div class="form-group col-6">
                  <label for="exampleInputPassword1">Status:</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" disabled name="status" value="<?php echo $data_row['status']; ?>">
                </div>
                <div class="card-footer">
                <a href="manage-contact.php"><button type="button" class="btn btn-primary mb-4 " name="submit">Manage Contacts</button></a>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  <?php require('inc/footer.php'); ?>
