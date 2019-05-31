$(document).ready(function() {

   var browserWidth = $(window).width();

   if (page != 'medicos') {

       if (browserWidth < 768){

           $('.equipe-item').hide();
           $('#equipe-item-01').show();

       }

   }

   else
       $('.equipe-item').show();

    $(window).resize(function() {

        var browserWidth = $(window).width();

        if (page != 'medicos') {

            if (browserWidth < 768) {

                $('.equipe-item').hide();
                $('#equipe-item-01').show();

            }

            else
                $('.equipe-item').show();

        }

    });

    $('.carddio-exame-page-button').on('click', function() {

        $('.carddio-exame-page-button').hide();
        $('.page-exames-info').show();

    });

    $('.exame-close').on('click', function() {

        $('.page-exames-info').hide();
        $('.carddio-exame-page-button').show();

    });

    $('.botao-topo').on('click', function() {

        $("html, body").animate({ scrollTop: 0 }, "slow");

    });

});