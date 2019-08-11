$(document).ready(function() {
    
    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });
});

$('.container').on('click', function () {
    $('.card1').toggleClass('flipped');
  });


(function () {
    var options = {
        whatsapp: "+ (651) 443-6926", // WhatsApp number
        email: "contact@mmpaintingmn.com", // Email
        call_to_action: "¡Contact us!", // Call to action
        button_color: "#E74339", // Color of button
        position: "right", // Position may be 'right' or 'left'
        order: "whatsapp,email", // Order of buttons
    };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();

