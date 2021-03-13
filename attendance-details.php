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
                  <h3 class="card-title text-white font-weight-bold ml-5"> Attendance Details</h3>
                </div>
                <div class="card-body bg-secondary">
                  <div class="wrapper d-flex justify-content-center">
                    <div class="t-developer">
                        <a href="t-developers.php"><button type="button" class="btn btn-xs btn-primary float-left mr-5 p-2">Total Developers</button></a> 
                    </div>
                    <div class="t-developer">
                        <a href="present-days.php"><button type="button" class="btn btn-xs btn-primary float-left mr-5 p-2">Total Present days</button></a> 
                    </div>
                    <div class="t-developer">
                        <a href="absent-days.php"><button type="button" class="btn btn-xs btn-primary float-left mr-5 p-2">Total Absent Days</button></a> 
                    </div>
                    <div class="t-developer">
                        <a href="leave-days"><button type="button" class="btn btn-xs btn-primary float-left mr-5 p-2">Total Leave Days</button></a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <?php require('inc/footer.php'); ?>