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
console.log("hahahahah");
const nameCate = document.querySelector("#nameCate")
const type = document.querySelector("#type")
function checkCate(){
    if (nameCate.value==""||type.value==""||fileInp=="") {
        if (nameCate.value == "") {
            document.querySelector("#errorName").innerHTML="Chưa nhập tên cho sản phẩm"
        }
        if (nameCate.value !== "") {
            document.querySelector("#errorName").innerHTML=""
        }
        if (type.value == "") {
            document.querySelector("#errorType").innerHTML="Chưa nhập giá cho sản phẩm"
              
        }
        if (type.value !== "") {
            document.querySelector("#errorType").innerHTML=""
              
        }
        if (fileInp.value == "") {
            document.querySelector("#errorImg").innerHTML="Chưa chọn ảnh cho sản phẩm"
        }
        if (fileInp.value !== "") {
            document.querySelector("#errorImg").innerHTML=""
        }
        console.log(" not");
        return false
    }
    else{
        console.log("hahaha");
        return true
    }

}

function confirm_delcate(id){
    if (confirm("Bạn có muốn xóa danh mục này ?")) {
        window.location.href="/da1/asm_da1/controller/delete_cate.php?categoryId="+id
    }
}