<?php
require_once './config/database.php';
spl_autoload_register(function ($class_name) {
    require './app/model/' . $class_name . '.php';
});

$notification = '';
$NovelModel = new NovelModel();

if (isset($_POST['deleteNovel'])) {
    $id = $_POST['novel_id'];
    if($NovelModel->deleteNovel($id)) {
        $notification = 'Deleted successfully';
    }
}

$novelList = $NovelModel->getNovels();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Tàng thư viện</title>
  <!-- <meta content="" name="description"> -->
  <!-- <meta content="" name="keywords"> -->

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.5.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
        <!-- Xuất thông báo -->
        <?php
        if(!empty($notification)) {
        ?>
        <div class="alert alert-success" role="alert">
            <?php echo $notification; ?>
        </div>
        <?php
        }
        ?>
      <div class="logo float-left">
        <h1 class="text-light"><img src="assets/img/logo1.png" class="logo-index"></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="index.php">Đăng Xuất</a></li> 
          <li><a href="createnovel.php">Thêm Truyện</a></li>         
        
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/slide1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Phàm Nhân Tu <span>Tiên</span></h2>
                <p class="animate__animated animate__fadeInUp">Phàm nhân tu tiên, phong vân tái khởi
                  Xuyên qua không gian và thời gian, luân hồi nghịch chuyển               
                  Kim Tiên Thái Ất, Đại La Đạo Tổ                
                  Tam thiên đại đạo, pháp tắc chí tôn                 
                  《 Phàm Nhân Tu Tiên Truyện 》 Tiên Giới Thiên, một cái Hàn Lập quát tháo Tiên Giới chuyện xưa, một phàm nhân tiểu tử tu tiên Bất Diệt truyền thuyết.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Lâm Uyên Thành</h2>
                <p class="animate__animated animate__fadeInUp">Tô Vân làm sao cũng không có nghĩ đến, cuộc đời mình hơn mười năm Thiên môn trấn, chỉ có bản thân là người.
                  Hắn càng không nghĩ đến Thiên môn trấn bên ngoài, phương viên trăm dặm, là lừng lẫy nổi danh khu không người.
                  Trong đêm đen gặp vực sâu mà đi, tu đến xốc lại tinh thần, như đi băng mỏng!</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Qủy Bí Chi Chủ</h2>
                <p class="animate__animated animate__fadeInUp">Trong cơn thủy triều của hơi nước và máy móc, ai có thể chạm đến phi phàm? Trong màn sương mờ của lịch sử cùng hắc ám, là ai nói bên tai? Ta tỉnh lại từ trong quỷ bí, mở mắt trông thấy thế giới này: Súng ống, đại pháo, cự hạm, tàu bay, máy tính hiệu số; ma dược, xem bói, nguyền rủa, người treo ngược, vật phong ấn. . .
                  Ánh sáng vẫn chiếu rọi như trước, thần bí chưa hề rời xa.  
                  Đây là một đoạn truyền thuyết về "Ngu giả".
                  =====                  
                  Đại thần bạch kim tái xuất giang hồ</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">

      <div class="row">
            <div class="col-6">
                <h1>Quản Lý Tiểu Thuyết</h1>
            </div>
            <div class="col-6 text-right">
                <a href="createnovel.php" class="btn btn-primary">CREATE</a>
            </div>
        </div>
        
        <table class="table">
            <thead>
                <td>ID</td>
                <td style="width: 50px;">Hình</td>
                <td>Tên Truyện</td>
                <td>Update</td>
                <td>Delete</td>
            </thead>
            <?php
            foreach ($novelList as $item) {
            ?>
            <tr>
                <td><?php echo $item['novel_id'] ?></td>
                <td><img src="./public/images/<?php echo $item['novel_hinh'] ?>" class="img-fluid" alt="..."></td>
                <td><?php echo $item['novel_ten'] ?></td>
                <td><a href="updatenovel.php?id=<?php echo $item['novel_id'] ?>" class="btn btn-primary">UPDATE</a></td>
                <td>
                    <form action="manage.php" method="post" onsubmit="return confirm('Xoa khong?')">
                        <input type="hidden" name="novel_id" value="<?php echo $item['novel_id'] ?>">
                        <button type="submit" name="deleteNovel" class="btn btn-danger">DELETE</button>
                    </form>                
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>    
      </div>
    </section><!-- End About Lists Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-container">
        <div class="container">
            <div class="col-md-3"><img src="assets/img/footer.png" height="60"></div>
            <div class="footer-right col-md-9">
                © 2007 Tàng Thư Viện Inc.<br>
                Tàng Thư Viện là sân chơi mở và free cho cộng đồng fan kiếm hiệp, tiên hiệp, ngôn tình.
                Chúc các bạn có những giây phút thư giãn thoải mái sau giờ làm việc và học tập căng thẳng.
            </div>
        </div>
    </div>
</footer>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>