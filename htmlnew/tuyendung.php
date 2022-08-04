<?php require_once("library.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="../css/tuyendung.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Tuyển dụng</title>
    <script>
      function validateForm()  {
             var u = document.getElementById("nvn").value;
             if(u.trim()== "") {
                 alert("xin vui lòng hãy nhập gì đó!");
                 return false;
             }
             
             
             return true;
         }
      </script>
</head>
<body>
<form action="" method="get" name="frm1" onsubmit="return validateForm()">

  <div class="menutren">
  <ul class="menungang">
      <li class="a2"><a href=""><img class="a5" src="../image/icon1.png" alt="erro" > SVT@gmail.com</a> </li>
      <li class="a1" ><a  class="hi" href=""><img class="a5-1" src="../image/icon2.png" alt=""> 0941235169</a> </li>
      <li class="p1" ><a href="daily.php" >Hệ thống phân phối </a> </li>
      <li class="p2" ><a href="giohang.php" >  <img class="a5-2" src="../image/cart-73-24.png" alt="">Giỏ Hàng </a> </li>
    </ul>
    
        </div>
        <div class="sidebar">
          <div class="logo"> <a href="../htmlnew/nhap.php"> <img class="aa" src="../image/ganmac.jpg" alt=""></a></div>
          <nav>
              <ul>
               <li> <a href="../htmlnew/gioithieu.php" class="b1">Giới thiệu</a>
                  </li>
                  <li><a href="../htmlnew/sanpham.php?productType=All&page=1" class="b2">Sản Phẩm</a>
                      <ul class="cap_2">
                          <li> <a href="../htmlnew/sanpham.php?productType=phone&page=1"> Phone</a> </li>
                        <li> <a href="../htmlnew/sanpham.php?productType=laptop&page=1"> Latop</a> </li>
                        <li> <a href="../htmlnew/sanpham.php?productType=watch&page=1"> Watch</a> </li>
                        <li> <a href="../htmlnew/sanpham.php?productType=headphone&page=1"> HeadPhone</a> </li>
                      </ul></li>
                  <li><a href="../htmlnew/tuyendung.php">Tuyển Dụng</a></li>
                  <li><a href="../htmlnew/tintuc.php">Tin Tức</a></li>
                  <li> <input type="text"class="a6" placeholder=" <?php if(isset($_GET["nvn"])){ 
                                                                          if(strlen(str_replace(" ","",$_GET["nvn"]))==0)
                                                                            echo "bạn chưa nhập gì cả!";
                                                                          else 
                                                                            findSomeThing($_GET["nvn"]);
                                                                        }
                                                                        else echo "Bạn tìm gì?"; ?>"
                                                                         name="nvn" id="nvn" style="height: 30px; padding-top: 5px; border:none;width:auto;"><input type="submit" name="find" value=""  class="b21"  /></li>
                  <input type="hidden" name="productType" value="find"/>
                </ul>
          </nav>
      </div>       
                                                                      </form>
          <br>
      <div class="a10"><a class="a15" href="../html/nhap.php">Trang chủ </a> > <a class="a15" href="../htmlnew/tintuc.php">Tuyển dụng</a></div>
      <br>
      <video controls class="video">
        <source src="../video/tuyendung.mp4">
    </video>
  <br>
  <br>
  <img class="hinhtuyendung" src="../image/tuyendung.jpg">
  <div class="thongtintd">
    <ol>
      <p>Mô tả công việc</p>
<li><p><b>I. MÔ TẢ CÔNG VIỆC: </b></p></li>
<p>Đón tiếp, trò chuyện và lắng nghe khách hàng về nhu cầu sử dụng điện thoại, máy tính, phụ kiện… 
Tư vấn tính năng, tiện ích của các sản phẩm và các dịch vụ kèm theo
Hỗ trợ khách hàng lựa chọn sản phẩm, dịch vụ phù hợp & hỗ trợ sau bán hàng
Giải đáp các câu hỏi về sản phẩm, dịch vụ 
Thời gian làm việc: Chủ yếu Ca xoay (Ca sáng: Từ 08h00 – 15h00 và ca chiều: từ 15h00 – 22h00) </p>
<li><p><b>II. YÊU CẦU: </b></p></li>
<p>Nam/Nữ, tuổi từ 18 – 27, tốt nghiệp Trung học Phổ thông trở lên
Ngoại hình sáng, Nam cao từ 1m65, nữ cao từ 1m55
Bạn là người thân thiện, niềm nở, thích giao tiếp với người khác
Yêu thích công việc bán hàng và chăm sóc khách hàng
Có niềm đam mê, có kiến thức công nghệ và mong muốn được chia sẻ kiến thức cho khách hàng</p>
<li><p><b>III. QUYỀN LỢI:</b></p></li>
<p>THU NHẬP: 7 – 12 triệu/tháng ( LCB + Thưởng chương trình thi đua hàng tuần/tháng/năm )
Làm việc trong một môi trường năng động, thân thiện, chuyên nghiệp, có cơ hội thăng tiến cao
Hưởng đầy đủ các chế độ bảo hiểm xã hội, y tế, thất nghiệp theo luật lao động; chế độ phúc lợi hiếu, hỉ, sinh nhật, du lịch nghỉ mát 
Tham gia các khóa đào tạo kỹ năng mềm, định hướng chuyên môn phát triển bản thân
Nhận thưởng vào các ngày Lễ, Tết, thưởng doanh số hàng tháng, quý, năm hấp dẫn</p>
<li><b><p>LƯU Ý:</p></b></li>
 <p>Thời gian làm việc theo ca xoay tuần làm 6 ngày và nghỉ 1 ngày trong tuần. Do tính chất công việc, KHÔNG tuyển các ứng viên còn đi học, sinh viên làm thêm</p></ol></div>

<br>
<button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
  <table style="width: 100%;background-color:rgba(0,0,0,0.8);" >
            <tr>
                <td class="a1112">THÔNG TIN SINH VIÊN TECHNOLOGY </td>
        
                <td class="a1113">HƯỚNG DẪN CHUNG</td>
     
                <td class="a1112">HỖ TRỢ KHÁCH HÀNG</td>
     
                <td class="a1113">TSOCIAL </td>
     
            </tr>
     
            <tr>
                <td class="a111"><a href="" >Giới thiệu công ty</a></td>
                <td class="a112" ><a href="">Giao hàng - Đổi trả</a></td>
                
                <td class="a111">Gọi mua hàng:<a href="" class="cuoi"> 0901083627</a> (Miễn Phí)</td>  
                <td rowspan="2">
                   <a href=""> <img src="../image/aaa.jpg" alt="" class="a13"></a>
                   <a href=""> <img src="../image/zalo.jfif" alt=""class="a13"></a>
                    <a href=""><img src="../image/z3065110575113_cbb8e61010a4ed39f408fc1a754fb038.jpg" alt=""class="a13"></a>
     
             </td>
            </tr>
     
            <tr>
             <td class="a111"><a href=""> Hệ thống showroom, đại lý </a></td>
     
             <td class="a112" ><a href="">Hướng dẫn mua hàng</a></td>
     
             <td class="a111">Khiếu nại, Bảo hành:<a href="" class="cuoi"> 0901083627</a></td>
            </tr>
     
            <tr>
             <td class="a111"><a href="">Liên Hệ / Góp Ý</a> </td>
     
             <td class="a112"><a href="">Thanh toán và bảo mật</a></td>
     
             <td class="a111">Thời gian phục vụ: 8h-22h</td>
     
             <td class="a1114" >HỆ THỐNG WEBSITE </td>
            </tr>
     
            <tr>
            
             <td class="a111"><a href="">Mua trả góp</a></td>
     
             <td class="a112"><a href="">Chính sách bảo hành</a></td>
             <td class="a111">Email: svt@gmail.vn</td>
             <td>      </td>
            </tr>
     
            <tr>
             <td class="a111"><a href="">Chương trình Khách hàng thân thiết</a> </td>
     
             <td class="a112"><a href="">Bảo trì sản phẩm</a></td>
     
             <td> </td>
             
             <td class="a112"><a href="">SVT Shop</a></td>
            </tr>
     
            <tr>
             <td class="a111"><A href="">Điều khoản sử dụng website</A> </td>
     
             <td class="a112"><A href="">Kích hoạt bảo hành</A></td>
             <td> </td>
     
             <td class="a112"><a href="">Sinh Viên Technology</a></td>
            </tr>
         <tr>
          <td class="a111"><a href="tuyendung.php">Tuyển dụng</a></td>
          <td>    </td>
          <td>     </td>
          <td class="a112"><a href="">SVT Hồ Chí Minh</a></td>
         </tr>
         
       <tr class="a15">
        <td><br><br></td>
        <td><br><br></td>
        <td><br><br></td>
        <td><br><br></td>    
           
     </tr>
            
            <tr  >
             <td colspan="2" class="a16" >  CÔNG TY CỔ PHẦN TM-DV-SVT </td>
             <td></td>
             <td class="a20">CÁCH THỨC THANH TOÁN</td>
            </tr>
     
            <tr>
                       
            </tr>
           <tr>
                   <td> </td>
                   <td>
                        
                   </td>
               <td>
                  <a href=""> <img src="https://vietthuong.vn/assets/frontend/images/thanhtoan.png" alt=""></a>
                 <td><br></td>
                   
                 </td>
     </tr>
           <tr>
               <td class="a1115"> Địa chỉ:  89 Trần Đình Xu, Q1, TP.HCM </td>
           </tr>
     
           <tr>
               <td class="a1115"> Điện thoại: <a class="a1-1">09412355169</a></td>
           </tr>
           <tr>
               <td  class="a1115"> Hotline: <a class="a1-1">0785073528</a></td>
           </tr>
           <tr>
               <td class="a1119"> Email: svt@gmail.com</td>
           </tr>
     
        </table>
    </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
</body>

<script>
    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {scrollFunction()};/* function trong function*/

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
</script>
<script src="../js/link.js"></script>
</html>
