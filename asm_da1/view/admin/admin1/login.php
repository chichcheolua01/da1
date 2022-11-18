<?php
    include '../controller/classes/adminlogin.php';


    $class = new adminlogin();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adminuser = $_POST['adminuser'];
        $adminpass = md5($_POST['adminpass']);
        

        $login_check = $class->login_admin($adminuser,$adminpass);
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login admin</title>
</head>
<body>
<div class="container mx-auto">
        <div class="w-[990px] mx-auto h-10 border-b-2 ">
            <div class="mx-auto w-[120px] text-center my-2 py-1 border-b-4 border-[#662d91] text-xl font-semibold">ĐĂNG NHẬP</div>
        </div>
        <div class="w-1/3 mx-auto my-10 text-center">
            <h1>đăng nhập trang quản trị</h1>
        </div>
        <div class="w-1/3 mx-auto my-10 shadow-xl border">
            <span><?php
                if(isset($login_check)){
                    echo $login_check;
                }
            ?></span>
            <form class="w-full mx-10"  action="login.php" method="post">
                <div class="py-5">
                    <label for="">Tên đăng nhập</label>
                    <br>
                    <input class="w-[435px] border rounded-full h-[30px] px-5" type="text"  name="adminuser">
                </div>
                <div class="py-5">
                    <label for="">Mật khẩu</label>
                    <br>
                    <input class="w-[435px] border rounded-full h-[30px] px-5" type="password"   name="adminpass">
                </div>
                <div class="py-5 mx-auto">
				<input type="submit" value="Log in" />
                    
                </div>
            </form>
            <br>
            <hr class="w-1/2 mx-auto">
            <div class="text-center">
                <h1 class="font-medium text-[#662d91]">BẠN CHƯA CÓ TÀI KHOẢN</h1>
                
            </div>
        </div>
    </div>
</body>
</html>




