$(document).ready(function() {
    $('form').submit(function(event) {
       event.preventDefault();
       var name = $("#name").val();
       var email = $("#mail").val();
       var mess = $("#mess").val(); 
       var sujet = $("#sujet").val();
       var send = $("#submit").val();
       $(".form-message").load('contact.php', {
           name: name,
           email: email,
           mess: mess,
           sujet: sujet,
           send: send
       });
    });

});