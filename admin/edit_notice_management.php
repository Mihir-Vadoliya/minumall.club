<?php
ob_start();
session_start();
if ($_SESSION['userid'] == "") {
    header("location:index.php?msg1=notauthorized");
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adminsuit | Notice Managment</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="css/app.css" id="maincss">

</head>

<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <?php include("include/connection.php"); ?>
        <?php include("include/header.inc.php"); ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include("include/navigation.inc.php"); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Notice Managment</h1>
                <ol class="breadcrumb">
                    <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Notice Managment</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">

                            <!-- /.box-header -->
                            <div class="box-body">
                                <?php
                                    
                                $notice_id = $_GET['notice_id'];
                         
                                $selectquery = "SELECT * FROM `notice` WHERE id='$notice_id'";
                                $query = mysqli_query($con, $selectquery);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <form  method="post" action="noticebe.php" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="">
                                                        <label for="uploadexcel">Add Notice</label>
                                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                        <textarea name="notice" id="" class="form-control" rows="10" required><?php echo $row['notice']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                           <a href="notice_managment.php"><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button></a> 
                                            <button type="submit" name="edit_submit" class="btn btn-danger" id="add_role">Upload</button>
                                        </div>

                                    </form>
                                <?php } ?>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <div id="excel" class="modal fade" role="dialog">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="chn">Add Main Notice</h4>

                    </div>
                    <form action="noticebe.php" enctype="multipart/form-data" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="">
                                        <label for="uploadexcel">Add Notice</label>
                                        <textarea name="notice" id="" class="form-control" rows="10" required></textarea>

                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-danger" id="add_role">Upload</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>

        </div>
        <?php include("include/footer.inc.php"); ?>
    </div>
    <!-- ./wrapper -->
    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true
            });
        });
    </script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>

    <script src="js/add_banner.js"></script>



</body>

</html>