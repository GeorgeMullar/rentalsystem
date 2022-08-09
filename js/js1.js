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
        // url: "https://rentalsystem.ml/arduinoConnect.php",
        url: "http://localhost:8080/projects/NewRental/arduinoconnect.php",
        data: dataString,
        success: function(res) {
            // console.log(res);
            // console.log(res)
            console.log(res.type);
            // const result = JSON.parse(res);
            // console.log(result[0]);
            if (res.type == "entry") {
                var result = "Welcome " + res.user;
                var balance = "Your Current Balance :" + res.balance;
                $('.balance').html(balance);
            } else if (res.type == "exit") {
                var result = "Visit Again";
                var balance = "Your Current Balance :" + res.balance;
                $('.balance').html(balance);
            } else {
                result = res;
            }
            // $('.display-txt').html("<div id='message'></div>");
            $('.display-txt').html(result);

        }
    });
    return false;
    e.preventDefault();
});