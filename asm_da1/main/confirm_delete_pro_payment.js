function dl_pro_pay(cartId)
    {
        if (confirm("Bạn có muốn xóa sản phẩm này ?")) {
        window.location="../../controller/payment/delete_products_payment.php?cartId="+cartId;4
        }
    }
