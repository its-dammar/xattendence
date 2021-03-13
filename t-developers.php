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
            <div class="col-12">
  
              <div class="card">
              <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1">X</span> 
                  <span class="text-white font-weight-bold h1">dezo</span><span class="f-l">
                  Technologies</span></h1>
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">Attendance Details</h3>
                </div>
                <div class="card-body bg-secondary">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Contact</th>
                      <th>Total Days</th>
                      <th>Total Present Days</th>
                      <th>Total Absent Days</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_attendance";
                    $result = mysqli_query($conn,$query);
                    for($i = 0; $i < mysqli_fetch_assoc($result); $i++) {
                    {
                      ?>
                    <tr>
                      <td><?php echo ++$i; ?></td>
                      <td>
                        <?php 
                          $developer_id = $data['developers_id'];
                          $test_query = "SELECT * FROM tbl_developers WHERE id='$developer_id'";
                          $test_result = mysqli_query($conn,$test_query);
                          $row = mysqli_fetch_assoc($test_result);
                          echo $row['name'];
                        ?>
                      </td>
                      <td>  
                        <?php 
                          $developer_id = $data['developers_id'];
                          $test_query = "SELECT * FROM tbl_developers WHERE id='$developer_id'";
                          $test_result = mysqli_query($conn,$test_query);
                          $row = mysqli_fetch_assoc($test_result);
                          echo $row['position'];
                        ?>
                      </td>
                      <td>
                        <?php 
                          $developer_id = $data['developers_id'];
                          $test_query = "SELECT * FROM tbl_developers WHERE id='$developer_id'";
                          $test_result = mysqli_query($conn,$test_query);
                          $row = mysqli_fetch_assoc($test_result);
                          echo $row['contact'];
                        ?>
                      </td>
                      <td> <?php echo date('t'); ?>  </td>
                      <td>
                      <?php
                      $query="SELECT count(id) as id FROM tbl_attendance  ";
                      $result=mysqli_query($conn,$query);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['id'];
                      ?>
                      </td>
                      <td>
                      <?php 
                          $test_query = "SELECT count(*) as id FROM tbl_attendance INNER JOIN tbl_developers ON tbl_attendance.developers_id=tbl_developers.id";
                          $test_result = mysqli_query($conn,$test_query);
                          $row = mysqli_fetch_assoc($test_result);
                          echo $row['id'];
                        ?>
                      </td>
                    </tr>
                      <?php
                    }
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>S.N.</th>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Contact</th>
                      <th>Total Days</th>
                      <th>Total Present Days</th>
                      <th>Total Absent Days</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <?php require('inc/footer.php'); ?>