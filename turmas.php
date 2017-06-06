<?PHP
	Require('header.php');
?>
<script language="javascript">
$(document).ready(function(){
	$(".linkTurmas").click(function() {
		$(".conteudoTurmas").animate({height: 'hide'}, 2000);
		
		if ($(this).next().css("display") == "none") {
			$(this).next().stop().animate({height: 'show'}, 2000);
		}
	});
});
//$('#turmasConteudo div').corner();
</script>
<p class="titulo">Turmas</p>
<div id="turmasConteudo">
<div>
    <p id="turmasBercarioClique" class="linkTurmas">Berçário</p>
        <div id="turmasBercario" class="conteudoTurmas">
            <p>Para  crianças entre 4 meses e 1 ano de idade.</p>
            <p><em>Desenvolvimento  esperado:</em></p>
            <p><strong>4 meses</strong> <br>
            De bruços,  levanta a cabeça e ombros. Gosta de colocar as mãos e tudo o que pega na  boca. Seus brinquedos devem estar limpos. Coloque seu bebê em lugares  variados, mas atenção porque ele começa a rolar e pode cair.</p>
            <p><strong>6 meses</strong> <br>
            Vira, sem  errar para o lado do barulho. Seu bebê olha e pega tudo! Cuidado com coisas  pequenas, para ele não engasgar. Comece a introduzir papinhas na alimentação de  seu bebê. Coloque-o no chão para se movimentar melhor.</p>
            <p><strong>9 meses</strong> <br>
            Arrasta-se  ou engatinha. Brinque com seu bebê de fazer caretas, bater palminhas: mostre  alegria com o que ele for aprendendo. Converse com ele, ensine-lhe o nome das  coisas e pessoas. Nesta idade eles são muito curiosos; não deixe ao seu alcance  remédios, inseticidas, coisas perigosas.</p>
            <p><strong>1 ano</strong> <br>
            
            Fala duas  palavras. Ele brinca de bater, encaixar e empilhar objetos. Vai aprendendo as  partes do corpo.</p>
        </div>
</div>
<div>
	<p id="turmasMaternalClique" class="linkTurmas">Maternal</p>
        <div id="turmasMaternal" class="conteudoTurmas">
            <p>Para  crianças entre 1 ano e 2 anos de idade.</p>
            <p><em>Desenvolvimento  esperado:</em></p>
            <p><strong>1 ano e 6  meses</strong> <br>
            Anda  sozinho. Criança gosta de brincar com água. Ajude-a lavar as mãos e escovar os  dentes; deixe que use a colher e o copo. Comece aos poucos a tirar a fralda e  ensine-a a usar o peniquinho com paciência.</p>
            <p><strong>2 anos</strong> <br>
            Empilha  coisas. Gosta de brincar com coisas variadas e com outras crianças. Já tem  vontade própria, fala muito a palavra “não”. Sobe e mexe em tudo: cuidado com o  fogo e cabos de panelas.</p>
            <p><strong>2 anos e  6 meses</strong> <br>
            Fala frases  curtas. Gosta de cantar, batucar, imitar pessoas, animais, carros e brincar de  casinha. Ensine-o a dizer seu próprio nome e converse bastante com ele. Aprende  muito pela imitação: o exemplo dos adultos é muito importante.</p>
        </div>
</div>
<div>
    <p id="turmasJardimIClique" class="linkTurmas">Jardim I</p>
        <div id="turmasJardimI" class="conteudoTurmas">
            <p>Para  crianças entre 3 anos e 3 anos e 11 meses de idade.</p>
            <p><em>Desenvolvimento  esperado:</em></p>
            <p><strong>3 anos</strong> <br>
            Desenha  bolinhas. A criança precisa de outras crianças e de espaço para brincar, correr  e pular. Ajude-a a vestir-se e calçar os sapatos. Pode aprender a contar e  conhecer as cores. Gosta de rabiscar.</p>
		</div>
</div>
<div>
    <p id="turmasJardimIIClique" class="linkTurmas">Jardim II</p>
        <div id="turmasJardimII" class="conteudoTurmas">
        <p>Para  crianças entre 4 anos e 4 anos e 11 meses de idade.</p>
        <p><em>Desenvolvimento  esperado: </em></p>
        <p><strong>4 anos</strong> <br>
        Conta ou  inventa pequenas histórias; gosta também de ouvir histórias, aprender canções,  ver livros, e revistas. Ensine seu filho a ser organizado, a cuidar de si e do  lugar onde vive. Tem atração pelo fogo. Cuidado!</p>
    </div>
</div>
<div>
    <p id="turmasJardimIIIClique" class="linkTurmas">Jardim III</p>
        <div id="turmasJardimIII" class="conteudoTurmas">
            <p>Para  crianças entre 5 e 6 anos de idade.</p>
            <p><em>Desenvolvimento  esperado:</em></p>
            <p><strong>Entre 5 e  6 anos</strong> <br>
            Na  narrativa, consegue manter a organização temporal dos fatos, mesmo omitindo  alguns fatos secundários, mas que não prejudicam o entendimento da narrativa.  Não insere mais fatos não verdadeiros só para manter a história: se não lembra,  diz que não lembra.</p>
            <p><strong>Após 6 ou  7 anos</strong><br>
            Interessa-se  pelas horas do relógio (as atividades escolares contribuem significativamente  para esse interesse). Há estabilidade no uso de advérbios de tempo mais comuns  (ontem, /hoje/amanhã; manhã/tarde/noite; antes/depois). Corrige a si mesma  quando percebe que não é compreendida.</p>
        </div>
</div>
<div>
    <p id="turmasAtividadesClique" class="linkTurmas">Atividades</p>
        <div id="turmasAtividades" class="conteudoTurmas">
            <p>Selecionamos  atividades apropriadas a cada faixa etária buscando estimular a criatividade e  a socialização das crianças, proporcionando momentos de prazer e alegria.</p>
            <p><strong>Judô:</strong> melhora o preparo  psicológico, estimula o respeito ao próximo, aumenta a capacidade aeróbica e o  equilíbrio emocional, além da socialização.<br>
            <em>Para turmas de Jd. I,  II e III.</em></p>
            <p><strong>Informática: </strong>aprimora o raciocínio  e o senso crítico,<strong> </strong>aumenta a  criatividade e a assimilação de conceitos abstratos. A criança começa brincando  no computador, aprende a mexer o mouse, jogar e trabalhar com conceitos básicos  como cores, números e formas geométricas, reforçando a aprendizagem formal.<br>
            <em>Para turmas de Jd. I,  II e III.</em></p>
            <p><strong>Natação: </strong>além dos benefícios  físicos da natação, como aprimoramento das funções respiratórias, prevenção e  combate a alergias, a água é um meio propício<strong> </strong>para o desenvolvimento da imagem corporal, assim como para o  fortalecimento da autoconfiança.<br>
            <em>Para todas as turmas.</em></p>
            <p><strong>Ballet: </strong>a aula de dança é um  convite a vivenciar com prazer a arte do movimento. O movimento é usado como  fonte de relaxamento e expansão, proporcionando saúde física e mental, e uma  compreensão mais harmônica do corpo.<br>
            <em>Para turmas de Jd. I,  II e III.</em></p>
            <p><strong>Inglês</strong>: as aulas de inglês  buscam conexão com o mundo da criança através de músicas, histórias, brincadeiras  e situações da vida real. O objetivo é promover uma aprendizagem natural, a  familiarização com as palavras e expressões como também a pronúncia correta de  sons existentes na língua inglesa.<br>
            <em>Para turmas de Jd. I,  II e III.</em></p>
        </div>
</div>
</div>
<?PHP
	Require('footer.php');
?>