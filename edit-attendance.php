<?php require('inc/toppart.php'); ?>
        <!-- Begin Page Content -->
 <div class="container-fluid  bg-dark">
 
<?php require('inc/sidebar.php'); ?>

 <div class="content-wrapper bg-dark">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
              <?php
              if(isset($_GET['id'])) {
                $id=$_GET['id'];
                $show_query="SELECT * FROM tbl_attendance WHERE id='$id'";
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
            <div class="card bg-dark">
                <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1">X</span> 
                <span class="text-white font-weight-bold h1">dezo</span><span class="m-l">
                Technologies</span></h1>
              <div class="card-header bg-primary ">
                <h3 class="card-title text-white font-weight-bold ml-5 ">Edit Attendance</h3>
              </div>
          <?php
            if(isset($_POST['submit'])) {
              $developers_id = $_POST['developers_id'];
              $year_id = $_POST['year_id'];
              $month_id = $_POST['month_id'];
              $day_id = $_POST['day_id'];


              if($developers_id!="" && $year_id!="" && $month_id!="" && $day_id!="" ) {
                $query = "UPDATE tbl_developers SET developers_id='$developers_id', year_id='$year_id', month_id='$month_id', day_id='$day_id', WHERE id='$id'";
                $result = mysqli_query($conn,$query);
                // echo"$result";
                if($result)
                ?>
                <meta http-equiv = "refresh" content = " 0 ; url = manage-attendance.php?msg=usuccess"/>
                <?php
              }
              else {
                echo "Update Failed.";
              }
            }
             ?>    
            <form action="#" method="POST" enctype="multipart/form-data ">
              <div class="card-body bg-secondary">
                <div class="row ">
                  <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Developers_id:</label>
                      <input type="text" class="form-control" placeholder="Enter developer id" name="developers-id"  value="<?php echo $data_row['developers_id']; ?>">
                    </div>
                  <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Year_id:</label>
                      <input type="text" class="form-control"  placeholder="year id" name="year_id" value="<?php echo $data_row['year_id']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Month-id:</label>
                      <input type="text" class="form-control"  placeholder="month id" name="month_id" value="<?php echo $data_row['month_id']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Day_id:</label>
                      <input type="text" class="form-control" placeholder="day id" name="day_id"  value="<?php echo $data_row['day_id']; ?>">
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
  <?php require('inc/footer.php'); ?>
