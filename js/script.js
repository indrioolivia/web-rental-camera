// Function to handle the button click event
function add(productId) {
  var productName = document.getElementById("name-" + productId).innerText;
  var productPrice = document.getElementById("price-" + productId).innerText;

  $.ajax({
    url: "../order/add.php",
    type: "POST",
    data: {
      productName: productName,
      productPrice: productPrice,
    },
    success: function (response) {
      alert("Berhasil ditambahkan");
      location('reload');
    },
    error: function (error) {
      console.log("Error adding product to cart.", error);
    },
  });
}

function read() {
  //const modal = new bootstrap.Modal(document.getElementById('#myModal'));
  $.ajax({
    url: "../order/read.php",
    type: "POST",
    success: function (response) {
      $('#read').html(response);
    },
    error: function (error) {
      console.log("Error: ", error);
    },
  });
}