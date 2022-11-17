const btnCart = document.querySelector("#btnCart");
const btnClose = document.querySelector("#closeCart");
const shoppingCart = document.querySelector("#shoppingcart");

console.log(shoppingCart.className);
btnCart.addEventListener("click", function () {
  console.log("hehe");
  const openCart = shoppingCart.classList;
  openCart.remove("right-[100%]");
  openCart.add("right-24");
  openCart.add("transition");
  document.querySelector("#bodylast").classList.add("bg-gray-600");
  document.querySelector("#bodylast").classList.add("w-[1400px]");
  document.querySelector("#bodylast").classList.add("opacity-25");
  document.querySelector("body").classList.add("overflow-hidden");
});
btnClose.addEventListener("click", function () {
  const closeCart = shoppingCart.classList;
  closeCart.add("right-[100%]");
  closeCart.remove("right-24");
  document.querySelector("#bodylast").classList.remove("bg-gray-600");
  document.querySelector("#bodylast").classList.remove("w-[1400px]");
  document.querySelector("body").classList.remove("overflow-hidden");
});
document.querySelector("#bodylast").addEventListener("click", function () {
  console.log("hahahah");
  const closeCart = shoppingCart.classList;
  closeCart.add("right-[100%]");
  closeCart.remove("right-24");
  document.querySelector("#bodylast").classList.remove("bg-gray-600");
  document.querySelector("#bodylast").classList.remove("w-[1400px]");
  document.querySelector("body").classList.remove("overflow-hidden");
});
