<?php
ob_start();
session_start();
if ($_SESSION['userid'] == "") {
    header("location:index.php?msg1=notauthorized");
    exit();
}



if (isset($_GET['del'])) {
    include("include/connection.php");
    $dellid = $_GET['del'];

    $sqlDel = "Delete from `interest` where `id` in ($dellid) ";
    $querydel = mysqli_query($con, $sqlDel);
    if ($querydel) {
        header("location:manage_interest.php");
    } else {
        echo "0";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adminsuit | Manage ROI</title>
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
                <h1>Manage ROI Amount</h1>
                <ol class="breadcrumb">
                    <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Manage ROI Amount</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header box-header2">
                                <div class="col-sm-10">
                                    <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                                </div>
                                <?php
                                $selectquery = "SELECT * FROM `interest`";
                                $query = mysqli_query($con, $selectquery);
                                if (0 > mysqli_num_rows($query)) {
                                ?>
                                    <div class="col-sm-2">
                                        <div class="pull-right-btn">
                                            <a data-toggle="modal" href="#excel" class="btn btn-block btn-danger" data-backdrop="static" data-keyboard="false">Add New</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form id="formID" name="formID" method="post" action="#" enctype="multipart/form-data">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Amount</th>
                                                <th>ROI (%)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php


                                            $i = 0;
                                            $selectquery = "SELECT * FROM `interest`";
                                            $query = mysqli_query($con, $selectquery);
                                            while ($row = mysqli_fetch_array($query)) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?>.</td>
                                                    <td><?php echo $row['min_balance'] ?></td>
                                                    <td><?php echo $row['rate_interest'].' %' ?></td>

                                                    <td><a href="manage_interest-edit.php?id=<?php echo @$row['id']; ?>" class="update-person" title="Edit"><i class="fa fa-edit" style="font-size:16px;"></i></a> &nbsp;
                                                        <a href="manage_interest.php?del=<?php echo @$row['id']; ?>" class="update-person" style="color:#f56954; font-size:16px;" title="Delete"><i class="fa fa-trash"></i></a>

                                                    </td>


                                                </tr>
                                            <?php } ?>


                                        </tbody>

                                    </table>
                                    <div class="box-header box-header2" style="margin-bottom: 10px;">&nbsp; </div>

                                </form>
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
                        <h4 class="modal-title" id="chn">Add Main ROI</h4>

                    </div>
                    <form enctype="multipart/form-data" action="interestbe.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="">
                                        <label for="uploadexcel">Add Minimum Amount</label>
                                        <input class="form-control" id="min_balance" name="min_balance" type="number" required>
                                    </div>
                                </div>


                                <div class="col-lg-12" style="margin-top: 12px;">
                                    <div class="form-group ">
                                        <label for="uploadexcel">Add Rate of interest(%)</label>
                                        <input id="rate_interest" name="rate_interest" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" name="add">Submit</button>
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
    <script type="text/javascript">
        function delete_row(Id) {
            var strconfirm = confirm("Are You Sure You Want To Delete?");

            if (strconfirm == true) {
                $.ajax({
                    type: "Post",
                    data: "id=" + Id + "& type=" + "delete",
                    url: "addbannerNow.php",
                    success: function(html) {
                        if (html == 1) {
                            alert("Selected Item Deleted Sucessfully....");
                            window.location = '';
                        } else if (html == 0) {
                            alert("Some Technical Problem");

                        }
                    },
                    error: function(e) {}
                });
            }
        }
    </script>
    <script type="text/javascript">
        function Respond(Id) {
            var strconfirm = confirm("Are you sure you want to Unpublish?");

            if (strconfirm == true) {
                $.ajax({
                    type: "Post",
                    data: "id=" + Id + "& type=" + "chk",
                    url: "addbannerNow.php",
                    success: function(html) {
                        //alert(html);
                        window.location = '';
                        return false;
                    },
                    error: function(e) {}
                });
            }

        }
    </script>
    <script type="text/javascript">
        function UnRespond(Id) {
            var strconfirm = confirm("Are you sure you want to Publish?");
            if (strconfirm == true) {
                $.ajax({
                    type: "Post",
                    data: "id=" + Id + "& type=" + "unchk",
                    url: "addbannerNow.php",
                    success: function(html) {
                        //alert(html);
                        window.location = '';
                        return false;
                    },
                    error: function(e) {}
                });
            }
        }
    </script>


</body>

</html>