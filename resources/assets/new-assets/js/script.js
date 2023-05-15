const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
}

function show_qtd_step(){
    var qtd_step = $('.form_step fieldset').length;
    qtd_step = qtd_step < 10 ? '0'+qtd_step : qtd_step;
    var current_step = $('.form_step').attr('data-form-show');
    var show_value = current_step+'/'+qtd_step;
    $('.step_current_where').html(show_value);
    //console.log($('.form_step fieldset').length);
}

function change_uf(id_uf, id_city){
    $(id_uf).on('change',function () {
        $(id_city).empty();
        var estado = $(this).val();
        $.ajax({
            url: 'https://api-rc.registrocivil.org.br/api/cartorios/uf/'+estado+'/cidade',
            dataType: 'JSON',
            type: 'GET',
            success: function (response) {
                $(id_city).removeAttr("disabled");
                $.each(response.cidades, function (i, item) {
                    $(id_city).append($('<option>', {
                        value: `${item.cidade_id}_${item.nome}`,
                        text: item.nome
                    }))
                })
            }
        });
    });
}
function change_city(id_city, id_registry){
    $(id_city).on('change',function () {
        $(id_registry).empty();
        var cidade = $(this).val();
        let cidade_id = cidade.split("_");                
        $.ajax({
            url: 'https://api-rc.registrocivil.org.br/api/cartorios/cidade/'+cidade_id[0]+'/cartorio',
            dataType: 'JSON',
            type: 'GET',
            success: function (response) {
                $(id_registry).removeAttr("disabled");
                $.each(response.cartorios, function (i, item) {
                    $(id_registry).append($('<option>', {
                        value: item.nome,
                        text: item.nome
                    }))
                })
            }
        });
    });
}

$(document).ready(function () {
    show_qtd_step();

    change_uf('#register_uf', '#register_city');
    change_city('#register_city', '#birth_certificate_registry');
    change_uf('#marriage_certificate_uf', '#marriage_certificate_city');
    change_city('#marriage_certificate_city', '#marriage_certificate_office');

    $.cookie.json = true;
    var myModal = new bootstrap.Modal($("#modalCidades"), {});
    if ($.cookie('cidadeSelecionada')) {
        var cidade_data = $.cookie('cidadeSelecionada');
        $(".local").text(cidade_data.text);
    } else {
        myModal.show();
    }


    $('.step-button').on('click',function(){
        var current_fs = $(this).closest('fieldset');
        var current_step = current_fs.attr('data-form-step');
        var next_step = $(this).attr('data-form-step-to');
        var valid = true;
    
        //validação
        current_fs.find('input').removeClass('is-invalid');
        current_fs.find('select').removeClass('is-invalid');
        current_fs.find('label').removeClass('label-is-invalid');
        if (! $(this).hasClass("back")) { 

            current_fs.find('input').each(function(){
                if($(this).prop('required')){
                if($(this).val() == ''){
                    valid = false;
                    $(this).addClass('is-invalid');
                    $(this).parent().find('label').addClass('label-is-invalid');
                }
                }
                if($(this).attr('type') == 'email' && $(this).val() != ''){
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var valor_test = $(this).val();
                if (!filter.test(valor_test)) {
                    valid = false;
                    $(this).addClass('is-invalid');
                }
                }
            });

            current_fs.find('select').each(function(){
                if($(this).prop('required')){
                    if($(this).val() == ''){
                        valid = false;
                        $(this).addClass('is-invalid');
                        $(this).parent().find('label').addClass('label-is-invalid');
                    }
                }
            });
        }
    
        if(valid){
          $(this).closest('form').attr('data-form-show',next_step);
          show_qtd_step();
        }
        
      });

    var select2 = $('.select2').select2({
        dropdownParent: $("#modalCidades .modal-body .form-cidade"),
        ajax: {
            delay: 250,
            url: 'https://servicodados.ibge.gov.br/api/v1/localidades/municipios',
            processResults: function (data) {
                var cidades = [];
                for (var i in data) {
                    var id = data[i].id;
                    var cidade = data[i].nome;
                    var siglaUF = data[i].microrregiao.mesorregiao.UF.sigla;
                    cidades[i] = { id: id, text: cidade + ' - ' + siglaUF }
                }
                return {
                    results: cidades
                }
            }
        },
        closeOnSelect: false,
        allowClear: true,
        placeholder: "Qual a sua cidade?",
        SingleSelection: true,
        eventRelay: true,
        maximumSelectionLength: 1,
    }).on("select2:closing", function (e) {
        e.preventDefault();
    }).on('select2:closed', function (e) {
        e.preventDefault();
    }).on("select2:select", function (e) {
        var data = e.params.data;
        $.cookie('cidadeSelecionada', data);
        if ($.cookie('cidadeSelecionada')) {
            cidade_data = $.cookie('cidadeSelecionada');
            $(".local").text(cidade_data.text);
            myModal.hide();
            $('.select2').val(null).trigger("change")
        }

    });
    select2.select2('open');

})

