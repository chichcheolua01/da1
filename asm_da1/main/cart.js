const btnCart = document.querySelector("#btnCart");
const btnClose = document.querySelector("#closeCart");
const shoppingCart = document.querySelector("#shoppingcart");




btnCart.addEventListener("click", function () {
  const openCart = shoppingCart.classList;
  openCart.remove("right-[100%]");
  openCart.add("right-0");
  openCart.add("transition");
  document.querySelector("#bodylast").classList.add("bg-gray-600");
  document.querySelector("#bodylast").classList.add("w-full");
  document.querySelector("#bodylast").classList.add("opacity-25");
  document.querySelector("body").classList.add("overflow-hidden");
});
btnClose.addEventListener("click", function () {
  const closeCart = shoppingCart.classList;
  closeCart.add("right-[100%]");
  closeCart.remove("right-0");
  document.querySelector("#bodylast").classList.remove("bg-gray-600");
  document.querySelector("#bodylast").classList.remove("w-full");
  document.querySelector("body").classList.remove("overflow-hidden");
});
document.querySelector("#bodylast").addEventListener("click", function () {
  console.log("hahahah");
  const closeCart = shoppingCart.classList;
  closeCart.add("right-[100%]");
  closeCart.remove("right-0");
  document.querySelector("#bodylast").classList.remove("bg-gray-600");
  document.querySelector("#bodylast").classList.remove("w-full");
  document.querySelector("body").classList.remove("overflow-hidden");
});
