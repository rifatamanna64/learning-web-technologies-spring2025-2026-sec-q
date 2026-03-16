var price = 1000;

var quantity = document.getElementById("qty");
var total = document.getElementById("total");

quantity.addEventListener("input", function(){

    var q = quantity.value;

    if(q < 0){
        q = 0;
        quantity.value = 0;
    }

    var result = price * q;

    total.value = result;

    if(result > 1000){
        alert("You are eligible for gift coupon!");
    }

});