<body class="">

  <!-- Product Hot -->
  <div class="mx-auto max-w-screen-xl">
    <div class="flex justify-around items-center mb-7 mt-4">
      <h2 class="text-xl tracking-widest text-gray-900 pb-2 underline underline-offset-8 decoration-2 decoration-purple-900 grow">
        SẢN PHẨM BÁN CHẠY</h2>
      <div class="space-x-3">
        <button class="bg-purple-900 text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-purple-900 text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-purple-900 text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-purple-900 text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
      </div>
    </div>
    <div class="grid mx-auto text-center grid-cols-4 gap-4 ">
      <?php foreach ($products as $key => $item) : ?>

        <div class="group">
          <a href="./index.php?act=product_info&id=<?php echo $item["productId"] ?>">
            <img src="../../image/<?php echo $item["productImage"] ?>" class="mb-10 group-hover:scale-105 duration-500" alt="">
            <div class="overflow-hidden relative flex flex-col justify-between">
              <div>
                <p class="font-semibold"><?php echo $item['productName'] ?></p>
              </div>
              <div class="flex flex-col items-center">
                <div>
                  <p class="font-thin text-sm line-through my-1">
                  <div class="flex justify-center">
                    <p class="text-xl line-through"> <?php echo substr($item["productPrice"], 0, -6)   ?>
                    <p class="text-xl line-through">.<?php echo substr($item["productPrice"], -6, 3)   ?>
                    <p class="text-xl line-through">.<?php echo substr($item["productPrice"], -3, 3)   ?>
                    <p class="underline">đ</p>
                  </div>
                  </p>
                </div>
                <div class="flex pb-10 text-xl items-end">
                  <div class="flex">
                    <p class="text-xl font-bold text-purple-800 mr-2 flex items-end"> Giá KM </p>
                    <p class="text-2xl font-bold text-purple-800"> <?php echo substr($item["productPrice"], 0, -6)   ?>
                    <p class="text-2xl font-bold text-purple-800">.<?php echo substr($item["productPrice"], -6, 3)   ?>
                    <p class="text-2xl font-bold text-purple-800">.<?php echo substr($item["productPrice"], -3, 3)   ?>
                    <p class="underline font-bold text-purple-800">đ</p>
                  </div>
                </div>
                <a href="" class="bg-purple-800 text-white mt-2 p-2 px-3 w-52 left-12 rounded-3xl transform group-hover:bottom-0 group-hover:left-12 duration-500 absolute -bottom-16">THÊM
                  VÀO GIỎ HÀNG</a>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <!-- Product Hot End -->
  <!-- See more -->
  <a href="" class="flex relative mx-auto w-[358px] container text-center my-4">
    <span class="border rounded-3xl px-6 py-2">XEM THÊM SẢN PHẨM ĐỒNG HỒ ĐEO TAY
    </span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute right-0 text-purple-900 top-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
    </svg>
  </a>
  <!-- See more  end-->

  <!-- Why choose us -->
  <div class="bg-gray-100">
    <div class="text-center">
      <h2 class="text-xl tracking-widest text-gray-900 pt-6 underline underline-offset-8 decoration-2 decoration-purple-900 grow my-8">VÌ SAO CHỌN CHÚNG TÔI</h2>
    </div>
    <div class="grid grid-cols-4 container gap-6 mx-auto pb-6 font-bold text-xl tracking-wide">
      <div class="flex items-center justify-evenly">
        <img src="../../image/icon1.png" alt="">
        <span>100% SẢN PHẨM <br> CHÍNH HÃNG</span>
      </div>
      <div class="flex items-center">
        <img src="../../image/icon2.png" alt="">
        <span>MIỄN PHÍ <br>VẬN CHUYỂN</span>
      </div>
      <div class="flex items-center">
        <img src="../../image/icon3.png" alt="">
        <span>THAY PIN MIỄN PHÍ<br>TRỌN ĐỜI</span>
      </div>
      <div class="flex items-center">
        <img src="../../image/icon4.png" alt="">
        <span>HỖ TRỢ TRẢ GÓP<br> TRẢ GÓP 0%</span>
      </div>
    </div>
  </div>
  <!-- Why choose us  end-->
  <div id="bodylast" class="min-h-[100vh] absolute inset-y-0">
  </div>
  <!-- Cart -->
  <div id="shoppingcart" class="fixed block top-0 r-0 w-[500px] min-h-[100vh] absolute inset-y-0 right-[100%] bg-white">
    <div class="w-[500px] justify-items-end">
      <div class="w-[500px] mx-auto h-10 border-b-2 flex">
        <div class="mx-auto w-[90px] text-center border-b-4 border-[#662d91] text-xl font-semibold">Giỏ hàng</div>
        <button id="closeCart">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </button>
      </div>
      <div class="w-[500px] mx-auto grid place-items-end">
        <div class="min-h-[695px]">
          <a href="#">
            <div class="grid grid-cols-4 justify-items-end gap-3 border-b-2 p-1 m-2">
              <div class="col-span-1">
                <img src="https://galle.vn/media/catalog/product/cache/4eb977b9e79759bad481a70e526f1a23/r/e/re-av0006y-01_1546484306.png" alt="">
              </div>
              <div class="col-span-2">
                <h1 class="font-semibold">ĐỒNG HỒ NAM ORIENT STAR RE-AV0006Y00B</h1>
                <div class="my-5 flex">
                  Số lượng:
                  <div class="grid grid-cols-3 rounded-full border w-1/2 flex justify-items-center mx-5">
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                      </svg>
                    </button>
                    1
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="">20.638.000 ₫</div>
              </div>
              <div class="">
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                </button>
              </div>
            </div>
          </a>
        </div>
        <div class="bg-gray-100 w-full">
          <div class="flex justify-between px-10 py-5">
            <div class="font-semibold">Tổng tiền hàng</div>
            <div class="font-semibold">61.914.000 ₫</div>
          </div>
          <div class="px-10 py-5">
            <button class="bg-[#662d91] hover:bg-[#662d99] text-white font-semibold w-full rounded-full py-2 my-1">Mua ngay</button>
            <button class=" text-[#662d91] border border-[#662d91] font-semibold w-full rounded-full py-2">Tiếp tục mua sắm</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Cart -->
  <script>
    const btnCart = document.querySelector("#btnCart")
    const btnClose = document.querySelector("#closeCart")
    const shoppingCart = document.querySelector("#shoppingcart")

    console.log(shoppingCart.className);
    btnCart.addEventListener('click', function() {
      console.log("hehe");
      const openCart = shoppingCart.classList
      openCart.remove("right-[100%]")
      openCart.add("right-36")
      openCart.add("transition")
      document.querySelector("#bodylast").classList.add("bg-gray-600")
      document.querySelector("#bodylast").classList.add("w-[1400px]")
      document.querySelector("#bodylast").classList.add("opacity-25")
      document.querySelector("body").classList.add("overflow-hidden")
    })
    btnClose.addEventListener('click', function() {
      const closeCart = shoppingCart.classList
      closeCart.add("right-[100%]")
      closeCart.remove("right-36")
      document.querySelector("#bodylast").classList.remove("bg-gray-600")
      document.querySelector("#bodylast").classList.remove("w-[1400px]")
      document.querySelector("body").classList.remove("overflow-hidden")
    })
    document.querySelector("#bodylast").addEventListener('click', function() {
      console.log("hahahah");
      const closeCart = shoppingCart.classList
      closeCart.add("right-[100%]")
      closeCart.remove("right-36")
      document.querySelector("#bodylast").classList.remove("bg-gray-600")
      document.querySelector("#bodylast").classList.remove("w-[1400px]")
      document.querySelector("body").classList.remove("overflow-hidden")

    })
  </script>
</body>