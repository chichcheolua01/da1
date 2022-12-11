function redirect(cartId)
    {
        if (confirm("Bạn có muốn xóa sản phẩm này ?")) {
        window.location="../../controller/cart/delete_cart.php?cartId="+cartId;
        }
    }
