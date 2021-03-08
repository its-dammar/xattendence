<?php require('inc/toppart.php'); ?>
<?php require('inc/sidebar.php'); ?>
        <!-- Begin Page Content -->
 <div class="container-fluid  bg-dark">
  <div class="content-wrapper bg-dark">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
          <?php
          if(isset($_GET['id'])) {
            $id=$_GET['id'];
            $show_query="SELECT * FROM tbl_days WHERE id='$id'";
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
                <span class="text-white font-weight-bold h1">dezo</span><span class="f-l">
                Technologies</span></h1>
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">Edit Day</h3>
                </div>
                <?php
                  if(isset($_POST['submit'])) {
                    $day = $_POST['day'];
                    if($day!="") {
                      $query = "UPDATE tbl_days SET day='$day' WHERE id='$id'";
                      $result = mysqli_query($conn,$query);
                      if($result)
                    //   echo"hello";
                      ?>
                      <meta http-equiv = "refresh" content = " 0 ; url = manage-days.php?msg=usuccess"/>
                      <?php
                    }
                    else {
                      echo "Update Failed.";
                    }
                  }
                ?>
                <form action="#" method="POST" enctype="multipart/form-data ">
                  <div class="card-body bg-secondary">
                    <div class="row">
                      <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Day:</label>
                          <input type="text" class="form-control" placeholder="Enter Year" name="day"  value="<?php echo $data_row['day']; ?>">
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
 </div>
  <?php require('inc/footer.php'); ?>
