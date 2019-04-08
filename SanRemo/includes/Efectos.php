    <script>
      $(window).scroll(function() {
        if ($("#menu").offset().top > 56) {
            $("#menu").addClass("nav-Fcolores nav-sombra" );
            $(".quitartext").removeClass("textos iconidColor1");
            $(".quitartext").addClass("texto2 iconidColor2 " );
            $(".activo").addClass("activo2" );
             $(".activo").removeClass("activo1");

        } else {
            $("#menu").removeClass("nav-Fcolores nav-sombra");   
            $(".quitartext").addClass("textos iconidColor1" );   
            $(".quitartext").removeClass("texto2 iconidColor2 ");
         $(".activo").removeClass("activo2");
              $(".activo").addClass("activo1" );
        }

        if ($(".scrollear").offset().top > 56) {
            $(".posi1").animate({scrollTop:0},1000)

        } else {
            $("#menu").removeClass("nav-Fcolores nav-sombra");   
            $(".quitartext").addClass("textos iconidColor1" );   
            $(".quitartext").removeClass("texto2 iconidColor2 ");
         $(".activo").removeClass("activo2");
              $(".activo").addClass("activo1" );
        }




      });
         </script>