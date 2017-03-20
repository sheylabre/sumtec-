;(function ($) {
    function normalizeHeights () {
        var $columns = $('.col-same-height')
        $columns.map(function (i) {$columns[i].style.height=''});
        var heights = $columns.map(function (i) {return $($columns[i]).height()});
        var maxHeight = Math.max.apply(null, heights);
        $columns.map(function (i) {$columns[i].style.height=maxHeight + 'px'});
    }

    function triggerAnimation () {
        $('.product').removeClass('start');
    }

    $(document).ready(function () {
        normalizeHeights();
    })

    $(window).resize(function(event) {
        normalizeHeights();
    });

    $(window).on('load', function(event) {
        triggerAnimation();
    });
})(jQuery)


$(document).ready(function(){
    $("#form").validate({
        rules: {
            empresa:{
                required: true,
                number: false,
                minlength: 6
            },
            correo:{
                required: true,
                email: true,
                minlength:5
            },
            num:{
                required: true,
                number:true,
                minlength:9
            },
            ruc:{
                required:true,
                number:true,
                minlength:11
            }
        },
        messages: {
            empresa: {
                require:"Porfavor ingrese su Nombre y Apellido",
                number:"Debe requerir solo letras",
                minlength:"Debe ser más de 5 letras"
            },
            correo: {
                required:"Porfavor ingrese su correo electronico",
                email:"Porfavor incluya el @",
                minlength:"Debe escribir su correo completo"
            },
            num: {
                required:"Por favor ingrese su numero telefonico",
                number:"Debe ser solo numeros",
                minlength:"Porfavor ingrese los 9 digitos "
            },
            ruc: {
                required:"Por favor ingrese su numero de RUC",
                number:"Debe ser solo numeros",
                minlength:"Porfavor ingrese los 11 digitos "
            }
        },
        submitHandler: function(form){
            form.submit();
        }
    })

});

