
    
;(function($) {
    "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "escribe la respuesta correcta -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                name2: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                    minlength: 12
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Su nombre es requerido",
                    minlength: "Debe escribir mas de 2 caracteres"
                },
                name2: {
                    required: "Su nombre es requerido",
                    minlength: "Debe escribir mas de 2 caracteres"
                },
                email: {
                    required: "Sin email, no se puede enviar el mensaje"
                },
                subject: {
                    required: "Este campo es requerido"
                },
                message: {
                    required: "Debes escribirnos algo...",
                    minlength: "Eso es todo?? Dinos mas para enviar el mensaje"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"body/includes/contact_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                        })
                    }
                })
            }
        })
    })
        
})(jQuery)
