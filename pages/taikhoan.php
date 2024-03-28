
<!DOCTYPE html>

<html>

<head>
    <title>Tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href = "../css/styleTLWeb1.css" >
    <link rel="stylesheet" href = "../css/taikhoan.css" >
    <!-- <script src="../js/function.js"></script> -->
</head>

<body onload="changAccountName()">
    <?php
    include("../pages/mainmenu1.php");
    ?>
    <div class="body-info">
        <div class="inform">
            <div class="inner-inform">
                <h1 class="title-head widget-title">Thông tin tài khoản</h1>
                <div class="dangxuat">
                    
                    <p><i>Xin chào, </i><b style="color: #E95221;">
                        <?php
                            if(!isset($_COOKIE["user"])) {
                            echo "Cookie named '" . $cookie_name . "' is not set!";
                            } else {
                            
                            echo "" . $_COOKIE["user"];
                            }
                        ?>
                
                    </b> &nbsp; <a href="logOut.php" style="color: rgb(77, 20, 131); text-decoration: underline;"> Đăng xuất </a></p>
                    
                </div>
                
                <h2 class="widget-title">Thông tin khách hàng</h2>
                <div>
                    <p><svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245.86 244.44" fill="#E95221"><path d="M249.31,163.93H225.14a16.46,16.46,0,0,0-13.49,7l-16.9,24.18a16.46,16.46,0,0,1-27.12-.18l-16.17-23.82a16.48,16.48,0,0,0-13.62-7.22H114.11a55.34,55.34,0,0,0-55.33,55.34v24.55A8.23,8.23,0,0,0,67,252.06h229.4a8.24,8.24,0,0,0,8.23-8.24V219.27A55.34,55.34,0,0,0,249.31,163.93Zm-67.57-20.58a67.87,67.87,0,1,0-67.86-67.87A67.86,67.86,0,0,0,181.74,143.35Z" transform="translate(-58.78 -7.61)"></path></svg> <b>Họ tên: </b> Lê Đức Anh</p>
                    <p><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.7083 11.9274L13.0454 10.8187L11.5672 9.83339C11.2819 9.64357 10.8985 9.7058 10.6878 9.97615L9.77312 11.1521C9.57663 11.4073 9.22316 11.4806 8.94139 11.3246C8.32071 10.9793 7.58674 10.6542 5.96729 9.03271C4.34783 7.41118 4.02068 6.67929 3.67542 6.05861C3.51941 5.77684 3.59274 5.42338 3.84791 5.22691L5.02385 4.31219C5.29417 4.1016 5.35643 3.7182 5.16661 3.43288L4.21154 2.00013L3.07258 0.291677C2.87873 0.000879503 2.49066 -0.0864242 2.19096 0.0933101L0.877418 0.881329C0.522432 1.09048 0.261487 1.42821 0.148637 1.8245C-0.210569 3.13415 -0.28299 6.02317 4.34704 10.6532C8.97707 15.2832 11.8658 15.2106 13.1755 14.8513C13.5718 14.7385 13.9095 14.4776 14.1186 14.1225L14.9067 12.809C15.0864 12.5093 14.9991 12.1213 14.7083 11.9274Z" fill="#E95221"></path> <path d="M8.53399 2.32747C10.961 2.33017 12.9278 4.29697 12.9305 6.72399C12.9305 6.86681 13.0463 6.98262 13.1891 6.98262C13.3319 6.98262 13.4478 6.86684 13.4478 6.72399C13.4448 4.01144 11.2466 1.81323 8.53402 1.81024C8.3912 1.81024 8.27539 1.92602 8.27539 2.06887C8.27536 2.21166 8.39114 2.32747 8.53399 2.32747Z" fill="#E95221"></path> <path d="M8.53402 3.87932C10.1044 3.88117 11.377 5.15375 11.3788 6.72411C11.3788 6.86693 11.4946 6.98274 11.6374 6.98274C11.7803 6.98274 11.8961 6.86696 11.8961 6.72411C11.8939 4.8682 10.39 3.3642 8.53402 3.36206C8.3912 3.36206 8.27539 3.47784 8.27539 3.62069C8.27539 3.76354 8.39117 3.87932 8.53402 3.87932Z" fill="#E95221"></path> <path d="M8.53399 5.43087C9.2478 5.43172 9.82623 6.01015 9.82708 6.72396C9.82708 6.86678 9.94286 6.98259 10.0857 6.98259C10.2285 6.98259 10.3443 6.86681 10.3443 6.72396C10.3432 5.72462 9.53336 4.91478 8.53402 4.91364C8.3912 4.91364 8.27539 5.02941 8.27539 5.17227C8.27536 5.31509 8.39114 5.43087 8.53399 5.43087Z" fill="#E95221"></path> </svg> <b>Số ĐT: </b>0369448999</p>
                    <p><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00033 0.5C2.77533 0.5 0.166992 3.10833 0.166992 6.33333C0.166992 10.7083 6.00033 15.5 6.00033 15.5C6.00033 15.5 11.8337 10.7083 11.8337 6.33333C11.8337 3.10833 9.22533 0.5 6.00033 0.5ZM6.00033 8.83333C7.38104 8.83333 8.50033 7.71405 8.50033 6.33333C8.50033 4.95262 7.38104 3.83333 6.00033 3.83333C4.61961 3.83333 3.50033 4.95262 3.50033 6.33333C3.50033 7.71405 4.61961 8.83333 6.00033 8.83333Z" fill="#E95221"></path> </svg>  <b>Địa chỉ: </b>273 An Dương Vương, phường 3 Quận 5, TP. Hồ Chí Minh									</p>
                </div>
            </div>
        </div>
        <div class="table">
            <h1 class="title-head margin-top-0">Lịch sử mua hàng</h1>
            <div>
                <table>
                    <tr>
                        <th style="width:150px ;">Đơn hàng</th>
                        <th style="width:150px ;">Ngày</th>
                        <th style="width: 400px;">Địa chỉ</th>
                        <th style="width: 100px ;">Giá trị</th>
                        <th style="width:100px ;">Tình trạng</th>
                    </tr>
                    <tr>
                        <td> <a href="chitietdonhang.php" style="color: black;" >2021032957845</a></td>
                        <td>29-03-2021 18:38:56</td>
                        <td>273 An Dương Vương, phường 3 Quận 5, TP. Hồ Chí Minh</td>
                        <td><span class="price">9.700.000 ₫</span></td>
                        <td><span><b class="green">Hoàn tất</b></span></td>
                     </tr>
                     <tr>
                        <td>2021032957999</td>
                        <td>11-11-2023 09:15:20</td>
                        <td>819 Nguyễn Kiệm, phường 2 Gò Vấp, TP. Hồ Chí Minh</td>
                        <td><span class="price">10.200.000 ₫</span></td>
                        <td><span><b class="green">Hoàn tất</b></span></td>
                     </tr>
                </table>
                
            </div>
        </div>
    </div>
    <?php
    include("../pages/footer.php");
    ?>
</body>
    </html>