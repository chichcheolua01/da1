function choose_delivery_place(obj) {
  var delivery_place = document.getElementById("delivery_place");
  var transpot = document.getElementById("transpot");
  if (obj.value == "Nhận tại cửa hàng") {
    delivery_place.value = "Nhận tại cửa hàng";
  } else if ((obj.value = "Giao hàng tận nơi")) {
    delivery_place.value = "Giao hàng tận nơi";
  }
}
