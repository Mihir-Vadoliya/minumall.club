<?php 
ob_start();
session_start();
if($_SESSION['userid']=="")
{
	header("location:index.php?msg1=notauthorized");
	exit();
}




if(isset($_POST['update']))
{
include ("include/connection.php");

$amount1 = $_POST['level1'];
$sql1="update `level` set `amount`='$amount1' where `level`= 1"; 
mysqli_query($con,$sql1);


$amount2 = $_POST['level2'];
$sql2="update `level` set `amount`='$amount2' where `level`= 2"; 
mysqli_query($con,$sql2);

$amount3 = $_POST['level3'];
$sql3="update `level` set `amount`='$amount3' where `level`= 3"; 
mysqli_query($con,$sql3);

$amount4 = $_POST['level4'];
$sql4="update `level` set `amount`='$amount4' where `level`= 4"; 
mysqli_query($con,$sql4);

$amount5 = $_POST['level5'];
$sql5="update `level` set `amount`='$amount5' where `level`= 5"; 
mysqli_query($con,$sql5);


header("location:manage_level.php");
    
    
    
}


	
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adminsuit | Manage Task</title>
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
<?php include ("include/connection.php");?>
<?php include ("include/header.inc.php");?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include ("include/navigation.inc.php");?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manage Level Income</h1>
      <ol class="breadcrumb">
        <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Level Income</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header box-header2">
             
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
           
           
           
           <form action="" method="post">
             <table class="table">
    <thead>
      <tr>
        <th>Level</th>
        <th>Interest</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>
             <?php 
	           $level1 = mysqli_query($con,"SELECT * FROM `level` where `level`= 1"); 
			   $level1 = mysqli_fetch_array($level1);
			  ?>
            
            <input type="text" name="level1" value="<?php echo $level1["amount"];   ?>"> %
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>
             <?php 
	           $level2 = mysqli_query($con,"SELECT * FROM `level` where `level`= 2"); 
			   $level2 = mysqli_fetch_array($level2);
			  ?>
            
             <input type="text" name="level2" value="<?php echo $level2["amount"];   ?>" > %</td>
      </tr>
      <tr>
        <td>3</td>
        <td>
            <?php 
	           $level3 = mysqli_query($con,"SELECT * FROM `level` where `level`= 3"); 
			   $level3 = mysqli_fetch_array($level3);
			  ?>
              <input type="text" name="level3" value="<?php echo $level3["amount"];   ?>" > %</td>
      </tr>
       <tr>
        <td>4</td>
        <td> <?php 
	           $level4 = mysqli_query($con,"SELECT * FROM `level` where `level`= 4"); 
			   $level4 = mysqli_fetch_array($level4);
			  ?>
              <input type="text" name="level4" value="<?php echo $level4["amount"];   ?>" > %</td>
      </tr>
       <tr>
        <td>5</td>
        <td> <?php 
	           $level5 = mysqli_query($con,"SELECT * FROM `level` where `level`= 5"); 
			   $level5 = mysqli_fetch_array($level5);
			  ?>
              <input type="text" name="level5" value="<?php echo $level5["amount"];   ?>" > %</td>
      </tr>
    </tbody>
  </table>   
  
  
  <input type="submit" class="btn btn-primary" name="update" value="update">
               
               
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
  
<?php include("include/footer.inc.php");?></div>
<!-- ./wrapper -->
<script>
 
	
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
  $(function () {
	  $(".checkbox-toggle").click(function () { 
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $("input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $("input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });
    //$("#example1").DataTable();
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
<script type="text/javascript">
 function delete_row(Id) {
 var strconfirm = confirm("Are You Sure You Want To Delete?");

           if (strconfirm == true) {
               $.ajax({
                   type: "Post",
                  data:"id=" + Id + "& type=" + "delete" ,
                   url: "manage_taskAction.php",
                   success: function (html) { 
                      if(html==1){
						  alert("Selected Item Deleted Sucessfully....");
                     window.location = 'manage_task.php';
					  }
					  else if(html==0){
						  alert("Some Technical Problem");
						  
						  }
                   },
                   error: function (e) {
                   }
               });
           }

       }
</script>
<script type="text/javascript">
 function Respond(Id) {
 var strconfirm = confirm("Are you sure you want to Inactive?");

           if (strconfirm == true) {
               $.ajax({
                   type: "Post",
                  data:"id=" + Id + "& type=" + "chk" ,
                   url: "manage_taskAction.php",
                   success: function (html) {
                       //alert(html);
                       window.location = 'manage_task.php';
                       return false;
                   },
                   error: function (e) {
                   }
               });
           }

       }
</script>
<script type="text/javascript">
 function UnRespond(Id) {
           var strconfirm = confirm("Are you sure you want to Active?");
           if (strconfirm == true) {
               $.ajax({
                   type: "Post",
                   data:"id=" + Id + "& type=" + "unchk" ,
                   url: "manage_taskAction.php",
                   success: function (html) {
                       //alert(html);
                    window.location = 'manage_task.php';
                       return false;
                   },
                   error: function (e) {
                   }
               });
           }

       }
</script>
</body>
</html>
