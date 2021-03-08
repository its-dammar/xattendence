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
                    <h3 class="card-title text-white font-weight-bold ml-5 ">Add day</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <!-- when the button is submit -->
                    <?php
                    if(isset($_POST['submit'])) {
                        $day = $_POST['day'];

                        if($day!="") {
                        $query = "INSERT INTO tbl_days(day, status) 
                        VALUES('$day',1)";
                        $result = mysqli_query($conn,$query);
                        if($result)
                        {
                            ?>
                            <meta http-equiv = "refresh" content = " 0 ; url = manage-days.php"/>
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
                                <label for="exampleInputEmail1">Day:</label>
                                <input type="text" class="form-control" placeholder="Enter Day" name="day">
                            </div>
                        </div>
                        </div>
                        <div class="card-footer bg-dark">
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
