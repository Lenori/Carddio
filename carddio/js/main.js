var equipeSkip = 4;

$(document).ready(function() {

   var browserWidth = $(window).width();

   if (page != 'medicos') {

       if (browserWidth < 768)
            equipeSkip = 1;

       else
           equipeSkip = 4;
   }

    $('.header-menu-wrapper').hover(function () {

        $('#menu-'+ $(this).attr('data-menu') +'').show();

    },

    function() {

        $('#menu-'+ $(this).attr('data-menu') +'').hide();

    });

    $('.header-sub-menu').hover(function() {

        $(this).show();

    });

    $(window).on('click', function() {

        if ($('.header-sub-menu').is(':visible')) {

            $('.header-sub-menu').hide();

        }

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
        $('#exame-' + $(this).attr('data-exame') +'').show();

    });

    $('.exame-close').on('click', function() {

        $('.page-exames-info').hide();
        $('.exame-info').hide();
        $('.carddio-exame-page-button').show();

    });

    $('.botao-topo').on('click', function() {

        $("html, body").animate({ scrollTop: 0 }, "slow");

    });

    $('.carddio-open-chat').on('click', function() {

        $('.chaport-launcher-button').click();

    });

    $('.carddio-open-form').on('click', function() {

        $('.carddio-fale-com-buttons').hide();
        $('.carddio-ligacao').show();

    });

    var equipeCut = 0;
    var equipeItems = 0;

    $('.equipe-item').each(function() {

        if ($(this).attr('data-equipe-item') > equipeSkip) {

            $(this).hide();

        }

        equipeItems ++;

    });

    $('.equipe-arrow-left').hide();

    $('.equipe-arrow-right').on('click', function() {

        $('.equipe-arrow-left').show();

        equipeCut = equipeCut + equipeSkip;

        $('.equipe-item').each(function() {

            $(this).hide();

            if ($(this).attr('data-equipe-item') > equipeCut && $(this).attr('data-equipe-item') <= equipeCut + equipeSkip ) {

                $(this).show();

            }

        });

        if (equipeCut + equipeSkip >= equipeItems)
            $('.equipe-arrow-right').hide();

    });

    $('.equipe-arrow-left').on('click', function() {

        equipeCut = equipeCut - equipeSkip;

        $('.equipe-item').each(function() {

            $(this).hide();

            if ($(this).attr('data-equipe-item') > equipeCut && $(this).attr('data-equipe-item') <= equipeCut + equipeSkip ) {

                $(this).show();

            }

        });

        if (equipeCut + equipeSkip < equipeItems)
            $('.equipe-arrow-right').show();

        if (equipeCut == 0)
            $('.equipe-arrow-left').hide();

    });

});

function randomDepoimentos() {

    var depoimentos = 0;

    while (depoimentos != 2)
        depoimentos = showDepoimentos();

    setTimeout(randomDepoimentos, 5000);

}

function showDepoimentos () {

    $('.carddio-depoimento').hide();

    var random = 0;
    var depShown = 0;

    $('.carddio-depoimento').each(function() {

        if (depShown == 2)
            return false;

        random = Math.floor(Math.random() * 5);

        if (random == 1) {

            $(this).show();
            depShown++;

        }

    });

    return depShown;

}

