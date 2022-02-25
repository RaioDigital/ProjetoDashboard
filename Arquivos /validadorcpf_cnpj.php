
<?php //TRILHA
    $('#rd-text_field-kzx27hed').mask('999.999.999-99'); //CPF 
    $('#rd-text_field-kzx27hed').mask('99.999.999/9999-99'); //CNPJ

    $('#rd-text_field-kzx27hed').focusout(function(){ //Alterar id do CPF para validar campos
        if(!$('#rd-text_field-kzx27hed').val() == "") {
            if(!validaCPF($('#rd-text_field-kzx27hed').val())) {
                alert('CPF Inválido.');
                $('#rd-text_field-kzx27hed').val('');
            }
        }
      
    });
    
    $('#rd-text_field-kzx27hed').focusout(function(){ //Alterar id do CNPJ para validar campos
        
        if(!$('#rd-text_field-kzx27hed').val() == "") {
            if(!validaCNPJ($('#rrd-text_field-kzx27hed').val())) {
                alert('CNPJ Inválido.');
                $('#rd-text_field-kzx27hed').val('');
            }
        }
      
    });

// rd-text_field-kzx27hed --- CPF
// rd-text_field-kzx27hed --- CNPJ

    ?>  

<?php //INSTAGRAN
    $('#rd-text_field-v-tlDULHNAhGIG96rni7iQ').mask('999.999.999-99'); //CPF 
    $('#rd-text_field-kzx27hed').mask('99.999.999/9999-99'); //CNPJ

    $('#rd-text_field-v-tlDULHNAhGIG96rni7iQ').focusout(function(){ //Alterar id do CPF para validar campos
        if(!$('#rd-text_field-v-tlDULHNAhGIG96rni7iQ').val() == "") {
            if(!validaCPF($('#rd-text_field-v-tlDULHNAhGIG96rni7iQ').val())) {
                alert('CPF Inválido.');
                $('#rd-text_field-v-tlDULHNAhGIG96rni7iQ').val('');
            }
        }
    });
    
    $('#rd-text_field-CxMHYwIEbVLOXmvgatNZZA').focusout(function(){ //Alterar id do CNPJ para validar campos
        
        if(!$('#rd-text_field-CxMHYwIEbVLOXmvgatNZZA').val() == "") {
            if(!validaCNPJ($('#rd-text_field-CxMHYwIEbVLOXmvgatNZZA').val())) {
                alert('CNPJ Inválido.');
                $('#rd-text_field-CxMHYwIEbVLOXmvgatNZZA').val('');
            }
        }
    });

// rd-text_field-v-tlDULHNAhGIG96rni7iQ --- CPF
// rd-text_field-CxMHYwIEbVLOXmvgatNZZA --- CNPJ

    ?> 

<?php //WHATSAPP BUSSINES
    $('#rd-text_field-l0023mfz').mask('999.999.999-99'); //CPF 
    $('#rd-text_field-l0023mg1').mask('99.999.999/9999-99'); //CNPJ

    $('#rd-text_field-l0023mfz').focusout(function(){ //Alterar id do CPF para validar campos
        if(!$('#rd-text_field-l0023mfz').val() == "") {
            if(!validaCPF($('#rd-text_field-l0023mfz').val())) {
                alert('CPF Inválido.');
                $('#rd-text_field-l0023mfz').val('');
            }
        }
    });
    
    $('#rd-text_field-l0023mg1').focusout(function(){ //Alterar id do CNPJ para validar campos
        
        if(!$('#rd-text_field-l0023mg1').val() == "") {
            if(!validaCNPJ($('#rd-text_field-l0023mg1').val())) {
                alert('CNPJ Inválido.');
                $('#rd-text_field-l0023mg1').val('');
            }
        }
    });

// rd-text_field-l0023mfz --- CPF
// rd-text_field-l0023mg1 --- CNPJ

    ?> 
