<?php require_once("library.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href='../css/tintuc1.css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Tin tức</title>
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
       
     <!-- maindaily -->
     <br>
     <div class="a10"><a class="a15" href="../html/nhap.php">Trang chủ </a> > <a class="a15" href="">Tin tức</a></div>
     <br>
    <h2>Tin Tức về sản phẩm</h2>
<div class="tintuc" style="width: 70%; float: left;height:1100px;">
<ul>
<li><a href=""><img  class="im2" src="../image/khuyenmai.jpg" alt="">
<h3 class="c2-2">Ưu đãi hấp dẫn: Vinaphone tặng thêm 20% giá trị thẻ cào khi nạp thẻ, diễn ra chỉ trong 1 ngày 31/12 mà thôi</h3>
<h4 class="cc2-2">Khuyến mại thêm tiền và chỉ diễn ra 1 ngày duy nhất, Vinaphone tặng thêm 20% cho tất cả giá trị thẻ cào khi nạp vào điện thoại. </h4>
</a> </li>

<br> 
<li> <a href=""><img  class="im1" src="../image/laptop.jpg" alt="">
    <h4 class="c2">Tiêu chuẩn Intel Evo là gì và laptop cần đáp ứng những gì mới được Intel chấp thuận chuẩn Evo? Xem rồi mạnh tay mua thôi!</h4>
    <h4 class="cc2">Intel đã ra mắt tiêu chuẩn Intel Evo, đây là tiêu chuẩn mới dành cho các dòng laptop trong tương lai. Tuy nhiên, còn nhiều câu hỏi xoay quanh vấn đề này như: Intel Evo là gì? Tiêu chuẩn của một chiếc laptop đạt Intel Evo là gì? Hãy Cùng tìm hiểu nhé!</h4>
    </a>   </li>
    <br> 
    <li> <a href=""><img  class="im1" src="../image/oneput.jpg" alt="">
        <h4 class="c2">Lộ tin OnePlus 10 Pro ra mắt vào ngày 11/1 với chip Snapdragon đầu bảng, camera chính 50MP và có màn hình tần số quét cao.</h4>
        <h4 class="cc2">OnePlus 10 Pro dự kiến sẽ ra mắt chính thức vào tháng tới, theo CEO của công ty. Một số nguồn tin đã dự đoán máy sẽ ra mắt vào tuần đầu tiên của tháng, nhưng hôm nay một video quảng cáo đã bị rò rỉ ở Trung Quốc và nó đã tiết lộ về ngày công bố chính xác của OnePlus 10 Pro.</h4>
        </a> </li>
        <br> 
        <li>  <a href=""><img  class="im1" src="../image/dongho.jpg" alt="">
            <h4 class="c2">Mừng năm mới loạt thiết bị đeo tay thông minh giá yêu thương chỉ dưới 1 triệu đồng, không sắm là tiếc lắm đó.</h4>
            <h4 class="cc2">Năm mới cận kề, đừng nên bỏ lỡ vô vàn deal HOT tại Thế Giới Di Động bạn nhé! Việc gì khó cứ để Thế Giới Di Động lo, rước ngay loạt phụ kiện đeo tay thông minh giá đang được sale yêu thương chỉ dưới 1 triệu đồng, nhanh tay lướt xem ngay!Thời gian khuyến mãi: Đến hết ngày 31/12/2021.</h4>
            </a> </li>
           <br>

           <li>  <a href=""><img  class="im1" src="../image/iq.jpg" alt="">
            <h4 class="c2">Mừng năm mới loạt thiết bị đeo tay thông minh giá yêu thương chỉ dưới 1 triệu đồng, không sắm là tiếc lắm đó.</h4>
            <h4 class="cc2">Năm mới cận kề, đừng nên bỏ lỡ vô vàn deal HOT tại Thế Giới Di Động bạn nhé! Việc gì khó cứ để Thế Giới Di Động lo, rước ngay loạt phụ kiện đeo tay thông minh giá đang được sale yêu thương chỉ dưới 1 triệu đồng, nhanh tay lướt xem ngay!Thời gian khuyến mãi: Đến hết ngày 31/12/2021. Lưu ý: Khuyến mãi có thể kết thúc sớm.</h4>
            </a> </li>
        </ul>                       
          
</div>
<div class="hot" style="float:left;width:30%;height:1000px;">
<a href=""><img class="im3" src="../image/docsaohay.gif" alt="">
   <h3 class="c5">Ưu đãi mua ngay!</h3>
</a>
    <h3 style="text-align: center; margin-left: 15px; margin-top: 20px; color:#C60000;">Chủ Đề Hot</h3>      
        <ul class="hot1">
            <li>  <a href="">Mẹo không phải ai cũng biết</a> </li>
            <li>  <a href="">Thế giới phụ kiện</a> </li>
            <li>  <a href="">Tất tần tật về AVAWorld</a> </li>
            <li>  <a href="">Thế giới đồng hồ</a> </li>
            <li>  <a href="">Săn sale cuối năm</a> </li>  
            <li>  <a href="">Mẹo về IPhone</a> </li>  
        </ul> 
        <a href=""><img class="im4" src="../image/hot2.jpg" alt="">
            <h3 class="c5">Nhận liền voucher 'nóng bỏng tay' trị giá 6 triệu đồng và vô vàn ưu đãi hấp dẫn khác khi sắm Galaxy S21 series, tham gia ngay!</h3>
         </a>
        
</div>
	<br><br><br><br><br>
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