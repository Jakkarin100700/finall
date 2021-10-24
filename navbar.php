<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-navbar">
  <a class="nav-link nav-home" href="/Home">หน้าหลัก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <a class="nav-link" href="/result">ผลการลงทะเบียน</a>
        <a class="nav-link" href="/adddataregister">กรอกแบบฟอร์ม</a>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php $checkname = $session->get('name');
      if(isset($checkname)) {?>
        <a href="/username" class="pr-4" style="color:black; text-decoration:none;"><?php echo $session->get('name')?></a>
        <a href="/Logout/logout" class="btn btn-outline-light my-2 my-sm-0">ออกจากระบบ</a>
      <?php }else { ?>
        <a href="/login" class="btn btn-outline-light my-2 my-sm-0 mr-3">เข้าสู่ระบบ</a>
        <a href="/register" class="btn btn-outline-light my-2 my-sm-0">สมัครสมาชิก</a>
      <?php } ?>
    </form>
  </div>
</nav>
<style>
        
        body {
          margin: 0;
          padding: 2rem 5rem;
          text-align: center;
          background-image: url(https://image.makewebeasy.net/makeweb/0/J5aPgkz9K/56Doc/%E0%B8%A7%E0%B8%B4%E0%B8%A7%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%A2%E0%B8%B0%E0%B8%A5%E0%B8%B2.jpg);
         width: 100%;
         height: 100%;
         color: rgb(0, 0, 0);
          font-family: "helvetica neue", sans-serif;
          font-weight: 100;
          font-size: 16px;
        }

                    
            footer {
              background-color:#31272733;
              padding: 10px;
              text-align: center;
              color: rgb(0, 0, 0);
            }
        </style>
        
