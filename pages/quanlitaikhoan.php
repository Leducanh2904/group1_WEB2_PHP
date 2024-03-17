<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí người dùng </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
       <!-- =============== Navigation ================ -->
       <?php 
                include ("../pages/taskbar.php");
                ?>
        <!-- ========================= Main ==================== -->
        <?php 
                include ("../pages/mainadmin.php");
                ?>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders2">
                    <div class="cardHeader">
                        <h2>Thông tin tài khoản</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Họ và tên</td>
                                <td>Tài khoản</td>
                                <td>Mật khẩu</td>
                                <td>Gmail</td>
                                <td>SĐT</td>
                                <td>Chỉnh sửa</td>
                                <td>Trạng thái</td>
                            </tr>
                        </thead>

                        <tbody>
                            <style>
        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
                            <script>
        function togglePassword(passwordId, eyeIconId) {
        var passwordField = document.getElementById(passwordId);
        var eyeIcon = document.getElementById(eyeIconId);

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.innerHTML = "👁️";
        } else {
            passwordField.type = "password";
            eyeIcon.innerHTML = "👁️";
        }
    }
        function khoataikhoan(lockId, unlockId){
            var lockField = document.getElementById(lockId);
            if (lockField.type === "button"){
                alert("Khóa thành công !!!")
                document.getElementById(lockId).style.color="white";
                document.getElementById(lockId).style.backgroundColor="red";
                document.getElementById(unlockId).style.color="orange";
                document.getElementById(unlockId).style.backgroundColor="white";
            }
        }
        function mokhoataikhoan(lockId, unlockId){
            var unlockField = document.getElementById(unlockId);
            if(unlockField.type==="button"){
                alert("Mở khóa thành công !!!")
                document.getElementById(lockId).style.color="orange";
                document.getElementById(lockId).style.backgroundColor="white";
                document.getElementById(unlockId).style.color="white";
                document.getElementById(unlockId).style.backgroundColor="orange";
            }
        }

                            </script>
                            <tr>
                                <td>Lê Đức Anh</td>
                                <td>ldanhsguk22</td>
                                <td>   <div class="password-container">
                                    <input type="password" id="password1" name="password" value="leducanhdeptrai" readonly>

        
                                    <span class="toggle-password" onclick="togglePassword('password1','eyeIcon1')">👁️</span>
                                </div>
                            
                            </td>
                                <td>sgu783fas@gmail.com </td>
                                <td>0364655945</td>
                                <td><a href="chinhsuatk.php"><button class="status inProgress" type="button" onclick="toggleButtons()">Chỉnh sửa</button></a>
                                    <button class="status1 inProgress" type="button" onclick="confirm('Bạn chắc chắn muốn xóa tài khoản này?')"><span>Xóa</span></button></td>
 <td><button id="checkLock" class="status2 inProgress" type="button" onclick="khoataikhoan('checkLock', 'checkLock1')"><span>Khóa</span></button>
     <button id="checkLock1" class="status2 inProgress" type="button" style="color: white; background-color: orange;" onclick="mokhoataikhoan('checkLock','checkLock1')"><span>Mở khóa</span></button>
</td>
 
                                </tr>
                                <tr>
                                    <td>Trần Minh Quân</td>
                                    <td>tmquansguk22</td>
                                    <td>   <div class="password-container">
                                        <input type="password" id="password2" name="password"  value="leducanhdeptrai" readonly>
                                        <span class="toggle-password" onclick="togglePassword('password2','eyeIcon2')" >👁️</span>
                                    </div>
                                    <td> sgu982198@gmail.com</td>
                                <td>0931335214</td>

                                <td><button class="status inProgress" type="button" onclick="toggleButtons()">Chỉnh sửa</button>
                                    <button class="status1 inProgress" type="button" onclick="confirm('Bạn chắc chắn muốn xóa tài khoản này?')"><span>Xóa</span></button></td>
                                    <td><button id="checkLock2" class="status2 inProgress" type="button" onclick="khoataikhoan('checkLock2','checkLock3')"><span>Khóa</span></button>
                                        <button id="checkLock3" class="status2 inProgress" type="button" style="color: white; background-color: orange;" onclick="mokhoataikhoan('checkLock2','checkLock3')"><span>Mở khóa</span></button>
                                   </td>

                                    </tr>  <tr>
                                        <td>Phạm Ngọc Triều</td>
                                        <td>pntrieusguk22</td>
                                        <td>   <div class="password-container">
                                            <input type="password" id="password3" name="password" value="leducanhdeptrai" readonly>
                                            <span class="toggle-password" onclick="togglePassword('password3','eyeIcon3')">👁️</span>
                                        </div>
                                        <td> sgu123453@gmail.com</td>
                                <td>0559966452</td>

                                <td><button class="status inProgress" type="button" onclick="toggleButtons()">Chỉnh sửa</button>
                                    
                                    <button class="status1 inProgress" type="button" onclick="confirm('Bạn chắc chắn muốn xóa tài khoản này?')"><span>Xóa</span></button></td>
                                    <td><button id="checkLock4" class="status2 inProgress" type="button" onclick="khoataikhoan('checkLock4','checkLock5')"><span>Khóa</span></button>
                                        <button id="checkLock5" class="status2 inProgress" type="button" style="color: white; background-color: orange;" onclick="mokhoataikhoan('checkLock4','checkLock5')"><span>Mở khóa</span></button>
                                   </td>
         
                                        </tr>
                                        <tr>
                                            <td>Phạm Thanh Tuyền</td>
                                            <td>pttuyenhufitk32</td>
                                             <td>   <div class="password-container">
                                    <input type="password" id="password4" name="password" value="ducanhyeuttuyennhieulam" readonly>
                                    <span class="toggle-password" onclick="togglePassword('password4','eyeIcon4')">👁️</span>
                                </div>
                                            <td>huflit12323@gmail.com</td>
                                <td>0365876912</td>

                                <td><button class="status inProgress" type="button" onclick="toggleButtons()">Chỉnh sửa</button>
                                    <button class="status1 inProgress" type="button" onclick="confirm('Bạn chắc chắn muốn xóa tài khoản này?')"><span>Xóa</span></button></td>
                                    <td><button id="checkLock6" class="status2 inProgress" type="button" onclick="khoataikhoan('checkLock6','checkLock7')"><span>Khóa</span></button>
                                        <button id="checkLock7" class="status2 inProgress" type="button" style="color: white; background-color: orange;" onclick="mokhoataikhoan('checkLock6','checkLock7')"><span>Mở khóa</span></button>
                                   </td>

                                            </tr>  <tr>
                                                <td>Nguyễn Thành Trung Hiếu</td>
                                                <td>ntthieusguk22</td>
                                                 <td>   <div class="password-container" >
                                    <input type="password" id="password5" name="password"value="hieudaukhac?" readonly>
                                    <span class="toggle-password" onclick="togglePassword('password5','eyeIcon5')">👁️</span>
                                </div>
                                                <td> sgu124123@gmail.com</td>
                                <td>0881298848</td>

                                <td><button class="status inProgress" type="button" onclick="toggleButtons()">Chỉnh sửa</button>
                                    <button class="status1 inProgress" type="button" onclick="confirm('Bạn chắc chắn muốn xóa tài khoản này?')"><span>Xóa</span></button></td>
                                    <td><button id="checkLock8" class="status2 inProgress" type="button" onclick="khoataikhoan('checkLock8','checkLock9')"><span>Khóa</span></button>
                                        <button id="checkLock9" class="status2 inProgress" type="button" style="color: white; background-color: orange;" onclick="mokhoataikhoan('checkLock8','checkLock9')"><span>Mở khóa</span></button>
                                   </td>

                                                </tr>

                                                <tr>
                                                    <td>Đặng Quốc Đông Quân</td>
                                                    <td>dqdquansguk22</td>
                                                     <td>   <div class="password-container" >
                                    <input type="password" id="password6" name="password" value="quannghien123" readonly>
                                    <span class="toggle-password" onclick="togglePassword('password6','eyeIcon6')">👁️</span>
                                </div>
                                                    <td> sgu142123@gmail.com</td>
                                <td>0881298842</td>

                                <td><button class="status inProgress" type="button" onclick="toggleButtons()">Chỉnh sửa</button>
                                    <button class="status1 inProgress" type="button" onclick="confirm('Bạn chắc chắn muốn xóa tài khoản này?')"><span>Xóa</span></button></td>
                                    <td><button id="checkLock10" class="status2 inProgress" type="button" onclick="khoataikhoan('checkLock10','checkLock11')"><span>Khóa</span></button>
                                        <button id="checkLock11" class="status2 inProgress" type="button" style="color: white; background-color: orange;" onclick="mokhoataikhoan('checkLock10','checkLock11')"><span>Mở khóa</span></button>
                                   </td>

                                                    </tr>  <tr>
                                                        <td>Trương Lê Gia Hưng</td>
                                                        <td>tlghungsguk22</td>
                                                         <td>   <div class="password-container" >
                                    <input type="password" id="password7" name="password" value="hungtrumbao'c1" readonly>
                                    <span class="toggle-password" onclick="togglePassword('password7','eyeIcon7')">👁️</span>
                                </div>
                                                        <td> sgu325123@gmail.com</td>
                                <td>0881298841</td>

                                <td><button class="status inProgress" type="button" onclick="toggleButtons()">Chỉnh sửa</button>
                                    <button class="status1 inProgress" type="button" onclick="confirm('Bạn chắc chắn muốn xóa tài khoản này?')"><span>Xóa</span></button></td>
                                    <td><button id="checkLock12" class="status2 inProgress" type="button" onclick="khoataikhoan('checkLock12','checkLock13')"><span>Khóa</span></button>
                                        <button id="checkLock13" class="status2 inProgress" type="button" style="color: white; background-color: orange;" onclick="mokhoataikhoan('checkLock12','checkLock13')"><span>Mở khóa</span></button>
                                   </td>

                                                        </tr>  <tr>
                                                            <td>Nguyễn Đức Gia Bảo</td>
                                                            <td>ndgbaosguk22</td>
                                                             <td>   <div class="password-container" >
                                    <input type="password" id="password8" name="password" value="leducanhdeptrai" readonly>
                                    <span class="toggle-password" onclick="togglePassword('password8','eyeIcon8')">👁️</span>
                                </div>
                                                            <td>sgu09o123@gmail.com</td>
                                <td>0881298849</td>

                                <td><button class="status inProgress" type="button" onclick="toggleButtons()">Chỉnh sửa</button>
                                    <button class="status1 inProgress" type="button" onclick="confirm('Bạn chắc chắn muốn xóa tài khoản này?')"><span>Xóa</span></button></td>
                                    <td><button id="checkLock14" class="status2 inProgress" type="button" onclick="khoataikhoan('checkLock14','checkLock15')"><span>Khóa</span></button>
                                        <button id="checkLock15" class="status2 inProgress" type="button" style="color: white; background-color: orange;" onclick="mokhoataikhoan('checkLock14','checkLock15')"><span>Mở khóa</span></button>
                                        
                                   </td>

                                                            </tr>
        
                                                        <div class="themsanpham">
                                                            
                                                             
                                                           
                                                            
                                                            </tr>
                                                        </div>
                                                    </table>
                                                       <br> <br>
                                               <button class="status inProgress" id="button2"  type="button" style=" font-size: large; width: 180px; height: 60px;"> Thêm người dùng</button></td>   
                                                    <div id="myModal1" class="modal1" style="text-align: left; color: black; ">

                                                        <!-- Modal content -->
                                                        <div class="modal-content1">
                                                        <div class="modal-header1">
                                                            <span class="close">&times;</span>
                                                            <h2 style="text-align: center;">Thêm người dùng</h2>
                                                        </div>
                                                        <div class="modal-body1">
                                                            <div class="row1">
                                                                <div class="column1">
                                                                    <form onsubmit="alert('Thêm người dùng thành công')">
                                                                    <p  class="title1">Họ và tên</p> 
                                                                    <input class="tsp1" type="text" required > 
                                                                    <p class="title1">Tài khoản</p>
                                                                    <input class="tsp1" type="text" required>
                                                                    <p class="title1">Mật khẩu</p>
                                                                    <input class="tsp1" type="password" required>
                                                                    <p class="title1">Email</p>
                                                                    <input class="tsp1" type="email" required >
                                                                    <p class="title1">Số điện thoại</p>
                                                                    <input class="tsp1" type="tel" required>
                                                                </div>  
                                                                <div class="column1" style="background-color: white">
                                                                    <p class="title1">Địa chỉ (nếu có)</p>
                                                                    <textarea rows="5" cols="58"  >
                                                                    </textarea> <br> <br>
                                                                    <p class="title1">Thêm ảnh đại diện</p>
                                                                    <input class="tsp1" type="file" accept="image/*" id="themsanphamkhungcon2" onchange="displayImage3(this)" required >
                                                                    <br>
                                                                    <img id="previewImage3" src="#" alt="Hiển thị ảnh tại đây" style="max-width: 200px; max-height: 200px;">
                                                                    <br>
                                                                    <div id="delBtn3"  style="display: none;">
                                                                        <button class="status1 inProgress"  type="button" onclick="deleteImg('delBtn3','previewImage3')">Xóa hình ảnh</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                function deleteImg(delBtn,previewImage){
                                                                    document.getElementById(previewImage).src="#";
                                                                    document.getElementById(delBtn).style.display="none"; 
                                                                }
                                                                function displayImage3(input) {
                                                                  var file = input.files[0];
                                                                  if (file) {
                                                                    var reader = new FileReader();
                                                                    reader.onload = function(e) {
                                                                    document.getElementById('previewImage3').src = e.target.result;
                                                                    };
                                                                    reader.readAsDataURL(file);
                                                                  }
                                                                  document.getElementById("delBtn3").style.display="inline"; 
                                                                }
                                                                var modal = document.getElementById("myModal1");

                                                                // Get the button that opens the modal
                                                                var btn = document.getElementById("button2");

                                                                // Get the <span> element that closes the modal
                                                                var span = document.getElementsByClassName("close")[0];

                                                                // When the user clicks the button, open the modal 
                                                                btn.onclick = function() {
                                                                    modal.style.display = "block";
                                                                }

                                                                // When the user clicks on <span> (x), close the modal
                                                                span.onclick = function() {
                                                                modal.style.display = "none";
                                                                }

                                                                // When the user clicks anywhere outside of the modal, close it
                                                                window.onclick = function(event) {
                                                                    if (event.target == modal) {
                                                                        modal.style.display = "none";
                                                                    }
                                                                }
                                                                </script>
                                                        </div>
                                                        <div class="modal-footer" style="text-align: center;">
                                                            <button class="saveBtn1" type="submit" >
                                                                Thêm người dùng
                                                            </button>
                                                        </form>
                                                        </div>
                                                        </div>
                                                    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</php>