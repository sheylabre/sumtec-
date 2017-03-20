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

function enviarFormDetalles(){  
    var params = $('#form').serialize();

    $.ajax({
        type: 'POST',
        url: 'process.php',
        data: 'action=register&'+params,
        dataType: 'json',
        beforeSend: function(data) {},
        success: function(data) {
            if(data.rpta == "ok"){

                $("#form").hide();                
                $(".gracias").fadeIn("600");
                ppcconversion() ;

            }else{
                alert("Email ya registrado.")
            }
        },
        error: function(data) {}
    });

};


function ppcconversion()  {
    var  iframe = document.createElement('iframe');
    iframe.style.width = '0px';
    iframe.style.height = '0px';
    document.body.appendChild(iframe);
    iframe.src = '/conversion.php';

};



$(document).ready(function(){
    $("#form").validate({
        rules: {
            empresa:{
                required: true,
                number: false
               
            },
            ruc:{
                required:true,
                number:true,
                minlength:11
            },
            nombre:{
                required: true,
                number: false
            },
            apellido:{
                required: true,
                number: false
            },
            cargo:{
                required: true,
                number: false,
                minlength: 3
            },
            num:{
                required: true,
                number:true,
                minlength:9
            },
            correo:{
                required: true,
                email: true,
                minlength:5
            },
            check:{
                required: true,
            }
        },
        messages: {
            empresa: {
                require:"Por favor, ingrese el nombre de su empresa ",
                number:"Debe requerir solo letras",
                minlength:"Debe ser más de 5 letras"
            },
            ruc: {
                required:"Por favor, ingrese su numero de RUC",
                number:"Debe ser solo numeros",
                minlength:"Por favor, ingrese los 11 digitos "
            },
            nombre: {
                require:"Por favor, ingrese su Nombre ",
                number:"Debe requerir solo letras",
                minlength:"Debe ser más de 5 letras"
            },
            apellido: {
                require:"Por favor, ingrese su  Apellido",
                number:"Debe requerir solo letras",
                minlength:"Debe ser más de 5 letras"
            },
            cargo: {
                require:"Por favor, ingrese su  Cargo",
                number:"Debe requerir solo letras",
                minlength:"Debe ser más de 5 letras"
            },
            num: {
                required:"Por favor, ingrese su número telefonico",
                number:"Debe ser solo numeros",
                minlength:"Por favor, ingrese los 9 digitos "
            },
            correo: {
                required:"Por favor, ingrese su correo electronico",
                email:"Por favor incluya el @",
                minlength:"Debe escribir su correo completo"
            },
            check: {
                required:" Porfavor selecione",
            }
        },
        submitHandler: function(form){
            enviarFormDetalles();
                return false;
        }
    })

});

