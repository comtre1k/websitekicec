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
          <img src="img/cm22.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">สอนลง windows 10  2021</p>
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
          <img src="img/cm23.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">วิธีทำความสะอาด แผงวงจรคอมพิวเตอร์ (Computer Circuit Board) เบื้องต้น โดยไม่ให้เสียหาย</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1rm1qICWCWSA7yb174PoikIhxspfFv1s_/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm24.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">วิธีลง Windows 11 เวอร์ชั่นล่าสุด ทั้งดาวน์โหลดจากเว็บ Microsoft โดยตรง และติดตั้งเองผ่าน USB Flash Drive DroidSans</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1x2jUwywjD-vwS38QAA7HdZ9oDtjV-pEq/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm25.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">วิธีการ หัดเขียนโปรแกรมคอมพิวเตอร์ (พร้อมรูปภาพ)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1WwKNhZb-J0-adAeWNwO8EFA7x9YCMKrp/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm26.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">วิธีการติดตั้ง Ubuntu Server 20.04 LTS</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1Q_-sC0mHadbGpPYaFd7sLWGTnGMnfmyi/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm27.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">มาทำความเข้าใจกับ ลิขสิทธิ์ฟอนต์ ประเภทต่างๆ กัน</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1IzG75ZcMozp5MgemZzviVIFlKKi3hdSd/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm28.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">ภาษาคอมพิวเตอร์ มีอะไรบ้าง รวมภาษาคอมพิวเตอร์ที่เหล่า Developer ควรจะต้องรู้จัก</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1tRS5EuMgzP0b9bSf3T4yXNEvY7IbvQ7l/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm29.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

            <div class="card-body">
            <p class="card-text">เทคโนโลยีสื่อดิจิทัลในชีวิตประจำวัน</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1NqNX5mzkqSM1YhxfUyNCNFGQasFmUojn/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm30.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">ต่อสายสัญญาณ HDMI</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1hN1EWV2H3jVjawZaR06oNl5k07mxkncQ/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm31.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
            <p class="card-text">เครื่องหมาย DBD Registered และ DBD Verified คืออะไร พร้อมวิธีการขอเครื่องหมาย อย่างละเอียด</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1AjWAkBLU9EevkoXf9qk0z-O05mgi5rDm/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm32.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

            <div class="card-body">
            <p class="card-text">การใช้คอมพิวเตอร์สาธารณะ อย่างไรให้ปลอดภัย (Safety Tips for using Public Computer)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/1QGmVH_1hx2hFkW6-Vi0On9lCMq9uUqDO/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
                </div>
                <small class="text-danger"><i class="bi bi-file-earmark-pdf-fill"></i> File PDF.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/cm33.png" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <p class="card-text">10 ข้อผิดพลาดที่มือใหม่มักทำพลาดเวลาที่ประกอบคอมพิวเตอร์</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://drive.google.com/file/d/17-MiBxAu702vSI6iat0OTxNGjEXqAaKW/view?usp=sharing" class="nav-link">เพิ่มเติม</button></a></li>
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
  <p class="counter">Page 3 of 3</p>
  <a href="computer1.php">&laquo;</a>
  <a href="computer1.php">1</a>
  <a href="computer2.php">2</a>
  <a href="computer3.php" class="active" >3</a>
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