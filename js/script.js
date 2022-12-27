function enviarContacto() {

    var url1 = "mail.php";
    $.ajax({
        type: "POST",
        url: url1,
        data: $("#contact-form").serialize(),

        success: function(data) {

            if (data == '1') {
                $('#contact-form-result').addClass("alert alert-success");
                $('#contact-form-result').html("Envio Exitoso");

            } else {
                $('#contact-form-result').addClass("alert alert-danger");
                $('#contact-form-result').html("Error Complete todos los campos");
            }
        }
    });

};

//para quitar el mensaje de exito/error al enviar mensajes
$("#cerrarVentana").click(function() {
    $("#contact-form-result").html("");
    $("#contact-form-result").removeClass("alert alert-danger alert-success");
});

$(function() {
    "use strict";

    /*=========================================================================
    	Initializing stellar.js Plugin
    =========================================================================*/
    $('.section').stellar({
        horizontalScrolling: false
    });


    $(window).on('load', function() {

        $('body').addClass('loaded');


        /*=========================================================================
        	Portfolio Grid
        =========================================================================*/
        var grid = $('#portfolio-grid');
        grid.shuffle({
            itemSelector: '.item'
        });

        $('#portfolio-filters > ul > li > a').on('click', function(e) {
            e.preventDefault();
            var groupName = $(this).attr('data-group');
            $('#portfolio-filters > ul > li > a').removeClass('active');
            $(this).addClass('active');
            grid.shuffle('shuffle', groupName);
        });

        $('a.image-link').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true
            }
        });

    });



    /*=========================================================================
    	Links Navigation System
    =========================================================================*/
    $('.front-person-links > ul > li > a[data-section]').on('click', function(e) {
        e.preventDefault();
        var section = $('#' + $(this).data('section'));

        if (section.size() != 0) {

            $('body').addClass('section-show');

            section.addClass('active');

        }

    });
    $('.close-btn').on('click', function() {
        $('body').removeClass('section-show');
        $('section.active').removeClass('active');
    });



    /*=========================================================================
    	Testimonials Slider
    =========================================================================*/
    $('.testimonials-slider').owlCarousel({
        singleItem: true
    });



    /*=========================================================================
    	Skill Bar's Percent Initialization from attribute data-percent
    =========================================================================*/
    $('.skill-bar').each(function() {
        var $this = $(this),
            percent = parseInt($this.data('percent'), 10);

        $this.find('.bar').css('width', percent + '%');
    });




    /*=========================================================================
    	Contact Form
    =========================================================================*/
    function isJSON(val) {
        var str = val.replace(/\\./g, '@').replace(/"[^"\\\n\r]*"/g, '');
        return (/^[,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]*$/).test(str);
    }

});