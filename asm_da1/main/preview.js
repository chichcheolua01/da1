const fileInp = document.getElementById("imageFile")
const preview = document.querySelector("#prevImage")
fileInp.addEventListener('change',function(){
    const file = this.files[0]
    console.log(file);
    if (file) {
        const reader = new FileReader()
        
        preview.classList.remove("hidden")
        document.querySelector("#textPrev").classList.add("hidden")
        reader.addEventListener('load',function(){
            preview.setAttribute("src",this.result)
        })
        reader.readAsDataURL(file)
    }
})
const nameProd = document.querySelector("#name")
const price = document.querySelector("#price")
const cate = document.querySelector("#cate")
const gender = document.querySelector("#gender")
const desc = document.querySelector("#desc")
function check(){
    if (nameProd.value==""||price.value==""||desc.value==""||cate.value==""||gender.value==""||fileInp=="") {
        if (nameProd.value == "") {
            document.querySelector("#errorName").innerHTML="Chưa nhập tên cho sản phẩm"
        }
        if (nameProd.value !== "") {
            document.querySelector("#errorName").innerHTML=""
        }
        if (price.value == "") {
            document.querySelector("#errorPrice").innerHTML="Chưa nhập giá cho sản phẩm"
              
        }
        if (price.value !== "") {
            document.querySelector("#errorPrice").innerHTML=""
              
        }
        if (cate.value === "") {
            document.querySelector("#errorCate").innerHTML="Chưa phân loại danh mục"
                
        }
        if (cate.value !== "") {
            document.querySelector("#errorCate").innerHTML=""
                
        }
        if (gender.value === "") {
            document.querySelector("#errorGender").innerHTML="Chưa chọn giới tính "
                
        }
        if (gender.value !== "") {
            document.querySelector("#errorGender").innerHTML=""
                
        }
        if (desc.value == "") {
            document.querySelector("#errorDesc").innerHTML="Chưa nhập mô tả sản phẩm"
                
        }
        if (desc.value !== "") {
            document.querySelector("#errorDesc").innerHTML=""
                
        }
        if (fileInp.value == "") {
            document.querySelector("#errorImg").innerHTML="Chưa chọn ảnh cho sản phẩm"
        }
        if (fileInp.value !== "") {
            document.querySelector("#errorImg").innerHTML=""
        }
        console.log("Not hahaha");
        return false
    }
    else{
        console.log("hahaha");
        return true
    }

}