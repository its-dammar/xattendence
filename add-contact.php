<?php require('inc/toppart.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<?php require('inc/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-dark">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card">
                <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1 ">X</span> 
                  <span class="text-white font-weight-bold h1">dezo</span><span class="f-l">
                  Technologies</span></h1>
               
                  <div class="card-header">
                    <a href="add.php">
                    <h3 class="card-title font-wight-bold text-white ml-5 font-weight-bold">Add Contact</h3></a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->

                  <!-- when the button is submit -->
                  <?php
                  if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $contact = $_POST['contact'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $company = $_POST['company'];
                    $notes = $_POST['notes'];

                    if($name!="" && $contact!="" && $email!="") {
                      $query = "INSERT INTO tbl_contacts (name,contact,email,address,company,notes,status) 
                      VALUES('$name','$contact','$email','$address','$company','$notes',1)";
                      $result = mysqli_query($conn,$query);
                      if($result)
                      {
                        ?>
                        <meta http-equiv = "refresh" content = " 0 ; url = manage-contact.php"/>
                        <?php
                      }
                      else 
                      {
                      echo "Contact couldn't added. Failed.";
                      }
                    }
                    else 
                    {
                      echo "Name, Contact and Email fields are necessary";
                    }

                  } 
                  ?>
                  <form action="#" method="POST" enctype="multipart/form-data ">
                    <div class="card-body bg-secondary">
                      <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="exampleInputPassword1">Contact No.</label>
                            <input type="text" class="form-control"  placeholder="Contact No." name="contact">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="exampleInputPassword1">Email:</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Address:</label>
                                <input type="text" class="form-control"  placeholder="Address" name="address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Company:</label>
                                <input type="text" class="form-control"  placeholder="Company" name="company">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputPassword1">Notes:</label>
                                <textarea class="form-control" name="notes" id="" cols="15" rows="7"></textarea>
                            </div>
                        </div>
                        </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
<?php require('inc/footer.php'); ?>
