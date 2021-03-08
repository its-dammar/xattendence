
<?php require('inc/toppart.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper bg-dark">

<?php require('inc/sidebar.php'); ?>

  <div class="content-wrapper bg-dark">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                <div class="card">
                  <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold display-4">X</span> 
                  <span class="text-white font-weight-bold h1">dezo</span><span class="f-l ">
                  Technologies</span></h1>
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">Add Attendance</h3>
                </div>
                  <?php
                  if(isset($_POST['submit'])) {
                    $developer_id = $_POST['developer_id'];
                    $year_id = $_POST['year_id'];
                    $month_id = $_POST['month_id'];
                    $day_id = $_POST['day_id'];
                    $check = $_POST['check'];

                    if( $developer_id!="" && $year_id!="" &&  $month_id!="" && $day_id!="" && $check!="") {
                      $query = "INSERT INTO tbl_mattendences (developer_id, year_id, month_id, day_id,check, status) 
                      VALUES('$developer_id','$year_id','$month_id','$day_id', '$check',1)";
                      $result = mysqli_query($conn,$query);
                      if($result)
                      {
                        ?>
                        <meta http-equiv = "refresh" content = " 0 ; url = manage-attendance.php"/>
                        <?php
                      }
                      else 
                      {
                      echo "Contact couldn't added. Failed.";
                      }
                    }
                    else 
                    {
                      echo "developer_id , year_id, month_id, day-id are fields are necessary";
                    }

                  } 
                  ?>
                  <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="card-body bg-secondary">
                      <div class="row">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Developers</th>
                              <th>Is Present ?</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $query = "SELECT * FROM tbl_developers";
                            $result = mysqli_query($conn,$query);
                            while($data=mysqli_fetch_array($result))
                            {
                              ?>
                            <tr>  
                              <td scope="row"><?php echo $data['name']; ?> </td>
                              <td>
                                <?php
                                  $data_id = $data['id'];
                                  $year_id = date("Y");
                                  $month_id = date("m");
                                  $day_id = date("d");

                                  $check_query = "SELECT * FROM tbl_attendance WHERE developers_id='$data_id' && year_id='$year_id' && month_id='$month_id' && day_id='$day_id'";
                                  $check_result = mysqli_query($conn,$check_query);
                                  $count = mysqli_num_rows($check_result);
                                  if($count == 1)
                                  {
                                    ?>
                                    <a name="" id="" class="btn-xs btn btn-primary" href="process/attendance.php?developer_id=<?php echo $data['id']; ?>&status=0" role="button">Yes</a>
                                    <?php
                                  }
                                  else 
                                  {
                                    ?>
                                    <a name="" id="" class="btn-xs btn btn-primary" href="process/attendance.php?developer_id=<?php echo $data['id']; ?>&status=1" role="button">No</a>
                                    <?php
                                  }
                                ?>

                              </td>
                            </tr>
                              <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require('inc/footer.php'); ?>




<!-- 
<table class="bg-dark ">
              <!-- <thead>
              <tr class="weekDays-col">
                  <th class="name-col ">Days</th>
              </tr>
              <tr>
                <th class="name-col">Developer Name</th>
                <th>1</th>
                <th class="missed-col">Absent</th>
              </tr>
              </thead>
              <tbody>
                <tr class="student">
                  <td class="name-col">Dammar Khadayat</td>
                  <td class="attend-col"><input type="checkbox"></td>
                  <td class="attend-col"><input type="checkbox"></td>
                  <td class="missed-col">0</td>
                </tr>
              </tbody>
            </table> --> -->