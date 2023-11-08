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
        
            <!-- History -->
            </div></p>
      <main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-primary">
    <div class="col-md-10 px-0">
      <h1 class="display-4 fst-italic">Department of Electronic Technician and Computer Technician
      <p class="lead my-3">แผนกวิชาอิเล็กทรอนิกส์และเทคนิคคอมพิวเตอร์.</p>
    </div>
  </div>
  <main class="container">
  <div class="bd-example">
        <img src="https://media.discordapp.net/attachments/1042056153661702174/1134729939174830121/B6C0AF34-A521-4E71-82DD-B7BC782748AC.png?width=951&height=559" width="100%" height="550" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></svg>


      <article class="blog-post">
        <h2 class="blog-post-title">แผนกวิชาอิเล็กทรอนิกส์และเทคนิคคอมพิวเตอร์</h2>
        <p class="blog-post-meta">

        <p>แผนกวิชาอิเล็กทรอนิกส์และเทคนิคคอมพิวเตอร์ มุ่ง
ผลิตผู้เรียนเพื่อปฏิบัติงานด้านเทคโนโลยี
คอมพิวเตอร์โดยยึดหลักการพึ่งพา
ความก้าวหน้าทางวิทยาการ มีความคิดริเริ่ม
มีกิจนิสัยในการค้นคว้าปรับปรุงตนเองให้
ก้าวหน้าทันต่อเทคโนโลยีคอมพิวเตอร์
สามารถแก้ปัญหาด้วยหลักการและเหตุผล
ปฏิบัติงานด้วยหลักวิชาการที่มีการวางแผน
และควบคุมอย่างรอบคอบเพื่อก่อให้เกิด
ผลสัมฤทธิ์ในการทำงาน ซึ่งผู้เรียนมีความรู้
ความสามารถและทักษะด้านเทคโนโลยีคอมพิวเตอร์ทั้งด้านฮาร์ดแวร์ ซอฟแวร์ และระบบเครือข่าย สามารถ
ทำหน้าที่เป็นนักเทคโนโลยีคอมพิวเตอร์ นักวิชาการคอมพิวเตอร์ ฝ่ายสนับสนุนการปฏิบัติงานทางด้าน
คอมพิวเตอร์และเทคโนโลยีสารสนเทศ ผู้ดูแลระบบคอมพิวเตอร์ ที่ปรึกษางานด้านเทคโนโลยีสารสนเทศ
ตลอดจนบุคลากรคอมพิวเตอร์อื่นๆ เปิดสอนหลักสูตร ดังนี้
  </p>
หลักสูตรประกาศนียบัตรวิชาชีพ (ปวช.) สาขาวิชาเทคนิคคอมพิวเตอร์
 สาขางานเทคนิคคอมพิวเตอร์
คุณสมบัติของผู้เข้าศึกษา
รับผู้สำเร็จการศึกษาระดับมัธยมศึกษาตอนต้น (ม.๓)
การจัดการเรียนการสอน
 นักเรียนสาขาวิชาเทคนิคคอมพิวเตอร์ จะได้
เรียนรู้พื้นฐานความรู้ทั้งภาคทฤษฎีและภาคปฏิบัติ
เกี่ยวกับรายวิชา การตรวจซ่อมและบำรุงรักษา
อุปกรณ์คอมพิวเตอร์ รวมทั้งการประเมินราคา การ
จัดซื้อและการประกอบเครื่องคอมพิวเตอร์ การเขียน
โปรแกรมพัฒนาระบบงาน ระบบฐานข้อมูล การ
เขียนเว็บไซต์ งานมัลติมีเดียการตัดต่อภาพวีดีโอ
การสร้างและพัฒนาหุ่นยนต์ การควบคุมอุปกรณ์
ไฟฟ้าและอิเล็กทรอนิกส์ด้วยคอมพิวเตอร์ ระบบ
เครือข่ายคอมพิวเตอร์
ลักษณะการเรียนการสอน
จัดการเรียนรู้ทั้งทางภาคทฤษฎีและ
ภาคปฏิบัติ โดยปฏิบัติจริงในห้องเรียน ฝึกปฏิบัติงาน
ในสถานประกอบการที่เป็นหน่วยงานราชการ
รัฐวิสาหกิจ และเอกชน
ประเภทวิชาอุตสาหกรรม
แผนกวิชาเทคนิคคอมพิวเตอร์
</p>
โอกาสประกอบอาชีพ
ผู้สำเร็จการศึกษาในระดับ ปวช. สาขาวิชา
เทคนิคคอมพิวเตอร์ สามารถประกอบอาชีพได้
หลากหลาย เช่น หน่วยงานภาครัฐและเอกชน ด้าน
ช่างคอมพิวเตอร์ โปรแกรมเมอร์ งานออกแบบ
กราฟิกมัลติมิเดีย และงานด้านระบบเครือข่าย
</p>
แนวการศึกษาต่อ
สามารถศึกษาต่อในระดับประกาศนียบัตร
วิชาชีพชั้นสูง (ปวส.) และระดับปริญญาตรีได้
หลากหลายสถาบัน</p>
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
  background-color: #0592F7;
  color: white;
  border: 1px solid #0592F7;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>

<h2></h2>
<div class="center">
  <div class="pagination">
  <p class="counter pull-right">Page 1 of 1</p>
  <a href="#">&laquo;</a>
  <a href="#" class="active" >1</a>
  <a href="#">&raquo;</a>
  </div>
</div>

</body>
</html>




  <!-- Pagination -->
      </div>
    </div>
  </div>

  <br>
      <hr>
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

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <?php mysqli_close($Connection);?>
</body>
</html>