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
    <img class="d-block mx-auto mb-4" src="img/technic.gif" alt="" width="260" height="250">
    <h1 class="display-5 fw-bold">หนังสือแผนกอิเล็กทรอนิกส์</h1>
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
          <img src="img/cm34.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">อิเล็กทรอนิกส์และวงจร</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1GECMlvB4djL9jArJYGnXuHUXVEYggk48/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm35.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">อุปกรณ์อิเล็กทรอนิกส์คืออะไร และมีอะไรบ้าง</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1uLeY-2tUs3pSee3BMDjr2QNnCM44jwx8/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/image4.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">อุปกรณ์อิเล็กทรอนิกส์เบื้อต้น</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1tLj-zNlMKvC1wHO-dWdP3Mw5eOda_tM5/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm36.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">ทรานซิสเตอร์ คือ อุปกรณ์เซมิคอนดักเตอร์</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1qx1-hrIRhqqWZsIvXp3gKkK2JAcC1YdH/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm37.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">ตารางการอ่านค่าความต้านทาน</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/11fx2icnAhxNu6pAW6MZvXwvSJLkusjJA/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm38.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">วงจรนับ(Counting Circuits) 4</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1TH_uAZtINnrkLU_LXUwvdG8obf_23ZfB/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm39.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">รายละเอียดอุปกรณ์อิเล็กทรอนิกส์</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1LhGrVCp_jhi6vCRNI2wLnd-cWqmZQ9ui/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm40.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

            <div class="card-body">
            <p class="card-text">ระบบอนาลอกและดิจิตอล(Analogue and Digital Systems)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1B-JeubdaZyjcw6Li2Eu1RzciPEARb0ky/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm41.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">ไฟฟ้ากระแสตรง (DC) และ ไฟฟ้ากระแสสลับ (AC) คืออะไร และ แตกต่างกันอย่างไร</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1u-Ww4SHqxVtgk7LWQcHCXDv62lq6tmoA/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
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
    <br>
  <p class="counter">Page 1 of 2</p>
  <a href="electronic1.php">&laquo;</a>
  <a href="electronic1.php" class="active" >1</a>
  <a href="electronic2.php">2</a>
  <a href="electronic2.php">&raquo;</a>
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