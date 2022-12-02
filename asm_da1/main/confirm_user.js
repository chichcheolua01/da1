
function confirm_deluser(id){
    if (confirm("Bạn có muốn xóa người dùng này ?")) {
        window.location.href="/da1/asm_da1/controller/delete_user.php?userId="+id
    }
}