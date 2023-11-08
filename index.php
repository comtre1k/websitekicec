<?php
require_once('connections/mysqli.php');

if ($_SESSION == NULL) {
  header("location:login.php");
  exit();
}

$check_submit = "";

$sql = "SELECT * FROM tb_user WHERE user_username = '".$_SESSION['user_username']."'";
$query = mysqli_query($Connection,$sql);
$result = mysqli_fetch_array($query);

if (isset($_GET['update'])) {
  if ($_GET['update'] == "pass") {
    $check_submit = '<div class="alert alert-success" role="alert">';
    $check_submit .= '<span><i class="bi bi-check2-circle"></i> บันทึกข้อมูลเรียบร้อยแล้ว</span>';
    $check_submit .= '</div>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="https://th.bing.com/th/id/R.abd2aaee328d28267f7b1797a8001fe4?rik=tqP1e3Qn7q9DHA&riu=http%3a%2f%2fwww.iveb.ac.th%2fmisc%2ffilemanager%2fsource%2flogo-1024-th.png&ehk=utcB9dSj4jMBWjEYYjKH19mI1S8ZLUXVnYDgnAfvagg%3d&risl=&pid=ImgRaw&r=0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="default">
  <?php include 'includes/navbar.php';?>
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-11">

<br>
<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://media.discordapp.net/attachments/1042056153661702174/1134726167623122974/image.png" class="d-block w-100" widht="" height="" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://media.discordapp.net/attachments/1042056153661702174/1134728124651798528/image.png" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://media.discordapp.net/attachments/1042056153661702174/1134729020932628610/image.png" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Slider -->

            <!-- counter -->
<br><br>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="container col-xl-3 col-md-6 mb-1">
                            <div class="card border-left-success shadow h-100 py-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              <p class="fw-bold">
                                                User list
                                                <?php
                                                require_once('connections/mysqli.php');
                                                $query = "SELECT user_id FROM tb_user ORDER BY user_id";
                                                $query_run = mysqli_query($Connection,$query);
                                                $row = mysqli_num_rows($query_run);
                                              ?>
                                               </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <p class="fw-bold container fs-4"><?php echo  $row;?></p>
                                          </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-chart-line' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="container col-xl-3 col-md-6 mb-1">
                            <div class="card border-left-success shadow h-100 py-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              <p class="fw-bold">
                                                Urole </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <p class="fw-bold">
                                              <?php if ($result[7] == "member") {echo "สมาชิก";}else{echo "ผู้ดูแลระบบ";} ?>
                                              </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-address-card' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="container col-xl-3 col-md-6 mb-1">
                            <div class="card border-left-success shadow h-100 py-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <p class="fw-bold">
                                                Stast </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <p class="fw-bold">
                                              ออนไลน์</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-globe' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
<!-- counter -->

              <!-- headhis -->
      <main>
      <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
      <img src="img/nav.gif" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">คู่มือการศึกษา</h1>
        <p class="lead">การใช้งานเครื่องคอมพิวเตอร์พื้นฐานสำหรับผู้ใช้งานใหม่.
        </p>credit By <a href="https://www.nongann.com/category/windows10/">www.nongann.com</a></p></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
        <br>
        <!-- Music -->
        </p>Music : <a href="https://www.youtube.com/watch?v=UHH7b4-UkvI">Shoti - LDR - Sped Up</a></p></p>
        <div>
        <audio id="audio1" controls="" autoplay="">
            <source src="img/music.mp3" type="audio/mp3">
          </audio>
          <!-- Music -->
        </div>
      </div>
    </div>
  </div>
  <!-- headhis -->

  
    <!-- START THE FEATURETTES -->
      <main class="container">
        <div class="container">
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 ">
        <h2 class="featurette-heading">การใช้งาน Windows 10 เบื้องต้น <span class="text-muted"></p>(Basic use of Windows 10)</p></span></h2>
        <p class="lead">โดย Windows 10 ได้พัฒนามาให้มีความเหมาะสมและทันสมัยมากขึ้นและสามารถใช้งานในแบบที่เป็น Touch Screen หรือที่เราเรียกกันว่าระบบสัมผัส ได้ปรับปรุงพัฒนาจากเวอร์ชั่นเดิมที่เป็นการทำงานบนระบบ Desktop ซึ่งใช้เมาส์ในการทำงานอย่างเดียวต่อมาก็ได้เปลี่ยนมาเป็นระบบสัมผัสที่ใช้เพียงแค่ปลายนิ้วแตะบนหน้าจอก็สามารถทำงานได้แล้ว โดยปรับให้สามารถใช้งานได้ใน Tablet , Smartphone , Notebook เป็นต้น

ในระบบ Windows 10 มีแอพพลิเคชันและโปรแกรมต่างๆ ที่เราเคยใช้งานในระบบ Desktop ก็ยังคงสามารถใช้งานได้เหมือนเดิม และยังมีแอพพลิเคชันที่เราใช้งานกันบน Smartphone ที่สามารถดาวน์โหลดมาใช้ได้ในระบบของ Windows 10 ได้เช่นกัน เช่น Facebook , Line เป็นต้น รวมไปถึงการทำงานในออฟฟิศก็ยังคงสามารถทำงานได้เหมือนเดิมซึ่งในระบบ Windows 10 นี้จะทำให้เราใช้งานได้ง่ายกว่าเดิมอีกด้วย ดังนั้น Windows 10 จึงเป็นระบบ OS ที่ตอบสนองความต้องการของผู้ใช้งานในหลายด้าน

การเริ่มต้นใช้งาน Start Menu
เมื่อเราเปิด Windows10 ขึ้นมาเราสามารถเริ่มต้นเรียกใช้งานโปรแกรมต่างได้โดยการคลิกที่ปุ่ม Windows ที่อยู่มุมล่างซ้ายของหน้าจอ เมื่อเราคลิกแล้วจะมีไอคอนหลักในการทำงาน และก็จะมีปุ่ม Power ที่เราใช้ในการเปิดปิด หรือ รีสตาร์ทเครื่องใหม่</p>
      </div>
      <div class="col-md-5">
      <img src="img/img2.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">1. การใช้งานคอมพิวเตอร์เบื้องต้น<span class="text-muted"></span></h2>
        <p class="lead">
          1.1 การเปิดเครื่องและเข้าสู่ Microsoft Windows
 หลังจากผู้ใช้เปิดสวิทซ์ (power) แล้ว เครื่องคอมพิวเตอร์จะเริ่มทำงาน โดยโหลดระบบปฏิบัติการ
OS:Operateing system อัตโนมัติการทำงานในช่วงนี้เรียกว่า การบูตระบบ (Booting System) หน้าจอจะ
แสดงสัญลักษณ์Windows ในขณะที่กำาลังบูตระบบ และหลังจากนั้นจะเข้าสู่หน้าจอแสดงรายชื่อผู้ใช้งาน(User
Account) ภายในเครื่องคอมพิวเตอร์นั้นๆ เพื่อให้ผู้ใช้เลือกชื่อผู้ใช้งานเพื่อเข้าสู่ระบบ (logon) และหลังจาก
เลือกแล้ว หากไม่มีการตั้งรหัสผ่าน (Password) ก็จะเข้าสู่หน้าจอเริ่มต้นการใช้งานของ Windowsแต่หากมีการ
ตั้งรหัสผ่านจะต้องกรอกรหัสผ่านให้ถูกต้อง จึงจะสามารถใช้งาน Windows ได้
1.2 การปิดเครื่องคอมพิวเตอร์
เมื่อทำงานเสร็จเรียบร้อยแล้วและพร้อมที่จะเลิกใช้งาน ผู้ใช้ต้องทำการตรวจดูว่ามีโปรแกรมใดที่เปิดค้างอยู่บ้าง
ถ้ายังมีอยู่ต้องปิดโปรแกรมให้หมดก่อน เมื่อปิดทุกโปรแกรมเสร็จเรียบร้อยแล้วจึงทำการปิดเครื่องหรือปิด
Windows
 การที่จะปิด Windows อย่างถูกวิธีคือการ Shut Down หรือ Turn Off เนื่องจากระบบปฏิบัติการจะมี
ขั้นตอนในการปิดโปรแกรมต่างๆ ที่ยังทำงานค้างอยู่บน Windows และไม่ทำให้ไฟล์ข้อมูลเสียหาย ในทาง
ตรงกันข้ามถ้าผู้ใช้ปิดเครื่องโดยลัดขั้นตอน เช่น การกดปุ่ม Reset หรือปิดสวิตซ์ Power อาจทำให้ไฟล์ข้อมูล
หรือโปรแกรมที่ยังทำงานอยู่เกิดความเสียหายได้การ shutdown อย่างถูกวิธีมีขั้นตอน คือ
 1. ปิดโปรแกรม Aplication ต่างๆ ที่กำลังทำงานอยู่ให้หมดก่อน แล้วคลิกปุ่ม window-start
 2. เลือก turn off computer
 3. จะปรากฏ Dialog box Turn off computer
 4. คลิกเลือก Turn Off</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="img/img1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">2. การทำงานบน Desktop<span class="text-muted"></span></h2>
        <p class="lead">เดสก์ทอป (Desktop) คือ พื้นที่ฉากหลังของ Windows ได้ถูกจำลองมาจากการทำงานบนโต๊ะทำงานซึ่ง
ประกอบไปด้วยเครื่องมือที่ช่วยในการทำงาน โดยจะใช้สัญลักษณ์ภาพแทนสิ่งต่างๆในระบบ ให้เห็นเหมือนกับ
สิ่งของที่อยู่บนโต๊ะ ผู้ใช้จึงสามารถเรียกใช้งานได้อย่างสะดวกรวดเร็ว นอกจากนี้ยังสามารถปรับเปลี่ยนรูปภาพ
บนเดสก์ทอปได้ตามต้องการอีกด้วย
2.1 ส่วนประกอบของ Desktop
 ไอคอน (Icon เป็นรูปภาพที่ Windows กำหนดให้เป็นสัญลักษณ์แทนสิ่งต่างๆ ในคอมพิวเตอร์ โดยแต่ละ
ไอคอนจะมีความหมายและการใช้งานที่แตกต่างกัน เช่น Program Icon ใช้แสดงโปรแกรม หรือ Folder Icon ใช้
แสดงโฟลเดอร์ เป็นต้น สำหรับใน Windows 10 เมื่อเริ่มต้นการใช้งานนั้น จะเห็นไอคอนเดียวที่เหลืออยู่บน
เดสก์ทอป นั่นคือ Recycle Bin ส่วนไอคอนอื่นๆ จะถูกเก็บไว้ในเมนูของปุ่ม Start
 แถบงาน (Taskbar) เป็นแถบที่อยู่ด้านล่างจอคอมพิวเตอร์แสดงรายชื่อหน้าต่างที่เปิดอยู่ในขณะนั้น และยัง
แสดงแถบเครื่องมือ (Toolbars) ต่างๆ เช่น Language Bar หรือ Quick Launch เป็นต้น ส่วนพื้นที่ด้านขวาจะ
แสดงสถานการณ์ทำงานของระบบ เช่น เวลาปัจจุบัน
 ปุ่ม Start ผู้ใช้สามารถใช้ปุ่ม Start ในการเรียกใช้โปรแกรม ค้นหาข้อมูลที่ต้องการ หรือขอความช่วยเหลือได้
ซึ่งใน Windows 10 จะมีการจัดเรียงรายการใหม่ เช่น นำรายการที่เรียกใช้บ่อยๆ มาแสดงให้สามารถใช้งานได้
สะดวกมากยิ่งขึ้น และยังมีการเปลี่ยนแปลงรูปแบบไอคอนให้มีความสวยงาม น่าใช้มากยิ่งขึ้น ส่วนด้านบนสุดจะ
แสดง User Account หรือชื่อของผู้ใช้ที่เข้าใช้งาน Windows 10 ในขณะนั้น ซึ่งผู้ใช้แต่ละคน สามารถจะแยกการ
ทำงานออกจากกันได้อย่างชัดเจน เช่น สามารถจะเลือกรูปภาพที่แสดงบนเดสก์ทอปของผู้ใช้แต่ละคนที่แตกต่างกัน
ได้แม้ว่าจะทำงานภายในเครื่องคอมพิวเตอร์เดียวกันก็ตาม
2.2 การเปิดใช้งานโปรแกรมจากปุ่ม Start
 ในการเปิดใช้งานโปรแกรม หรือ เข้าถึงทรัพยากรต่างๆ นั้น สามารถทำได้หลายวิธี แต่วิธีโดยทั่วไปที่นิยม คือ
จะใช้ปุ่ม ซึ่งภายในปุ่ม Start แบบใหม่ของ Windows 10 ได้จัดให้มีสิ่งต่างๆ
ซึ่งจำเป็นต่อการใช้งานไว้อย่างครบถ้วน และสะดวกรวดเร็วมากยิ่งขึ้น โดยจะแสดงส่วนประกอบต่างๆ ดังรูปต่อไปนี้
ตัวอย่างการเปิดโปรแกรมจากปุ่ม Start โดยจะเปิดโปรแกรม Paint ซึ่งเป็นโปรแกรมที่ใช้ในการวาดรูป
และตกแต่งภาพ มีขั้นตอนดังต่อไปนี้
 1) คลิกปุ่ม start บนแถบงาน (Taskbar) หรือ กดแป้น <Ctrl> + <Esc>
 2) เลือก All Programs จะปรากฏโปรแกรมทั้งหมด
 3) เลือก Accessories จะปรากฏเมนูย่อย
 4) เลือกโปรแกรม Paint
 5) โปรแกรมที่เลือกจะเปิดขึ้นมา
 6) ให้สังเกตที่แถบงาน (Taskbar) จะปรากฏปุ่มแสดงชื่อโปรแกรมที่เปิดใช้งานด้วย</p>
      </div>
      <div class="col-md-5">
      <img src="img/img3.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">

      </div>
    </div>
    
    <hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">3. การเปิดหลายโปรแกรมพร้อมกันและการตั้ง TimeZone <span class="text-muted"></span></h2>
    <p class="lead">3.1 การเปิดหลายโปรแกรมพร้อมกัน
 ความสามารถในการทำงานหลายโปรแกรม (Multitasking) ได้พร้อมๆ กัน เป็นคุณสมบัติที่สำคัญอีกข้อ
หนึ่งของ Windows โดยสามารถที่จะเปิดโปรแกรมหลายโปรแกรมขึ้นมาพร้อมๆ กันได้และถ้าโปรแกรมใด
โปรแกรมหนึ่งที่เปิดอยู่มีปัญหา ไม่สามารถทำงานต่อไปได้โปรแกรมที่เหลือจะยังคงสามารถทำงานต่อไปได้
จากตัวอย่างที่ผ่านมาได้ทำการเปิดโปรแกรม Paint เอาไว้ ต่อไปจะทำการเปิดโปรแกรม Calculator ซึ่งเป็น
โปรแกรมที่ใช้ในการคำนวณขึ้นมา โดยที่โปรแกรม Paint ยังคงเปิดอยู่
 1. คลิกปุ่ม start บนแถบงาน (Taskbar) หรือกดแป้น <Ctrl> + <Esc>
 2. เลือก All Programs จะปรากฏโปรแกรมทั้งหมด
 3. เลือก Accessories จะปรากฏเมนูย่อย
 4. เลือกโปรแกรม Calculator
 5. โปรแกรมที่เลือกจะเปิดขึ้นมาบนหน้าจอ
 6. ให้สังเกตที่แถบงาน (Taskbar) จะปรากฏปุ่มแสดงชื่อโปรแกรมที่กำลังเปิดใช้งานขณะนั้นทั้งหมด
การใชง้านคอมพิวเตอร์เบื้องต้น
3.2 การตั้งค่า วันและเวลา
 ผู้ใช้สามารถอ่านวันที่และเวลา รวมถึงการตั้งค่าได้ดังนี้
 1) ดับเบิ้ลคลิกที่เวลา ตรงตำแหน่งมุมขวาสุดของ Task bar
 2) จะปรากฏไดอะล็อกบ็อกซ์Date and Time Properties
 3) ที่แท็บ Time Zone เลือกโซนเวลาที่ต้องการ
 4) ที่แท็บ Date & Time ตั้งค่าเวลาปัจจุบัน ด้วยการพิมพ์หรือคลิกที่ ปุ่ม Spinner
 5) คลิกเลือกวันที่ เดือน และปีปัจจุบัน
 6) คลิกปุ่ม OK</p>
  </div>
  <div class="col-md-5 order-md-1">
  <img src="img/img4.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">4. การกำหนดธีมและภาพพื้นหลัง Themes and background <span class="text-muted"></span></h2>
    <p class="lead">เลือกเริ่มสัญลักษณ์เริ่ม >การตั้งค่า>การตั้งค่า ส่วนบุคคล หน้าต่างแสดงตัวอย่างจะช่วยให้คุณสามารถมองเห็นการเปลี่ยนแปลงแก้ไขได้ทันทีขณะดำเนินการอยู่

ในพื้นหลัง คุณสามารถเลือกรูปภาพหรือสีทึบ หรือสร้างการสไลด์ของรูปภาพได้
การตั้งค่าส่วนบุคคลของพื้นหลังเดสก์ท็อป

ในสี คุณสามารถปล่อยWindowsเน้นจากพื้นหลังของคุณ หรือเลือกสีด้วยตัวเอง

โทนสีในการตั้งค่าส่วนบุคคล หลังจากที่คุณเลือกโทนสีแล้ว ให้เลื่อนลงเพื่อตัดสินใจเลือกว่าสีจะแสดงที่ใด และการตั้งค่าสีเข้มหรือสีอ่อนจะดูดีขึ้นหรือไม่

การตั้งค่าความเป็นส่วนตัวของโหมดเข้ม หน้าจอด้านบนแสดงการตั้งค่าสีเข้ม
  </div>
  <div class="col-md-5">
  <img src="img/img5.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">

  </div>
</div>

    <hr class="featurette-divider">

  <div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">5. ค้นหาจากการ Search <span class="text-muted"></span></h2>
    <p class="lead">ปกติแล้วโปรแกรมหรือแอพพลิเคชันในเครื่องคอมพิวเตอร์ของเราจะมีหลากหลายโปรแกรมจึงทำให้ยากแก่การค้นหาถ้าเราจะต้องเปิดเข้าไปค้นหาใน Start Menu ซึ่งเรามีอีกกกวิธีหนึ่งที่ง่านแก่การค้นหา ทำให้สะดวกรวดเร็วและประหยัดเวลาในการทำงานอีกด้วย โดยคลิกที่ ปุ่ม Search ในทาสก์บาร์ แล้วเราก็พิมพ์ชื่อโปรแกรมที่เราต้องการจะค้นหาลงไป เสร็จแล้วมันก็จะโปรแกรมเกี่ยวกับคำที่เราใช้ค้นหาขึ้นมา เราก็สามารถคลิกเลือกเปิดใช้งานโปรแกรมได้เลย</p>
  </div>
  <div class="col-md-5 order-md-1">
  <img src="img/img6.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">

  </div>
</div>

</main>
</body>

    <!-- /END THE FEATURETTES -->

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
