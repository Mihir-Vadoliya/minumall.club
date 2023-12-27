<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}?>

<!doctype html>
<html lang="en">
     <?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$Query=mysqli_query($con,"select * from tbl_website WHERE id=1");
$rows=mysqli_fetch_array($Query);
?>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $rows['title']; ?></title>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style>
  body {
	-ms-user-select:text;
	user-select:text;
	-moz-user-select:text;
	-webkit-user-select:text
}
.layout--tabs .nav-item{
    width:33%;
}
.table thead th{color:#000;}
.accordion .btn-link::after{
    display:none;
}
.card {
    border: 1px solid #E5E9F2;
    border-radius: 3px;
    padding: 0px;
}
.card .card-title {
    margin-bottom: 7px;
}

.nav-tabs.size2 .cvc {
  width: 33%;
}

h3{ font-weight:normal; font-size:20px;}
h4{ font-weight:normal; font-size:18px; color:#858585;}
.card-body{ padding:.6rem;}
td{ padding:3px;}
.btn-sm {
    height: 26px;
    padding: 0px 12px;
}
.form-control{box-shadow:none; border-bottom:#ccc solid 1px; margin-bottom:3px;}
#alert h4{font-size: 1rem; font-weight:bold; color:#333;}
#alert p{font-size: 13px; margin-top:20px;}
#alert .modal-content{border-radius:3px}
#alert .modal-dialog{padding:20px; margin-top:130px;}

label{ color:#999;}
#bonus .modal-dialog{margin-top:100px;}
#bonus .modal-footer{ border:none;}
.dropdown-menu{ background:#fff;top: -15px;
left: -145px; border:none;
border-radius:0px;
-webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);}
.appHeader1 .right{right:20px;}
.dropdown-item {
    padding: .75rem 1.5rem;
}

.nav-tabs .nav-link.active{
    background:#ccc !important;
        padding: 0 198px;

}

.tab-content {
  padding: 0;
}

.card {
  border-radius: 0 0 .25rem .25rem;
  border-top: 0;
}

.nav-tabs {
  height: 42px;
  padding: 0;
  position: relative;

  .nav-item {
    margin-left: 0;
 
    a {
      color: black;
      display: block;
      padding: 8px 25px;
    }


    &.overflow-tab {
      background-color: white;
      display: none;
      position: absolute;
      right: 0;
      width: 150px;
      z-index: 1;

      a {
        border: 1px solid lightgray;
        border-radius: 0;
        padding: 6px 10px;

        &:hover,
        &:focus,
        &:active,
        &.active {
          background-color: lightgray;
        }
      }
  
      &:last-child {
        border-radius: 0 0 0 4px;
      }

    }

    &.overflow-tab-action {
      position: absolute;
      right: 0;
    }
  }

}
.btn-sm {
    height: 26px;
    padding: 0px 12px;
    border-radius: 0px;
    box-shadow:none;
}
.btn-secondary:focus {
    color: #171717;
    background-color: #ffffff;
    border-color: #ffffff;
    box-shadow: 0 0 0 0.2rem rgb(130 138 145 / 50%);
}
.fa-plus{font-size: 25px;
    color: #fff;
    font-weight: normal;}

.appBottomMenu .item .ion-md-person{color: #009688!important;}
.appBottomMenu .item .toggleSidebar span{color: #009688!important;}
@media only screen and (max-width: 600px) {
 .nav-tabs .nav-link.active {
    background: #ccc !important;
    padding: 0 28px;
}
}

</style>
</head>

<body>




<!-- App Header -->
<div class="appHeader1" style="background-color:#009688 !important">
  <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
    <div class="pageTitle">Red Envelope</div>
  </div>
  
  <div class="right"> 
  
 <a href="add_red_envelope.php"><i class="fa fa-plus" ></i></a> 

  <!--<div class="dropdown">
  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:25px;">
    <i class="icon ion-md-list"></i></a>
  

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <!--<a class="dropdown-item" href="promotionrecord.php">Promotion Record</a>->
    <a class="dropdown-item" href="bonusrecord.php">Bonus Record</a>
    <a class="dropdown-item" href="promotionApplyrecord.php">Apply Record</a>
  </div>
</div>-->
  </div>
</div>
<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 

<!-- App Capsule -->
<div id="appCapsule" class="pb-2">
    
    <div class="container-fluid">
        
        <div class="row">
            
            <div class="col-md-12">
                <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>No Data available</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <!-- Secondary Dropdown -->
  <div class="dropdown float-right">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"  data-toggle="dropdown">
    Row Per Page
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">10</a>
    <a class="dropdown-item" href="#">20</a>
    <a class="dropdown-item" href="#">30</a>
  </div>
</div>
            </div>
            
        </div>
        
    </div>
 
</div>
<!-- appCapsule -->

<?php include("include/footer.php");?>
<div id="bonus" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header paymentheader" id="paymenttitle"> 
      <h4 class="modal-title text-dark">Apply to Balance</h4>
       </div>
 <form action="#" method="post" id="bonusForm" autocomplete="off">
      <div class="modal-body mt-1" id="loadform">
      <div class="row">
                    <div class="col-12">
<div class="inner-addon left-addon mt-3">
      <i class="icon"><i class="fa fa-rupee"></i></i>
        <input type="number" id="bonusammount" name="bonusammount" class="form-control" placeholder="Bonus" onKeyPress="return isNumber(event)" >
      </div>                   
<input type="hidden" name="userid" id="userid" class="form-control" value="<?php echo $userid;?>">
<input type="hidden" name="action" id="action" class="form-control" value="bonus">
      
                    </div>
                </div>
      </div>
      <input type="hidden" name="tab" id="tab" value="parity">
      <div class="modal-footer"> 
   <a type="button" class="pull-left btn btn-sm closebtn" data-dismiss="modal">CANCEL</a>
<button type="submit" class="pull-left btn btn-sm btn-white text-info">CONFIRM</button> 
      </div>
      </form>
    </div>
  </div>
</div>

<div id="alert" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body" id="alertmessage"> </div>
      <div class="text-center pb-1">
    <a type="button" class="text-info" data-dismiss="modal">OK</a>
    </div> 
    </div>
  </div>
</div>
<!-- Jquery --> 
<script >
    /**
 * Defines the bootstrap tabs handler.
 *
 * @param {string} element
 *  Element.
 */
var tabsActions = function (element) {
  this.element = $(element);

  this.setup = function () {
    if (this.element.length <= 0) {
      return;
    }
    this.init();
    // Update after resize window.
    var resizeId = null;
    $(window).resize(function () {
      clearTimeout(resizeId);
      resizeId = setTimeout(() => {this.init()}, 50);
    }.bind(this));
  };
  
  this.init = function () {
 
    // Add class to overflow items.
    this.actionOverflowItems();
    var tabs_overflow = this.element.find('.overflow-tab');
 
    // Build overflow action tab element.
    if (tabs_overflow.length > 0) {
      if (!this.element.find('.overflow-tab-action').length) {
        var tab_link = $('<a>')
          .addClass('nav-link')
          .attr('href', '#')
          .attr('data-toggle', 'dropdown')
          .text('...')
          .on('click', function (e) {
            e.preventDefault();
            $(this).parents('.nav.nav-tabs').children('.nav-item.overflow-tab').toggle();
          });

        var overflow_tab_action = $('<li>')
          .addClass('nav-item')
          .addClass('overflow-tab-action')
          .append(tab_link);

        // Add hide to overflow tabs when click on any tab.
        this.element.find('.nav-link').on('click', function (e) {
          $(this).parents('.nav.nav-tabs').children('.nav-item.overflow-tab').hide();
        });
        this.element.append(overflow_tab_action);
      }
      
      this.openOverflowDropdown();
    }
    else {
      this.element.find('.overflow-tab-action').remove();
    }
 };
 
  this.openOverflowDropdown = function () {
    var overflow_sum_height = 0;
    var overflow_first_top = 41;
    
    this.element.find('.overflow-tab').hide();
    // Calc top position of overflow tabs.
    this.element.find('.overflow-tab').each(function () {
      var overflow_item_height = $(this).height() - 1;
      if (overflow_sum_height === 0) {
        $(this).css('top', overflow_first_top + 'px');
        overflow_sum_height += overflow_first_top + overflow_item_height;
      }
      else {
        $(this).css('top', overflow_sum_height + 'px');
        overflow_sum_height += overflow_item_height;
      }

    });
  };

  this.actionOverflowItems = function () {
    var tabs_limit = this.element.width() - 100;
    var count = 0;
    
    // Calc tans width and add class to any tab that is overflow.
    for (var i = 0; i < this.element.children().length; i += 1) {
      var item = $(this.element.children()[i]);
      if (item.hasClass('overflow-tab-action')) {
        continue;
      }
      
      count += item.width();
      if (count > tabs_limit) {
        item.addClass('overflow-tab');
      }
      else if (count < tabs_limit) {
        item.removeClass('overflow-tab');
        item.show();
      }
    }
  };
};

var tabsAction = new tabsActions('.layout--tabs .nav-tabs-wrapper .nav-tabs');
tabsAction.setup();

</script>
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/bonus.js"></script>

</body>
</html>