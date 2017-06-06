<?PHP
	Require('header.php');
	
	Require('conecta.php');
?>
<script language="javascript">
$(document).ready(function(){
	$("#txtTelefone").mask("(99) 9999-9999");
});
var erro = 0;
function validaSubmitContato(){
	erro = 0;
	
	//a validação está ocorrendo ao contrário por causa do foco dos campos
	validaCampoVazio('Mensagem');
	validaCampoVazio('Assunto');
	validaCampoVazio2('Telefone');
	validaEmail();
	validaCampoVazio('Nome');
	
	if(erro == 0){
		jQuery.ajax({
		type: 'POST',
		url: 'enviarContato.php',
		data: jQuery('form').serialize(),
		success: function(msg){
			if(msg == "Mensagem enviada com sucesso!<br />Aguarde uma resposta em seu e-mail."){
				document.getElementById('frmContato').reset();
			}
			document.getElementById('caixaMsgConteudo').innerHTML = msg;
			abrirMsg();
		}
		});
		return false;
	}else{
		return false;
	}
}
function validaCampoVazio(campo){
	var txtCampo = document.getElementById('txt' + campo);
	var erroCampo = document.getElementById('erroContato' + campo);
	if(txtCampo.value == ""){
		erroCampo.style.display = 'block';
		txtCampo.focus();
		erro++;
	}else{
		erroCampo.style.display = 'none';
	}
}
function validaCampoVazio2(campo){
	var txtCampo = document.getElementById('txt' + campo);
	var erroCampo = document.getElementById('erroContato' + campo);
	if(txtCampo.value == ""){
		erroCampo.style.display = 'block';
		//txtCampo.focus();
		erro++;
	}else{
		erroCampo.style.display = 'none';
	}
}
function validaEmail(){
	var txtEmail = document.getElementById('txtEmail');
	var erroContatoEmail = document.getElementById('erroContatoEmail');
	var erroContatoEmailIncorreto = document.getElementById('erroContatoEmailIncorreto');
	if(txtEmail.value == ""){
		erroContatoEmail.style.display = 'block';
		erroContatoEmailIncorreto.style.display = 'none';
		txtEmail.focus();
		erro++;
	}else{
		erroContatoEmail.style.display = 'none';
		if(txtEmail.value.length < 7 || txtEmail.value.indexOf("@") < 1 || txtEmail.value.indexOf(".",txtEmail.value.indexOf("@") + 2) == -1){
			erroContatoEmailIncorreto.style.display = 'block';
			txtEmail.focus();
			erro++;
		}else{
			erroContatoEmailIncorreto.style.display = 'none';
		}
	}
}
</script>
<style>
#txtMensagem{
	height:200px;
	width:400px;
}
</style>
<p class="titulo">Contato</p>
<form action="enviarContato.php" method="post" name="frmContato" id="frmContato" onSubmit="return validaSubmitContato()">
	<table>
	  <tr>
		<td class="tituloTblDireita" width="100">Nome:</td>
		<td>
			<input type="text" name="txtNome" id="txtNome" size="30" maxlength="100" />
			<div id="erroContatoNome" class="msgErro">o campo nome está em branco</div>
		</td>
	  </tr>
	  <tr>
		<td class="tituloTblDireita">E-mail:</td>
		<td>
			<input type="text" name="txtEmail" id="txtEmail" size="30" maxlength="100" />
			<div id="erroContatoEmail" class="msgErro">o campo email está em branco</div>
			<div id="erroContatoEmailIncorreto" class="msgErro">preencha um e-mail válido</div>
		</td>
	  </tr>
	  <tr>
		<td class="tituloTblDireita">Telefone:</td>
		<td>
			<input type="text" name="txtTelefone" id="txtTelefone" size="13" />
			<div id="erroContatoTelefone" class="msgErro">o campo telefone está em branco<br />preencha o telefone no formato: (11) 5555-5555</div>
		</td>
	  </tr>
	  <tr>
		<td class="tituloTblDireita">Assunto:</td>
		<td>
		<select name="txtAssunto" id="txtAssunto">
        	<?PHP
			$assunto = $_GET['assunto'];
			
			$sql = "SELECT * FROM assunto WHERE ocultar = 'nao' ORDER BY assunto";
			$selecao = mysql_query($sql);
			
			if($assunto == "prematricula" || $assunto == "transporte"){
				?><option value="">Assunto</option>
				<?PHP
					while($registro = mysql_fetch_assoc($selecao)){
						if(($assunto == "prematricula" && $registro['assunto'] == "Pré-Matrícula") || ($assunto == "transporte" && $registro['assunto'] == "Transporte")){
							$selecionado = " selected='selected'";
						}else{
							$selecionado = "";
						}
						?>
						<option value="<?PHP echo $registro['idAssunto']; ?>"<?PHP echo $selecionado; ?>><?PHP echo $registro['assunto']; ?></option>
						<?PHP
					}
				?><?PHP
			}else if($assunto == ""){
				?><option value="" selected="selected">Assunto</option>
				<?PHP
					while($registro = mysql_fetch_assoc($selecao)){
						?>
						<option value="<?PHP echo $registro['idAssunto']; ?>"><?PHP echo $registro['assunto']; ?></option>
						<?PHP
					}
				?><?PHP
			}
            ?>
		</select>
		<div id="erroContatoAssunto" class="msgErro">o campo assunto não está selecionado</div>
		</td>
	  </tr>
	  <tr>
		<td class="tituloTblDireita">Mensagem:</td>
		<td>
			<textarea name="txtMensagem" id="txtMensagem"></textarea>
			<div id="erroContatoMensagem" class="msgErro">o campo mensagem está em branco</div>
		</td>
	  </tr>
	  <tr>
		<td class="tituloTblDireita">&nbsp;</td>
		<td><input type="submit" name="btnSubmit" value="Enviar" /></td>
	  </tr>
	</table>
</form>
<?PHP
	Require('footer.php');
?>