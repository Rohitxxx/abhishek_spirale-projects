      //     $(document).ready(function() {
      //       $(".menu-icon").on("click", function() {
      //             $("nav ul").toggleClass("showing");
      //       });
      // });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })

      // For Mobile navbar

      function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

    $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('myNav').addClass('black');
            }

            else {
                  $('myNav').removeClass('black');
            }
      })