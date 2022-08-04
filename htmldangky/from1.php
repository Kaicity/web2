<?php
	require_once("../htmlnew/library.php");



?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../css/form1.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

<title>Đăng ký tài khoản SVT</title>
<script>
      function validateForm()  {
             var u = document.getElementById("button1").value;
			 var v = document.getElementById("button2").value;
             if(u.trim()== "" && v.trim()== "") {
                 alert("xin vui lòng hãy nhập gì đó!");
                 return false;
             }else if(u.trim()== "" || v.trim()== "") {
                 alert("bạn hãy điền đẩy đủ thông tin!");
                 return false;
             }
             
             
             return true;
         }
		 


      </script>
	  

	
</head>

<body >
	<div class="menu">
	
	<img class="a20" src="../image/logo.jpg">
<!--		Cổng Thông Tin Đào Tạo Tiếng Anh Quốc Tế-->
		<ul>
			<li><a href="">Cổng Thông Tin Về Hệ Thống về Sinh Vien Technology  </a></li>
		</ul>
		
	</div>
	<br>
	<br>
	<br>
	<div class="main">
	<div>
		<ul>
			<h2>Đăng Ký Mua Hàng</h2>
<li>Sinh Vien Technology - từ 2021-12-04 00:00:00 đến 2021-12-31 00:00:00</li>
<li>Sinh Vien Technology - QH.2019.F.10 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2018.F.10 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2018.F.1 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2017.F.10 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2017.F.1 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2016.F.10 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2021.F.1 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2020.F.10 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2020.F.1 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2019.F.1 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
<li>Sinh Vien Technology - QH.2016.F.1 từ 2021-12-15 12:30:00 đến 2021-12-19 17:00:00</li>
		</ul>
	</div>
		<div class="a4">
		</div>
		
	<div class="a6">
<!--	<a class="a5" href="">ban da co tai khoan chua ?</a>-->
<form action="thaotacuser.php" method="post" name="frm1" onsubmit="return validateForm()">
		<div class="a5">
			<div class ="a7">Bạn Đã Có Tài Khoản Chưa ?</div>
		</div>
		
		
		<div class="form">
			<div class="a11"><i class="fas fa-user"></i>Tên truy cập &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
			<?php if(isset($_REQUEST['fault'])){ ?> <b style="font-size:15px;text-shadow:5px 5px 5px orange;color:red;">Tài khoản hoặc mật khẩu chưa đúng!</b> <?php } ?></div>
			<label for="textfield"></label>
		
        	<input type="text" name="texta" id="texta" class="a12" placeholder="   Tên truy cập " required >
		</div>
		&nbsp; &nbsp; &nbsp;vui lòng nhập tên truy cập!   
<div class="a11"><i class="fas fa-eye"></i>Mật khẩu</div>
		<div class="form">
			
			<label for="textfield"></label>
        	<input type="password" name="textb" id="textb" class="a12" placeholder="   Mật khẩu" required  >
		</div>
		&nbsp;&nbsp;&nbsp; vui lòng nhập mật khẩu!
     
        <br>
		<br>
		<hr class="a13">
		<br>
		
		
		
		
		
           
      <input  type="submit" name="button2" id="button2" value="Đăng Nhập"  class="a8-1">
	  <input type="hidden" name="loaiThaoTac" value="1"/>
	  
</form>
		<br>
		<br>
		
		
		

	</div>
	</div>

	<h2 style="margin-left: 30px;">Thông Báo</h2>
	<p class="a9">Khuyến cáo: trong trường hợp các bạn dùng trình duyệt chrome bị lỗi hãy thử chuyển sang Microsoft Edge (IE).
	</p>
	<ul class="a10">
		<li><a href="">(Video) Hướng dẫn sử dụng các nền tảng di động</a></li>
		<li><a href="">(Video) Bài thuyết trình về các sản phẩm |  Câu hỏi và giải đáp</a></li>
		<li><a href="">Kỹ năng thao tác trên dóng smartphone </a></li>
		<li><a href="">(Video) Hướng dẫn đăng ký mua hàng</a></li>
		<li><a href="">[Video/Ảnh]Lễ trao bằng chứng nhận hoạt động năm 2021</a></li>
	</ul>
<br>
<label for="textfield">&nbsp; </label>
</body>
	<script src="../js/link.js"></script>
</html>
