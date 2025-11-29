
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoa đẹp </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
    
    <style>
  
  .content-wrapper {
        max-width: 900px; 
        width: 100%;    
        margin: 15px auto;        
        padding: 20px;         
        font-size: 16px;       
        line-height: 1.8;      
  }

  .content-wrapper h1 {
        font-size: 28px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 20px;
  }

  .content-wrapper h3 {
        font-size: 20px;
        margin-top: 25px;
        color: #d63384;
  }

  .content-wrapper p {
        font-size: 16px;
  }


  .content-wrapper img {
        max-width: 70%;    
        display: block;
        margin: 15px auto;
        border-radius: 6px;
  }


  .navbar {
        background-color: #d63384 !important;
        padding-top: 6px;
        padding-bottom: 6px;
  }

  .navbar .nav-link {
        color: white !important;
        font-size: 15px !important;  
        padding: 6px 12px !important; 
        font-weight: 500;
  }

  .navbar .nav-link:hover {
        color: #ffe6f2 !important;
        text-decoration: underline;
  }

  /* TOP BAR */
  .top-bar {
        background: #f8f9fa;
        height: 50px;
        font-size: 12px;
  }

  .top-bar .star i {
        color: #e84393;
        margin-right: 3px;
  }
</style>

</head>
<body>
<!-- TOP BAR -->
<div class="top-bar d-flex justify-content-between align-items-center px-4">
    

    <div class="right d-flex align-items-center gap-4">
        <a href="#" class="text-decoration-none text-secondary">
            <i class="bi bi-facebook"></i> Fanpage aFamily
        </a>
        <div class="search-box">
            <input type="text" class="form-control" placeholder="Tìm kiếm...">
        </div>
    </div>
</div>

<!-- LOGO + TREND -->
<div class="logo-area d-flex justify-content-start align-items-center px-4 mt-3 mb-2 gap-4">
    <img src="https://afamilycdn.com/web_images/afamily-1200x630.jpg"
         height="80" alt="Logo">
</div>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <div class="border border-danger p-2" style="--bs-border-opacity: .5;">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav " coloer="red">
        <a class="nav-link" href="#">
          <i class="bi bi-house-door-fill"></i>
        </a>
        <li class="nav-item">
          <a class="nav-link" href="#">LIFESTYLE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">XÃ HỘI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ĐẸP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">MẸ & BÉ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="#">GIÁO DỤC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">HẬU TRƯỜNG</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="#">SỨC KHỎE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TIÊU DÙNG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ĂN NGON</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TÂM SỰ-GIA ĐÌNH</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TRUNG NIÊN</a>
        </li>
      </ul>
    </div>
</div>
  </div>
</nav>

<div class="content-wrapper">

    <div class="header">
      <h1>14 loại hoa tuyệt đẹp thích hợp trồng để khoe hương sắc dịp hè</h1>
    </div>
<div class="body">
  <div class="first">
     <h4>Hãy nhanh chóng ghi vào sổ tay của bạn 14 loại hoa tuyệt đẹp để lên kế hoạch trồng chúng trong dịp xuân - hè này nhé!</h4>
  </div>
  <div class="second">
    <p> Mỗi loại hoa sẽ khoe sắc rực rỡ vào đúng thời điểm thích hợp trong năm, khí hậu đáp ứng thuận lợi
   sẽ giúp hoa phát triển nhanh và đẹp một cách hoàn hảo. Nếu đang có kế hoạch trồng hoa trong dịp 
   xuân - hè thì bạn hãy tham khảo bài viết dưới đây nhé! </p>
  </div>

  <div class=hoa>
  <?php 
    require_once ("flowers.php")
  ?>

  <?php foreach ($flowers as $flowers): ?>
                        <tr>
                            <h3><?= $flowers['name']?></h3>
                            <p><?= $flowers['describe']?></p>
                            <img src=" <?= $flowers['img']?>" alt="" >
                        </tr>
                    <?php endforeach; ?>
  </div>

</div>
</body>
</html>