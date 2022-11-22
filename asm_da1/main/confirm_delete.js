function confirm_del(id){
    if (confirm("Bạn có muốn xóa sản phẩm này ?")) {
        window.location.href="/da1/asm_da1/controller/delete_product.php?productId="+id
    }
}