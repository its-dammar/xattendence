<?php require('inc/toppart.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php require('inc/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
  
              <div class="card">
              <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold">X</span> 
                  <span class="text-white font-weight-bold">dezo</span><span>&nbsp&nbsp&nbsp&nbsp&nbsp
                  Technologies</span></h1>
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">Manage Managedevelopers</h3>
                </div>
                <?php
                if(isset($_GET['msg'])) {
                  $msg = $_GET['msg'];
                  if($msg=='dsuccess')
                  {
                    echo "Deleted Successfully.";
                  }
                  else 
                  {
                    echo "Could not deleted.";
                  }
                } 
                ?>
                <!-- /.card-header -->
                <div class="card-body bg-secondary">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>Action</th>
                      <th>Name</th>
                      <th>Company</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>qfn</th>
                      <th>position</th>
                      <th>contact</th>
                      <th>experience</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_developers";
                    $result = mysqli_query($conn,$query);
                    $i=0;
                    while($data = mysqli_fetch_array($result))
                    {
                      ?>
                    <tr>
                      <td><?php echo ++$i; ?></td>
                      <td>
                        <a href="view-developers.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-info float-left">View</button></a> 
                        <a href="edit-developers.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-primary float-left">Edit</button></a> 
                        <a href="process/delete-developer.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Delete</button></a> 
                      </td>
                      <td><?php echo $data['name']; ?></td>
                      <td><?php echo $data['company']; ?></td>
                      <td><?php echo $data['address']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['qfn']; ?></td>
                      <td><?php echo $data['position']; ?></td>
                      <td><?php echo $data['contact']; ?></td>
                      <td><?php echo $data['experience']; ?></td>
                    </tr>
                      <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>S.N.</th>
                      <th>Action</th>
                      <th>Name</th>
                      <th>Company</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>qfn</th>
                      <th>position</th>
                      <th>contact</th>
                      <th>experience</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main conten
    <!-- /.content -->
  </div>
  <?php require('inc/footer.php'); ?>