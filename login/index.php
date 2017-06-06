<?PHP
	Require('header.php');
?>
<p class="titulo">Área Administrativa</p>
<?PHP
if($_SESSION['login'] == session_id() && $_SESSION['tipoUsuario'] == "funcionario"){
	?>
	<p>Você está logado !</p>
	<?PHP
}else{
	?>
	<script>
	var foco;
	function acaoDepoisMsg(){
		document.getElementById(foco).focus();
	}
	function validaSubmitLogin(){
		erro = 0;
		
		var caixaMsgConteudo = document.getElementById('caixaMsgConteudo');
		
		validaCampoVazio('Senha');
		validaCampoVazio('Usuario');
		
		if(erro == 0){
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
					window.location = 'index.php';
				}
			}
			});
			return false;
		}else{
			return false;
		}
	}
	function validaCampoVazio(campo){
		var txtCampo = document.getElementById('txt' + campo);
		var erroCampo = document.getElementById('lblErro' + campo);
		if(txtCampo.value == ""){
			erroCampo.style.display = 'block';
			txtCampo.focus();
			erro++;
		}else{
			erroCampo.style.display = 'none';
		}
	}
	</script>
	<form action="login.php" method="post" name="frmLogin" onsubmit="return validaSubmitLogin()">
	<table width="300" border="0">
	  <tr>
		<td width="100" align="right" valign="top">Usuário</td>
		<td>
        	<input type="text" name="txtUsuario" id="txtUsuario" />
            <div id="lblErroUsuario" class="msgErro">campo usuário em branco</div>
        </td>
	  </tr>
	  <tr>
		<td align="right" valign="top">Senha</td>
		<td>
        	<input type="password" name="txtSenha" id="txtSenha" />
            <div id="lblErroSenha" class="msgErro">campo senha em branco</div>
        </td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="btnSubmitLogin" id="btnSubmitLogin" value="Login" /></td>
	  </tr>
	</table>
	</form>
	<script>document.getElementById('txtUsuario').focus();</script>
	<?PHP
}
?>
<?PHP
	Require('footer.php');
?>