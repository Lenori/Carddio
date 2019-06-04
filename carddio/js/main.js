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

    $('.header-menu-wrapper').hover(function () {

        $('#menu-'+ $(this).attr('data-menu') +'').show();

    },

    function() {

        $('#menu-'+ $(this).attr('data-menu') +'').hide();

    });

    $('.header-sub-menu').hover(function() {

        $(this).show();

    });

    $('.header-menu-toggle').on('click', function() {

        $('.header-menu').show();

    });

    $('.header-menu-close').on('click', function() {

        $('.header-menu').hide();

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

    $('.carddio-open-chat').on('click', function() {

        $('.chaport-launcher-button').click();

    });

});