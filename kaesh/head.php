<html>
<?php
include("include/connection.php");
$userid = $_SESSION['frontuserid'];
$Query = mysqli_query($con, "select * from tbl_website WHERE id=1");
$rows = mysqli_fetch_array($Query);
?>
<title><?php echo $rows['title']; ?></title>
<link rel="shortcut icon" type="image/png" href="clogo.png" />

<body>
  <div class="preloader">
    <div class="preloader-inner">
      <img src="logo.png" alt="Loading...">
    </div>
  </div>
</body>
<style>
  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    transition: opacity 1s ease;
  }

  .preloader.hide {
    opacity: 0;
    pointer-events: none;
  }

  .preloader-inner {
    text-align: center;
  }

  .preloader-inner img {
    max-width: 50%;
    height: auto;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Hide preloader when page is fully loaded
    window.onload = function() {
      document.querySelector(".preloader").classList.add("hide");
    };
  });
</script>

</html>