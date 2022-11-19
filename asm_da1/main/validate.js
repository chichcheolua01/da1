function validate (){
    var name = document.getElementById("name")
    var username = document.getElementById("username")
    var email = document.getElementById("email")
    var pass = document.getElementById("pass")
    var repass = document.getElementById("repass")
    if (name.value=="") {
        document.querySelector("error_name").innerHTML="Chưa nhập họ và tên"
        return false
    }
    if (username.value=="") {
        document.querySelector("error_name").innerHTML="Chưa nhập họ và tên"
        return false
    }
    if (email.value=="") {
        document.querySelector("error_name").innerHTML="Chưa nhập họ và tên"
        return false
    }
    if (pass.value=="") {
        document.querySelector("error_name").innerHTML="Chưa nhập họ và tên"
        return false
    }
    if (repass.value=="") {
        document.querySelector("error_name").innerHTML="Chưa nhập họ và tên"
        return false
    }
    else{
        return true
    }
}