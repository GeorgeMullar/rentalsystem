// $(".cardblock").text("Activate your card");
document.querySelector(".cardblock .card-title").textContent = "Activate Your card";
document.querySelector(".cardblock .card-text").textContent = "You have blocked your card. You can unblock here";
document.querySelector(".cardblock").querySelector("#blockButton").setAttribute("value", "Activate");
document.querySelector(".cardblock").querySelector("#blockButton").classList.replace("btn-danger", "btn-success");
document.querySelector(".cardblock").querySelector("#blockButton").setAttribute("value", "Activate");