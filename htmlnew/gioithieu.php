<?php require_once("library.php")
?>


<html>   
<body lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href='../css/gioithieu1.css'>
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->

    <title>Giới thiệu</title>
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
    <div class="a10"><a class="a15" href="../html/nhap.php">Trang chủ </a> > <a class="a15" href="../htmlnew/gioithieu.php">Giới Thiệu </a></div>
</header>
<body>
    <div class="grid-container">
        <div class="col-sm-3">
            <div class="box">
                <div class="title3">Thông tin</div>
                <div class="category">
                    <ul>
                        <li>
                            <a href="#nd1"><h3 class="heading-box">Tổng quan</h3></a>
                            
                        </li>
                        <li>
                            <a href="#nd2"><h3 class="heading-box">Sứ Mệnh</h3></a>
                            
                        </li>
                        <li>
                            <a href="#nd3"><h3 class="heading-box">Giá Trị Cốt Lõi</h3></a>
                            
                        </li>
                    </ul>
               </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="content" id="nd1">
                <h1 class="title">Tổng quan về công ty SVT</h1>
                <div class="description_single">
                    <p style="text-align:justify">SVT Inc. là một tập đoàn công nghệ đa quốc gia của Việt Nam có trụ sở chính tại Hà Nội, Thành Phố Hồ Chí Minh, chuyên thiết kế, phát triển và bán thiết bị điện tử tiêu dùng, phần mềm máy tính và các dịch vụ trực tuyến. Nó được coi là một trong Năm công ty lớn của ngành công nghệ thông tin Việt Nam, cùng với Amazon, Google, Microsoft và Facebook. Các dòng sản phẩm phần cứng của hãng bao gồm điện thoại thông minh iPhone, máy tính bảng iPad, máy tính xách tay Macbook, máy tính cá nhân Mac, máy nghe nhạc di động iPod, đồng hồ thông minh Apple Watch, máy phát đa phương tiện kỹ thuật số Apple TV, tai nghe không dây AirPods, tai nghe AirPods Max và loa thông minh HomePod</p>

                    <p style="text-align:justify">Phần mềm của SVT bao gồm hệ điều hành macOS, iOS, iPadOS, watchOS và tvOS, trình phát đa phương tiện iTunes, trình duyệt web Safari, mã nhận dạng nhạc Shazam, gói làm việc năng suất và sáng tạo iLife và iWork, cũng như các ứng dụng chuyên nghiệp như Final Cut Pro, Logic Pro và Xcode. Các dịch vụ trực tuyến của nó bao gồm iTunes Store, iOS App Store, Mac App Store, Apple Arcade, Apple Music, Apple TV +, iMessage và iCloud. Các dịch vụ khác bao gồm Apple Store, Genius Bar, AppleCare, Apple Pay, Apple Pay Cash và Apple Card.</p>

                    <p style="text-align:justify">SVT được Steve Jobs, Steve Wozniak và Ronald Wayne thành lập vào tháng 4 năm 1976 để phát triển và bán máy tính cá nhân Apple I của Wozniak, mặc dù Wayne đã bán lại cổ phần của mình trong vòng 12 ngày. Nó được hợp nhất thành Apple Computer, Inc., vào tháng 1 năm 1977, và doanh số bán máy tính của nó, bao gồm cả Apple I và Apple II, đã tăng nhanh chóng.[6]</p>

                    <p style="text-align:justify">Sau hơn 25&nbsp;năm hoạt động, VTM đã không ngừng lớn mạnh và liên tục phát triển không chỉ về quy mô sản xuất, mà cả doanh số bán hàng. Hiện tại, Việt Thương đã trở thành một trong những nhà cung cấp và phân phối nhạc cụ hàng đầu tại Việt Nam và trong khu vực. Từ những khởi đầu khiêm tốn vào năm 1996, công ty đã phát triển lên vị trí dẫn đầu và tự hào với mạng lưới showroom và hệ thống giáo dục âm nhạc rộng khắp cả nước.</p>

                    <p style="text-align:justify">Việt Thương cũng tự hào là đại diện nhập khẩu và phân phối độc quyền hơn 50 nhãn hàng nổi tiếng thế giới: Steinway &amp; Sons, Boston, Essex, Kawai, Kohler &amp; Campbell, Roland, Casio, Taylor, Fender, Pearl,… Đồng thời, là đại diện độc quyền và duy nhất được phép tổ chức thi và cấp chứng chỉ quốc tế London College of Music (LCM) thuộc University of West London tại Việt Nam và là đơn vị giảng dạy âm nhạc mầm non theo chương trình Kawai và Music For Little Mozarts.</p>

                    <p style="text-align:center"><em>Lễ trao Chứng chỉ âm nhạc quốc tế LCM 2018</em></p>

                    <p style="text-align:justify">Bên cạnh các hoạt động sản xuất kinh doanh, VTM luôn nỗ lực đóng góp tích cực cho Ngân sách Nhà nước qua việc hoàn thành tốt công tác nộp thuế, cũng như góp phần thúc đẩy sự phát triển bền vững của cộng đồng và xã hội Việt Nam với nhiều hoạt động dài hơi, thiết thực và có ý nghĩa.</p>

                    <p style="text-align:justify">Trong suốt lịch sử hình thành và phát triển, với sự nỗ lực không ngừng của toàn bộ nhân viên VTM, đại lý, nhà cung cấp và đối tác, VTM đã đạt được nhiều thành tựu to lớn &amp; liên tục phát triển lớn mạnh, hoàn thành sứ mệnh đối với khách hàng, đóng góp đáng kể cho nghành Âm nhạc và xã hội Việt Nam.</p>
                    </div>
            </div>
        
            <div class="content" id="nd2">
                <h1 class="title">Sứ Mệnh</h1>
                <div class="description_single">
                    <p style="text-align:justify">Sứ mệnh của Amazon là : "Amazon được hướng dẫn bởi bốn nguyên tắc: sự ám ảnh của khách hàng hơn là sự tập trung của đối thủ cạnh tranh, niềm đam mê phát minh, cam kết về sự xuất sắc trong hoạt động và tư duy dài hạn. Đánh giá của khách hàng, Mua sắm bằng 1 lần nhấp, đề xuất được cá nhân hóa, Prime, Sự hoàn thành của Amazon, AWS, Kindle Direct Publishing, Kindle, Máy tính bảng Fire, Fire TV, Amazon Echo và Alexa làmột số sản phẩm và dịch vụ được Amazon đi tiên phong. "</p>

                    <p style="text-align:justify">Tầm nhìn : Trở thành công ty lấy khách hàng làm trung tâm nhất trên thế giới; để xây dựng một nơi mà mọi người có thể đến để tìm và khám phá bất cứ thứ gì họ có thể muốn mua trực tuyến</p>
                </div>
            </div>
            <div class="content" id="nd3">
                <h1 class="title">Giá Trị Cốt Lõi</h1>
                <div class="description_single">
                <p style="text-align:justify">
                    <strong>1. Nỗi ám ảnh của khách hàng</strong>
                    <br>
                        Bezos không chỉ bảo nhân viên chú ý đến khách hàng; anh ta nhắc nhở họ để ám ảnh về họ. Và anh ấy đã làm như vậy kể từ lá thư cổ đông đầu tiên vào năm 1997. 

                        “Rất nhiều công ty nói về việc lấy khách hàng làm trung tâm. Nói thì dễ nhưng làm thì khó, ”Carr nói. 

                        Ám ảnh về khách hàng là điều khó khăn đối với nhiều tổ chức vì các nhà lãnh đạo, quản lý và nhân viên hiếm khi được nghe trực tiếp từ khách hàng. Họ nghe từ đồng nghiệp và đối tác của họ, những người đều có nhu cầu và mục tiêu riêng. Nhưng một công ty vĩ đại được xây dựng bởi một nhà lãnh đạo, người luôn giữ khách hàng là trung tâm. Họ nhắc nhở các nhóm bắt đầu với nhu cầu của khách hàng và ‘làm việc ngược lại’.

                        Bezos nhắc nhở những người Amazonians chú ý đến đối thủ cạnh tranh, nhưng phải ám ảnh về khách hàng.</p>
                    <p style="text-align:justify">
                    <strong>2. Tư duy dài hạn</strong>
                    <br>
                        Bezos đã liên tục khẳng định rằng một trong những giá trị cốt lõi của Amazon là suy nghĩ dài hạn hơn hầu hết các công ty.

                        Carr nói rằng Amazon Prime Video, có hơn 100 triệu người xem, là kết quả của một thập kỷ nghiên cứu, phát triển và mua lại nội dung. 

                        “Có một khoảng thời gian dài là rất quan trọng nếu bạn muốn xây dựng một cái gì đó lớn và lâu dài.” Carr nói. 

                        Nhiều công ty sẽ từ bỏ ý tưởng nếu nó không tạo ra lợi nhuận trong một quý hoặc một năm, nhưng “Amazon sẽ gắn bó với một sáng kiến trong năm, sáu, bảy năm – đồng thời giữ cho khoản đầu tư có thể quản lý được, không ngừng học hỏi và cải tiến —Cho đến khi nó đạt được động lực và sự chấp nhận. </p>
                    <p style="text-align:justify">
                    <strong>3. Hăng hái phát minh.</strong>
                    <br>
                        Theo Carr, chấp nhận rủi ro có nghĩa là chấp nhận rằng các ý tưởng hoặc dự án sẽ thất bại. Nhưng không phải tất cả các tổ chức đều nuôi dưỡng một nền văn hóa, nơi có thể thử và thất bại. 

                        Carr nói: “Bạn phải thực hiện các bước chủ động để tạo ra một nền văn hóa nơi mọi người không có nỗi sợ thất bại. 

                        Tâm lý tiên phong không chỉ xảy ra trong một tổ chức. Một nhà lãnh đạo phải truyền cảm hứng cho một nhóm phấn đấu để hoàn thành một cái gì đó khác biệt và độc đáo.</p>
                    <p style="text-align:justify">
                    <strong>4. Tự hào về sự xuất sắc trong hoạt động</strong>
                    <br>
                        Trong lá thư năm 1998, Bezos đã xác định sự xuất sắc trong hoạt động là giá trị cốt lõi của công ty. Theo Bezos, “Sự xuất sắc trong hoạt động bao hàm hai điều. Mang đến sự cải thiện liên tục trong trải nghiệm khách hàng và thúc đẩy năng suất, lợi nhuận, hiệu quả và tốc độ tài sản trên tất cả các doanh nghiệp của chúng tôi. ”

                        Trong một cuộc phỏng vấn năm 2018, Bezos vẫn nhắc nhở các nhân viên rằng công ty đánh giá cao sự xuất sắc trong những nỗ lực hậu trường mà hầu hết người tiêu dùng sẽ không bao giờ thấy — nhưng họ sẽ thấy kết quả như việc giao hàng đúng hẹn.

                        “Mọi người sẽ không bao giờ nhìn thấy 90% những gì bạn làm,” Bezos nói. “Điều duy nhất khiến bạn có những tiêu chuẩn cao trong công việc mà không ai từng thấy là niềm tự hào nghề nghiệp của chính bạn về sự xuất sắc trong hoạt động.”

                        Carr nói: “Đừng cho rằng chỉ cần nêu rõ các giá trị của bạn và hiển thị chúng sẽ có tác dụng đáng kể. Tại Amazon, bốn trụ cột của văn hóa doanh nghiệp của công ty được xây dựng trong mọi quy trình và cuộc thảo luận. Và tất cả đều bắt đầu từ đầu.

                        Mỗi công ty đều có một loạt các thành phần khác nhau tạo nên nước sốt bí mật của mình, nhưng những giá trị đó có ý nghĩa rất nhỏ nếu các nhóm của bạn không cải thiện được chúng. Giữ các giá trị của công ty bạn ở vị trí trung tâm.</p>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
    <br>
</body>
<footer>
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