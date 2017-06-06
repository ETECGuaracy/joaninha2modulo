// JavaScript Document
$('#conteudobordas').corner();
$('#menubordasuperior').corner("top");
$('#menubordainferior').corner("bottom");

$('#caixaMsg').corner();
$('#btnCaixaMsgFechar').corner();

$(document).ready(function(){
	$('#btnCaixaMsgFecharTop').click(function(){
		fecharMsg();
	});
	$('#btnCaixaMsgFechar').click(function(){
		fecharMsg();
	});
	
	$('#fundoCaixaMsg').click(function(){fecharMsg();}); //fechar a msg quando clicar fora
	$(window).keydown(function(event){ //fechar a msg quando apertar esc
		if(event.keyCode==27)fecharMsg();
	});
});

var acaoDepoisMsgFechar;
function abrirMsg(){
	var altura = $('html')[0].scrollHeight < $(window).height() ? $(window).height() : $('html')[0].scrollHeight;
	$('#fundoCaixaMsg').width($('html')[0].scrollWidth).height(altura);
	
	$('#fundoCaixaMsg').fadeTo('slow', 0.5);
	$('#caixaMsg').fadeIn('slow');
}
function fecharMsg(){
	$('#fundoCaixaMsg').fadeOut('slow');
	$('#caixaMsg').fadeOut('slow');
	if(acaoDepoisMsgFechar == "sim"){
		acaoDepoisMsg();
		acaoDepoisMsgFechar = "nao";
	}
}