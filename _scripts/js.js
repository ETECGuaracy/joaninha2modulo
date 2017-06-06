// JavaScript Document
$('#conteudobordas').corner();
$('#bannerbordasuperior').corner("top");
$('#bannerbordainferior').corner("bottom");

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

var foco;
function acaoDepoisMsg(){
	document.getElementById(foco).focus();
}
function validaSubmitLogin(){
	var txtUsuario = document.getElementById('txtUsuario');
	var txtSenha = document.getElementById('txtSenha');
	var caixaMsgConteudo = document.getElementById('caixaMsgConteudo');
	
	if(txtUsuario.value == ""){
		caixaMsgConteudo.innerHTML = "Campo usuário em branco";
		abrirMsg();
		acaoDepoisMsgFechar = "sim";
		foco = "txtUsuario";
		return false;
	}else if(txtSenha.value == ""){
		caixaMsgConteudo.innerHTML = "Campo senha em branco";
		abrirMsg();
		acaoDepoisMsgFechar = "sim";
		foco = "txtSenha";
		return false;
	}else{
		jQuery.ajax({
		type: 'POST',
		url: 'login.php',
		data: jQuery('form').serialize(),
		success: function(msg){
			if(msg == 'Usuário e/ou Senha incorretos<br />Tente novamente'){
				caixaMsgConteudo.innerHTML = msg;
				abrirMsg();
				acaoDepoisMsgFechar = "sim";
				foco = "txtUsuario";
			}else{
				window.location = 'agendaOnline.php';
			}
		}
		});
		return false;
	}
}