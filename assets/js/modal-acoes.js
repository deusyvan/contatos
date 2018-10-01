//Calendario de data para form Modal Documento
$('#dataDoc').datepicker({
	autoclose: true, //fecha o calendário ao selecionar a data
	language: 'pt-BR'
});
 
//Máscara para formatação da data
$("#dataDoc").mask("99/99/9999",{placeholder:" "}); //deveria criar uma mascara, mas está impedindo a digitação. Deixei pois impede que o usuario exclua a data


//Chamada da função no modal para select2-modal      
//    $('.select2').select2();
