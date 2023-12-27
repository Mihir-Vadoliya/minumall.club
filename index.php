<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include'head.php' ?>
  <link rel="stylesheet" href="assets/css/style.css?v=2">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="Welcome To MINU Mall">
  <meta name="keywords" content="Welcome To MINU Mall" />
  <style>
    .pleft {
     padding-left:3px;
   }
   .pright {
     padding-right:3px;
   }
   .logo{
     width: 180px !important;
     padding: 20px;
     /*margin-top: 10px;*/
   }
   .height{ height: 40px;
    line-height: 40px;
    border-radius: 20px;
    font-size: 23px;}
    .height .pageTitle{ line-height:2em;}
    .web_show{
      height: 100px;
      width: 100%;
      padding: 0 12px;
      box-sizing: border-box;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      background: #eee;
      box-shadow: 0 2px 4px -1px rgb(0 0 0 / 20%), 0 4px 5px 0 rgb(0 0 0 / 14%), 0 1px 10px 0 rgb(0 0 0 / 12%);
      will-change: padding-left,padding-right;
      position: relative;
    }
    .l{margin-left: -63%;}
    .carousel-indicators{display:none;}
    .hg{
     margin-bottom: 0px;
     display: inline-block;
     width: 100%;
     color: #616161;
     font-size: 19px;
     font-weight: 500;
     letter-spacing: .02em;
     white-space: nowrap;
     overflow: hidden;
     text-overflow: ellipsis;
   }
   .carousel-inner {
     width: 100%;
     display: inline-block;
     position: relative;
   }
   .carousel-inner {
     padding-top:36.25%;
     display: block;
     content: "";
   }
   .carousel-item {
     position: absolute;
     top: 0;
     bottom: 0;
     height:511px;
     right: 0;
     left: 0;
     background: skyblue;
     background: no-repeat center center scroll;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
   }

   .caption {
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translateX(-50%) translateY(-50%);
     width: 60%;
     z-index: 9;
     margin-top: 20px;
     text-align: center;
   }
   .carousel-control-prev{display:none;}
   .carousel-control-next{display:none;}
   .caption h1 {
    color: #fff;
    font-size: 52px;
    font-weight: 700;
    margin-bottom: 23px;
  }
  .caption h2 {
    color: rgba(255,255,255,.75);
    font-size: 26px;
    font-weight: 300;
  }
  a.big-button {
   color: #fff;
   font-size: 19px;
   font-weight: 700;
   text-transform: uppercase;
   background: #eb7a00;
   background: rgba(255, 0, 0, 0.75);
   padding: 28px 35px;
   border-radius: 3px;
   margin-top: 80px;
   margin-bottom: 0;
   display: inline-block;
 }
 a.big-button:hover {
   text-decoration: none;
   background: rgba(255, 0, 0, 0.9);
 }
 a.view-demo {
   color: #fff;
   font-size: 21px;
   font-weight: 700;
   display: inline-block;
   margin-top: 35px;
 }
 a.view-demo:hover {
   text-decoration: none;
   color: #333;
 }

 .carousel-indicators .active {
  background: #fff;
}
.carousel-indicators li {
  background: rgba(255, 255, 255, 0.4);
  border-top: 20px solid;
  z-index: 15;
}
.span{
  display: inline-block;
  width: auto;
  color: #616161;
  font-size: 20px;
  margin-left:7px;
  font-weight: 500;
  letter-spacing: .02em;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.wp{
  text-align: center;
  padding: 0 12px 16px;
  color: #9a9a9a;
  font-size: 16px;
}
.index_list {
  width: 100%;
  padding: 20px 0 64px 0;
  box-sizing: border-box;
  background: #fafafa;
}
.index_list .list_content {
  width: 100%;
  padding: 15px;
  box-sizing: border-box;
  background: #fff;
  box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
  transition: .3s cubic-bezier(.25,.8,.5,1);
}
.index_list .list_content .list_ul {
 margin: 0 -39px;
 width: 100%;
 display: flex;
 flex-direction: row;
 flex-wrap: wrap;
 list-style-type: none;
}
.list_ul .list_li{
  width: 50%;
  padding: 4px;
  box-sizing: border-box;
}
.list_ul .list_li ol {
  background-color: #fff;
  border-color: #fff;
  color: rgba(0,0,0,.87);
  transition: .3s cubic-bezier(.25,.8,.5,1);
  box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%);
  border-radius: 2px;
  overflow: hidden;
}
.list_ul .list_li ol .list_img_box {
  width: 100%;
  height: 100%;
  padding: 19px;
  box-sizing: border-box;
}
.list_ul .list_li ol .list_img {
  width: 100%;
  height: 340px;/*100%*/
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50%;
}
.list_ul .list_li ol .info{
  height: 31px;
  margin-top: 0px;
  overflow: hidden;
  padding: 8px;
  font-size: 14px;
  box-sizing: border-box;
  text-align: center;
  color: rgba(0,0,0,.87);
}
@media only screen and (max-width: 600px) {
  .list_ul .list_li ol .list_img{height:166px !important;}
  .web_show {
    height:68px;
    padding: 0 9px;
  }
  .l{margin-left:-129px !important;}
  .spn{width:89px; margin-left:14px;}
  .hg{    font-size: 19px;
    padding-left: 0px;
    font-weight: normal;}
    .appHeader1 .pageTitle{    font-size: 14px;}
    .height .pageTitle {
      line-height: 20px;
      margin-top: 6px;
      margin-right: 12px;
    }
    .ion-md-download{font-size:29px;color: #b0b0b0;}
    .carousel-inner {

      height:450px;
    }
    .carousel-item{height:450px;}
    .list_ul .list_li ol .info{height:100%; margin-top:0px;}
    .list_ul .list_li ol .list_img_box{padding:9px; min-height: 434px;}
    .list_ul .list_li ol{padding:0px;}
    .index_list .list_content .list_ul{margin: 0 -1px;}
    .index_list .list_content .list_ul{padding:0px;}
  }
</style>
</head>

<body>
  <?php //include("include/connection.php");?>
  <!-- Page loading -->

  <!-- * Page loading --> 


  <div class="web_show">

    <div class="spa">
     <a href="#"><img class="logo" src="logo.png" height="110" ></a> 
   </div>


               <!-- <div class="d-flex l">
                <h4 class="hg">Wincolor</h4>
              </div>-->

              <div class="d-flex">
                <div class=" height"><!--appHeader1-->
                  <div class="text-center"> 
                   <!-- <div class="pageTitle"> <a target="_self" href="https://wincolor.ltd/"><i style="cursor:pointer;color:rgb(78, 78, 78);"><img class="logo" src="wincolor.png"></i></a></div>-->
                 </div>

               </div>
             </div>









           </div>


           <!-- App Header -->
           <div class="appHeader">
            <div class="pageTitle"  > <h1 style="color:#F04421; font-size: 26px; font-weight:normal; font-family: arial;">MINU MALL CLUB</h1>
              <p class="wp">Invest | Play | Earn</p>

            </div>
          </div>

          <!-- App Capsule -->
          <div id="appCapsule"> 
  <!-- Card Overlay Carousel ->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
     <?php  
     $image=mysqli_query($con,"select * from banner");
      while($imageResult=mysqli_fetch_array($image)){
     ?> 
    <div class="carousel-item active">
      <img class="d-block w-100" src="Youradmin/<?php echo $imageResult['material']; ?>" alt="First slide">
    </div>
    
    <?php } ?>
  </div>
</div>
<!-- * Card Overlay Carousel -->

<div class="container-fluid x">

  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active" style="background-image: url(assets/img/banner_new\ \(1\).jpg); background-size:cover;">
            <div class="caption">
              <!--<h1 style="color: black;">Color Prediction Game</h1>-->
              <!--<h2 style="color: black;">Play Game Daily win up to 2k to 15k</h2>-->
            </div><br><br><br><br>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/banner_new\ \(2\).jpg); background-size:cover;">
            <div class="caption">
              <!--<h1 style="color: black;">Play and Earn, Best Earning Platform</h1>-->
              <!--<h2 style="color: black;">Online And Win Real Money</h2>-->

              <!--<a class="big-button" href="" title="">Create Project</a>-->
              <!--<div class="clear"></div>-->
              <!--<a class="view-demo" href="" title="">View Demo</a>-->
            </div><br><br><br><br>
          </div>
          
          

        </div>
        
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
      
    </div>
    
    <div class=" index_list"><!--appContent-->
      <div class="list_content"> <!--sectionTitle mb-2-->

        <ul class="list_ul">
          <?php
          $i=0;
          $productQuery=mysqli_query($con,"select * from `tbl_product` where `status`='1'");
          while($productResult=mysqli_fetch_array($productQuery)){$i++;?>
            <li class="list_li" <?php if(($i%2)==0){echo"pleft";}else{echo "pright";}?> style="padding: 10px;">
              <ol> <a href="productdetails.php?pid=<?php echo encryptor('encrypt', $productResult['id']); ?>" class="postItem">
                <div class="list_img_box">
                  <a href="<?php echo $productResult['affiliate_link'];?>"> <img src="admin/<?php echo $productResult['images'];?>" alt="image" class="list_img"></a>
                  <p class="info text-center"><?php echo $productResult['name'];?></p>
                  <footer>₹ <?php echo number_format($productResult['price'], 2);?></footer>
                </div>

              </a>
            </ol>

          </li>
        <?php }?>
      </ul>

      <!-- post list ->
      <div class="vcard ">
        <div class="row"> 
          <!-- item ->
          <?php
	$i=0;
  $productQuery=mysqli_query($con,"select * from `tbl_product` where `status`='1'");
  while($productResult=mysqli_fetch_array($productQuery)){$i++;?>
          <div class="col-md-6 <?php if(($i%2)==0){echo"pleft";}else{echo "pright";}?>">
            <div class="vcard card"> <a href="productdetails.php?pid=<?php echo encryptor('encrypt', $productResult['id']); ?>" class="postItem">
              <div class="imageWrapper"> <img src="../Youradmin/<?php echo $productResult['images'];?>" alt="image" class="image"> </div>
              <p class="text-center"><?php echo $productResult['name'];?></p>
              <footer>₹ <?php echo number_format($productResult['price'], 2);?></footer>
              </a> </div>
          </div>
          <?php }?>
          <!-- * item --> 
          <!-- item ->
          
        </div>
      </div>
      <!-- * post list -->
      
      <div class="p-3"></div>
      
      <!-- * listview --> 
      
    </div>
    
    <!-- app Footer --> 
    
    <!-- * app Footer --> 
    
  </div>
</div>
<!-- * appCapsule -->

<?php include("include/footer.php");?>

<!-- ///////////// Js Files ////////////////////  --> 
<!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
</body>
</html>