// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$("#rfid-form").on("submit", function(e) {
    var dataString = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "http://localhost:8080/projects/NewRental/arduinoConnect.php",
        data: dataString,
        success: function(res) {
            // console.log(res);
            // console.log(res)
            console.log(res.type);
            // const result = JSON.parse(res);
            // console.log(result[0]);
            if (res.type == "entry") {
                var result = "Welcome " + res.user;
            } else {
                var result = "Visit Again";
            }
            var balance = "Your Current Balance :" + res.balance;
            // $('.display-txt').html("<div id='message'></div>");
            $('.display-txt').html(result);
            $('.balance').html(balance);

        }
    });
    return false;
    e.preventDefault();
});