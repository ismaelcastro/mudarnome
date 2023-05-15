
$(document).ready(function () {
    var input = $(".campos");
    var dica = $(".dica");
    var notification = $(".notification");
    function validarForm(campo) {

        if (campo.val().length <= 0) {
            msg = "Este campo deve ser preenchido";
        }

        else if (campo.attr("name") == "email") {
            var contentInputEmail = campo.attr("name", "email").val();

            if (contentInputEmail.indexOf("@") == -1 || contentInputEmail.indexOf(".com") == -1) {
                msg = "Email invalido";

            } else if (contentInputEmail.length > 0) {
                msg = null;
            }
        }

        else if (campo.attr("type") == "password") {
            if (campo.attr("name", "password").val().length < 8) {

                msg = "Este campo deve conter no minimo 8 caracteres";
            }

            else if (campo.attr("name", "password").val().length > 0) { msg = null; }
            if (campo.attr('name', 'confirmacao-senha').val() != $("#id_senha").val()) {
                msg = "Senhas não coferem"
            }
        }
        else {
            msg = null;
        };

        return msg;
    };
    //inicio da função que envia o formulario	
    $("input[type='submit']").click(function (e) {
        e.preventDefault();
        var erro = 0;
        $(".campos:visible").each(function () {
            //$(this).val().length <= 0 ? erro++ : "";//
            if ($(this).val().length <= 0) {
                erro++;

                $(this).siblings(".notification").css("display", "block");
            }
        });

        if (erro > 0) {

        } else {
            $(this).parent("form").submit();
        }
    });
    //fim da função que envia o formulario	
    //eventos que chama a função validarform

    input.on("focus", function () {
        $(this).siblings(".dica").css("display", "block");
        $(this).siblings(".notification").css("display", "none");
    });

    input.on("blur", function () {
        $(this).siblings(".dica").css("display", "none");
        validacao = validarForm($(this));
        //$(this).siblings(".notification").html(validacao);

        if (validacao == null) {
            $(this).siblings(".notification").css("display", "none");

        } else {
            $(this).siblings(".notification").css("display", "block");
        }
    });
})
