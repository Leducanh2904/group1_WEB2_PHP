let isLogin = !!localStorage.getItem("token");
function checkLogin1(){
    if(isLogin){
        window.location.href = "taikhoan.html";
    }
}
function Login(){
    // let username = document.getElementById("username").value;
    // let password = document.getElementById("password").value;
    let checkLogin = true;
    if(checkLogin){
        // if(username === admin && password === adPass)
        // {
        //     localStorage.setItem("token1",username);
        //     isAdmin=true;
        //     checkLogin1();
        //     alert("Đăng nhập thành công");
        // }
        // else{
        //     localStorage.setItem("token",username);
        //     isLogin = true;
        //     checkLogin1();
        //     alert("Đăng nhập thành công");
        // }
        localStorage.setItem("token","test");
        isLogin = true;
        checkLogin1();
        alert("Đăng nhập thành công");
    }else{
        localStorage.clear();
        alert("Tài khoản hoặc mật khẩu không đúng");
    }
}
function changAccountName(){
    if(isLogin){
        console.log(isLogin);
        document.getElementById("taikhoan").innerHTML = "LÊ ĐỨC ANH";
    }
}
function changeAddress(){
    if(document.pay.rd1.value == "Chon"){
        document.getElementById("address").value="273 An Dương Vương, phường 3 Quận 5, TP. Hồ Chí Minh";
    }
    if(document.pay.rd1.value == "Nhap"){
        document.getElementById("address").value=null;
    }
}
function accessCart(){
    if(!isLogin){
        alert("Bạn phải đăng nhập mới xem giỏ hàng được")
        document.getElementById("giohang").href="#";
    }
}

function addToCart() {
    var selectedSize = document.querySelector('input[name="size"]:checked');

    if(isLogin){
        if (selectedSize) {
            var sizeValue = selectedSize.value;
    
            if (sizeValue === '37') {
                alert('Đã thêm vào giỏ hàng');
            } else {
                alert('Mặt hàng đã hết, vui lòng chọn lại');
                // Reset radio button selection
                var sizeRadios = document.querySelectorAll('input[name="size"]');
                sizeRadios.forEach(function (radio) {
                    radio.checked = false;
                });
            }
        } else {
            alert('Vui lòng chọn size');
        }
    }
    else if(!isLogin){
        alert("Bạn phải đăng nhập mới thêm vào giỏ hàng được !!")
    }
}   