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
      <div class="album py-5 bg-white">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm10.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">Intel Core i3, i5, i7, i9 และ X คืออะไร CPU เหล่านี้มีเทคโนโลยี ที่แตกต่างกันอย่างไร</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1-BjX5_h5JMASvJMZt8jN4NkFZTEiZmPy/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm11.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">Hot-Swappable Keyboard คืออะไร _ พร้อมเหตุผล ที่ควรซื้อคีย์บอร์ดแบบนี้มาใช้</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1RkwDnE-l3UrIHC8OvM8suaROVPVOM1Jf/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm12.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">GUI คืออะไร หรือ Graphical User Interface คืออะไร พร้อมประวัติความเป็นมา</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1GzqY3gBuNAscgEzsoTzB4bD-nDlGR03w/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm13.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">E-Book คอมพิวเตอร์ และเทคโนโลยีสารสนเทศ</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1LaUdr4pIpRatx8WiplSLsI7eazUOI0JJ/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm14.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">CPU สร้างขึ้นมาจากอะไร ทำมาจากอะไร เทคโนโลยีการผลิต CPU มีขั้นตอนอะไรบ้าง</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1RiCRhkumnzI2rwf141RbG-iMpa5yweUj/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm15.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">Computer Hardware คืออะไร ฮาร์ดแวร์คอมพิวเตอร์ ประกอบด้วยอะไรบ้าง</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1IfJIAVAZnIrjyrnzgyWY7Z2RAalkMLWQ/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm16.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">Adobe Photoshop คืออะไร มีประวัติความเป็นมาอย่างไร</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1dN5k1z5gLDd79t1coz4eHWU1e83W97X3/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm17.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

            <div class="card-body">
            <p class="card-text">Adobe Illustrator คืออะไร สามารถทำอะไรได้บ้าง เหมาะกับงานแบบไหน</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1mgJmrm5T6251S51rvFMM44i6q-LQnERl/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm18.jpg" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">อุปกรณ์คอมพิวเตอร์(Computer Equipment) - สาขาวิชาวิทยาการคอมพิวเตอร์</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1Koy8Jc_inTGUg64opKbsxvMhsxiFgOWW/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm19.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">องค์ประกอบของ คอมพิวเตอร์</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1TG09sFHJdy_3FIEDlD8U-9vBz0Dh5AoR/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm20.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

            <div class="card-body">
            <p class="card-text">สาระสำคัญของ พ.ร.บ.คอมพิวเตอร์</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1jnGhS4HLSwx5qz7WnPaKRTehbTfRu9Nn/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm21.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">สอนวิธีดาวน์โหลดและติดตั้งโปรแกรม Arduino IDE</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1FYwtAwVsNARp-RD_Kfy89bTYIQhoS63v/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
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
  <p class="counter">Page 2 of 3</p>
  <a href="computer1.php">&laquo;</a>
  <a href="computer1.php">1</a>
  <a href="computer2.php" class="active" >2</a>
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