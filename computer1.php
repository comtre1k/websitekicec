<?php
require_once('connections/mysqli.php');
?>

<?php
echo '
<link rel="icon" href="https://th.bing.com/th/id/R.abd2aaee328d28267f7b1797a8001fe4?rik=tqP1e3Qn7q9DHA&riu=http%3a%2f%2fwww.iveb.ac.th%2fmisc%2ffilemanager%2fsource%2flogo-1024-th.png&ehk=utcB9dSj4jMBWjEYYjKH19mI1S8ZLUXVnYDgnAfvagg%3d&risl=&pid=ImgRaw&r=0">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
//เช็คว่ามีตัวแปร session อะไรบ้าง
//print_r($_SESSION);
//exit();
//สร้างเงื่อนไขตรวจสอบสิทธิ์การเข้าใช้งานจาก session
if(empty($_SESSION['user_username']) && empty($_SESSION['user_username']) && empty($_SESSION['user_password'])){
            echo '<script>
                setTimeout(function() {
                swal({
                title: "กรุณาเข้าสูระบบหรือสมัครสมาชิก",
                type: "error"
                }, function() {
                window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                });
                }, 1000);
                </script>';
            exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="icon" href="https://th.bing.com/th/id/R.abd2aaee328d28267f7b1797a8001fe4?rik=tqP1e3Qn7q9DHA&riu=http%3a%2f%2fwww.iveb.ac.th%2fmisc%2ffilemanager%2fsource%2flogo-1024-th.png&ehk=utcB9dSj4jMBWjEYYjKH19mI1S8ZLUXVnYDgnAfvagg%3d&risl=&pid=ImgRaw&r=0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="default">
  <?php include 'includes/navbar.php';?>
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-11">
        
      <!-- Histrory -->
      <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/Computer.gif" alt="" width="400" height="300">
    <h1 class="display-5 fw-bold">หนังสือแผนกเทคนิคคอมพิวเตอร์</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">ขอขอบคุณหนังสืออ้างอิงในอินเตอร์เน็ตเป็นแบบ file PDF.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      </div>
    </div>
  </div>

<div class="album py-5 bg-white">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm1.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">Windows 11 Home กับ Windows 11 Pro แตกต่างกันอย่างไร</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1p3WKbwfojlRHR4PUwMVQPm7iQpSp3u9P/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm2.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">UMPC คืออะไร ประวัติของ Ultra Mobile PC เป็นอย่างไร ทำไมถึงกลับมานิยมอีกครั้ง</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1c3NZOBg_4PGUAYdEpQVFU_nfs1b-IFJf/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm3.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">RAM, HDD และ SSD คืออะไร อุปกรณ์เก็บข้อมูลเหล่านี้ แตกต่างกันอย่างไร</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1vHAjMkk98185I6Rvr2jX5NuE2FIlFp2J/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm4.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">PDF มีกี่ประเภท รู้จักกับไฟล์เอกสาร PDF ว่ามีกี่แบบ แต่ละแบบแตกต่างกันอย่างไร</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/16EASh2i8hryLHFOGPXDOMvfBzlBwJGoX/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm5.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">Module-1_Computing-Fundamentals</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/16Gv1Zq7pe9eIhGVDAMmpEuPqi5REh8RU/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm6.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">Malware คืออะไร Malware มีกี่ประเภท และรูปแบบของมัลแวร์ชนิดต่างๆ ที่น่าจดจำ</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1m6W3Pm9GVyRhocveJtRR0REiLdNLQTFF/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm7.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">Linux คืออะไร และ Linux แตกต่างจาก Windows อย่างไร</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1aYI9tkXqyYE7Z_ZfApkt8Lffotv1kuuN/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm8.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

            <div class="card-body">
            <p class="card-text">Keyboard คืออะไร รู้จักประวัติความเป็นมาของคีย์บอร์ด อุปกรณ์คอมพิวเตอร์ชื่อดังของโลก</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1h928PucehrvHjqBceM-qrZAEYkAjvLKN/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm9.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">IoT คืออะไร อุปกรณ์แบบไหนเรียก IoT (Internet of Things)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1NL5n4fKk3RsEBZr_kDOpsWRgK2KaYBYd/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <!DOCTYPE html>
<html>
<head>
<style>
.center {
  text-align: center;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #0083FF;
  color: white;
  border: 1px solid #0083FF;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>

<h2></h2>
<div class="center">
  <div class="pagination">
  <p class="counter">Page 1 of 3</p>
  <a href="computer1.php">&laquo;</a>
  <a href="computer1.php" class="active" >1</a>
  <a href="computer2.php">2</a>
  <a href="computer3.php">3</a>
  <a href="computer3.php">&raquo;</a>
  </div>
</div>

</body>
</html>
<hr>



  <!-- Pagination -->

  <!-- FOOTER -->
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
    <p class="col-md-4 mb-0 text-muted">© 2023 Kicec, Inc</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="https://web.facebook.com/www.kicec.ac.th" class="nav-link px-2 text-muted">Facebook</a></li>
      <li class="nav-item"><a href="http://www.kicec.ac.th/web2563/" class="nav-link px-2 text-muted">Page</a></li>
      <li class="nav-item"><a href="https://std2018.vec.go.th/web/" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>
</div>
<!-- FOOTER -->
      </div>
    </div>
  </div>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <?php mysqli_close($Connection);?>
</body>
</html>
