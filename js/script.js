$(document).ready(function() {
    
    // Check for click events on the navbar burger icon
    // $(".navbar-burger").click(function() {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        // $(".navbar-burger").toggleClass("is-active");
        // $(".navbar-menu").toggleClass("is-active");
    // });

    $("#interior").click(function() {
        $(".modal-interior").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-interior").removeClass("is-active");
    });

    $("#exterior").click(function() {
        $(".modal-exterior").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-exterior").removeClass("is-active");
    });

    $("#commercial").click(function() {
        $(".modal-commercial").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-commercial").removeClass("is-active");
    });

    $("#residential").click(function() {
        $(".modal-residential").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-residential").removeClass("is-active");
    });

    $("#office").click(function() {
        $(".modal-office").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-office").removeClass("is-active");
    });

    $("#wallpaper").click(function() {
        $(".modal-wallpaper").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-wallpaper").removeClass("is-active");
    });

    $("#decks").click(function() {
        $(".modal-decks").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-decks").removeClass("is-active");
    });

    $("#fences").click(function() {
        $(".modal-fences").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-fences").removeClass("is-active");
    });

    $("#primers").click(function() {
        $(".modal-primers").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-primers").removeClass("is-active");
    });

    $("#drywalls").click(function() {
        $(".modal-drywalls").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-drywalls").removeClass("is-active");
    });

    $("#enamel").click(function() {
        $(".modal-enamel").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-enamel").removeClass("is-active");
    });

    $("#extras").click(function() {
        $(".modal-extras").addClass("is-active");  
      });
      
      $(".modal-close").click(function() {
         $(".modal-extras").removeClass("is-active");
    });
});

    (function () {
        var options = {
            facebook: "114918646542800", // Facebook page ID
            whatsapp: " +1 651 443-6926", // WhatsApp number
            call_to_action: "¡Contact us!", // Call to action
            button_color: "#E74339", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();

