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
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
<style>
.pleft {
	padding-left:3px;
}
.pright {
	padding-right:3px;
}
.postItem .imageWrapper .image{
    height: 188px;
}
</style>
</head>

<body>
<?php //include("include/connection.php");?>




<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1">
    <div class="searchBlock">
      <form id="searchform" method="post" action="#">
        <span class="inputIcon"> <i class="icon ion-ios-search"></i> </span>
        <input type="text" class="form-control" id="searchInput" name="searchInput" placeholder="Search for goods...">
      </form>
    </div>
  </div>
  <div class="appContent mt-2">
    <!--<div class="sectionTitle mb-2"> 
      
      <!-- post list ->
      <div class="vcard">
        <div class="row" id="searchResult"> 
          <!-- item ->
          <?php
	$i=0;
  $productQuery=mysqli_query($con,"select * from `tbl_product` where `status`='1'");
  while($productResult=mysqli_fetch_array($productQuery)){$i++;?>
          <div class="col-6 <?php if(($i%2)==0){echo"pleft";}else{echo "pright";}?>">
            <div class="vcard card"> <a href="productdetails.php?pid=<?php echo encryptor('encrypt', $productResult['id']); ?>" class="postItem">
              <div class="imageWrapper"> <img src="../admin/product/npgn54.jpeg" alt="image" class="image"> </div>
              <p class="text-center"><?php echo $productResult['name'];?></p>
              <footer>₹ <?php echo number_format($productResult['price'], 2);?></footer>
              </a> </div>
          </div>
          <?php }?>
          <!-- * item -> 
          <!-- item ->
          
        </div>
      </div>
      <!-- * post list ->
      
      <div class="p-2"></div>
      
      <!-- * listview -> 
      
    </div>-->
    
    
    <div class="container-fluid  mb-2"> <!--sectionTitle-->
      
      <!-- post list -->
      <div class="">
        <div class="row" id="searchResult"> 
          <!-- item -->
          
          <div class="col-6 ">
            <div class="vcard card"> <a href="productdetails.php" class="postItem">
              <div class="imageWrapper"> <img src="../admin/product/npgn54.jpeg" alt="image" class="image"> </div>
              <p class="text-center">Gold Plated Ring for Women & Girls Stylish in American Diamond 22k</p>
              <footer>₹ 25,354.00</footer>
              </a> </div>
          </div>
          
          <div class="col-6 ">
            <div class="vcard card"> <a href="productdetails.php" class="postItem">
              <div class="imageWrapper"> <img src="../admin/product/5upekm.jpg" alt="image" class="image"> </div>
              <p class="text-center"> Rose Gold and Diamond Ring for Women 14k</p>
              <footer>₹ 27,295.00</footer>
              </a> </div>
          </div>
          
          <div class="col-6 ">
            <div class="vcard card"> <a href="productdetails.php" class="postItem">
              <div class="imageWrapper"> <img src="../admin/product/zzqz7a.jpg" alt="image" class="image"> </div>
              <p class="text-center"> Gold Plated Traditional Kundan Earrings with Pearl Glided for Women 18k</p>
              <footer>₹ 33,466.00</footer>
              </a> </div>
          </div>
          
          <div class="col-6 ">
            <div class="vcard card"> <a href="productdetails.php" class="postItem">
              <div class="imageWrapper"> <img src="../admin/product/07jtt7.jpg" alt="image" class="image"> </div>
              <p class="text-center">Diamond Jewellery Gold Diamond Ring for Woman 18k</p>
              <footer>₹ 17,536.00</footer>
              </a> </div>
          </div>
          
          <!-- * item --> 
          <!-- item -->
          
        </div>
      </div>
      <!-- * post list -->
      
      <div class="p-2"></div>
      
      <!-- * listview --> 
      
    </div>
    
    <!-- app Footer --> 
    
    <!-- * app Footer --> 
    
  </div>
</div>
<?php include("include/footer.php");?>
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