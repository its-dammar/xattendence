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
                        <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1">X</span> 
                    <span class="text-white font-weight-bold h1">dezo</span><span class="f-l">
                    Technologies</span></h1>
                    <div class="card-header bg-primary ">
                    <h3 class="card-title text-white font-weight-bold ml-5 ">Add Year</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <!-- when the button is submit -->
                    <?php
                    if(isset($_POST['submit'])) {
                        $year = $_POST['year'];

                        if($year!="") {
                        $query = "INSERT INTO tbl_years(year, status) 
                        VALUES('$year',1)";
                        $result = mysqli_query($conn,$query);
                        if($result)
                        {
                            ?>
                            <meta http-equiv = "refresh" content = " 0 ; url = manage-years.php"/>
                            <?php
                        }
                        else 
                        {
                        echo "Contact couldn't added. Failed.";
                        }
                        }
                        else 
                        {
                        echo "Name is necessary";
                        }

                    } 
                    ?>
                    <form action="#" method="POST" enctype="multipart/form-data ">
                        <div class="card-body bg-secondary">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Year:</label>
                                <input type="text" class="form-control" placeholder="Enter Year" name="year">
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
<?php require('inc/footer.php'); ?>
