<?php require('inc/toppart.php'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid bg-dark ">
<!-- To show data -->
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
          <div class="card">
              <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1 ">X</span> 
                  <span class="text-white font-weight-bold h1">dezo</span><span class="f-l">
                  Technologies</span></h1>
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">View Day</h3>
                </div>
          <div class="container-fluid w-0">
              <form action="#" method="POST" enctype="multipart/form-data ">
                <div class="row">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Day:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" disable aria-describedby="emailHelp" name="day" disabled value="<?php echo $data_row['day']; ?>">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Status:</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" disabled name="status" value="<?php echo $data_row['status']; ?>">
                  </div>
                  <div class="card-footer">
                  <a href="manage-days.php"><button type="button" class="btn btn-primary mb-4 " name="submit">View Day</button></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  <?php require('inc/footer.php'); ?>
