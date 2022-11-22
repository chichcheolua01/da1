var Fullname = document.getElementById("name")
    var username = document.getElementById("username")
    var email = document.getElementById("email")
    var pass = document.getElementById("pass")
    var repass = document.getElementById("repass")
    var file = document.getElementById("imageFile")
function validate (){
    
    if (Fullname.value==""||username.value==""||email.value==""||pass.value==""||repass.value==""||repass.value !== pass.value||file.value=="") {
        if (Fullname.value == "") {
            document.querySelector("#errorName").innerHTML="Chưa nhập họ và tên"
        }
        if (Fullname.value !== "") {
            document.querySelector("#errorName").innerHTML=""
        }
        if (username.value == "") {
            document.querySelector("#errorusername").innerHTML="Chưa nhập tên đăng nhập"
              
        }
        if (username.value !== "") {
            document.querySelector("#errorusername").innerHTML=""
              
        }
        if (pass.value === "") {
            document.querySelector("#errorpass").innerHTML="Chưa nhập mật khẩu"
                
        }
        if (pass.value !== "") {
            document.querySelector("#errorpass").innerHTML=""
                
        }
        if (repass.value === "") {
            document.querySelector("#errorrepass").innerHTML="Chưa xác nhận mật khẩu"
                
        }
        if (repass.value !== pass.value) {
            document.querySelector("#errorrepass").innerHTML="Xác nhận mật khẩu không chính xác"
                
        }
        if (repass.value !== ""||repass.value === pass.value) {
            document.querySelector("#errorrepass").innerHTML=""
                
        }
        if (email.value == "") {
            document.querySelector("#erroremail").innerHTML="Chưa nhập email"
                
        }
        if (email.value !== "") {
            document.querySelector("#erroremail").innerHTML=""
                
        }
        if (file.value == "") {
            document.querySelector("#errorImg").innerHTML="Chưa chọn avatar"
        }
        if (file.value !== "") {
            document.querySelector("#errorImg").innerHTML=""
        }
        return false
    }
    else{
        console.log("hahaha");
        return true
    }

}