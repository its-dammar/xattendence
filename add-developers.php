<?php require('inc/toppart.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper bg-dark">


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

                  <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold">X</span> 
                  <span class="text-white font-weight-bold">dezo</span><span>&nbsp&nbsp&nbsp&nbsp&nbsp
                  Technologies</span></h1>
                  <div class="card-header">
                    <a href="add-developers.php"><h3 class="card-title font-wight-bold text-white ml-5">Add Developer</h3></a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->

                  <!-- when the button is submit -->
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
                      $query = "INSERT INTO tbl_developers (name, company, address, email, qfn, position, contact, experience,status) 
                      VALUES('$name','$company','$address','$email','$qfn','$position','$contact','$experience',1)";
                      $result = mysqli_query($conn,$query);
                      if($result)
                      {
                        ?>
                        <meta http-equiv = "refresh" content = " 0 ; url = manage-developers.php"/>
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
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name">
                          </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Company:</label>
                            <input type="text" class="form-control"  placeholder="Company" name="company">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Address:</label>
                            <input type="text" class="form-control"  placeholder="Address" name="address">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Email:</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Qualification.</label>
                            <input type="text" class="form-control"  placeholder="qualification." name="qfn">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Position:</label>
                            <input type="text" class="form-control"  placeholder="position." name="position">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Contacts:</label>
                            <input type="text" class="form-control"  placeholder="contacts." name="contact">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Experience:</label>
                            <input type="text" class="form-control"  placeholder="experience." name="experience">
                          </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require('inc/footer.php'); ?>
