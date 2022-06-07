<?php 
    if (isset($_POST['submit'])) 
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $datanasc = $_POST['datanasc'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $reside_jn = $_POST['reside_jn'];
        $homeoffice = $_POST['homeoffice'];
        $meio_periodo = $_POST['meio_periodo'];
        $possui_comp = $_POST['possui_comp'];
        $possui_smartphone = $_POST['possui_smartphone'];
        $possui_experiencia = $_POST['possui_experiencia'];
        $area = $_POST['area'];
        $wordpress = $_POST['wordpress'];
        $elementor = $_POST['elementor'];
        $nocode_lowcode = $_POST['nocode_lowcode'];
        $nivel_profissional = $_POST['nivel_profissional'];
        $experiencia = $_POST['experiencia'];
        $freelancer = $_POST['freelancer'];
        $exame = $_POST['exame'];
        $ingles = $_POST['ingles'];
        $modelo_contrato = $_POST['modelo_contrato'];
        $possui_empresa_aberta = $_POST['possui_empresa_aberta'];

        $result = mysqli_query($conexao , "INSERT INTO concorrentes (nome, email, datanasc, telefone, cidade, reside_jn, homeoffice, meio_periodo, possui_comp, possui_smartphone, possui_experiencia, area, wordpress, elementor, nocode_lowcode, nivel_profissional, experiencia, freelancer, exame, ingles, modelo_contrato, possui_empresa_aberta)
        VALUES ('$nome', '$email', '$datanasc', '$telefone', '$cidade', '$reside_jn', '$homeoffice', '$meio_periodo', '$possui_comp', '$possui_smartphone', '$possui_experiencia', '$area', '$wordpress', '$elementor', '$nocode_lowcode', '$nivel_profissional', '$experiencia', '$freelancer', '$exame', '$ingles', '$modelo_contrato', '$possui_empresa_aberta')");
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <title> - Formulário</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Formulário</h2>
      </div>

      <form  action="index.php" method="POST" id="form" class="form">
        <div class="form-control">
          <label for="nome">Qual é o seu <b>NOME?</b></label>
          <input
            name="nome"
            type="text"
            id="nome"
            placeholder="Digite seu nome completo..."
            required
          />
        </div>

        <div class="form-control">
          <label for="email">Qual é o seu <b>Email</b>?</label>
          <input type="email" 
          name="email"
          id="email" 
          placeholder="Digite seu email.."
          required
         />
        </div>

        <div class="form-control">
          <label for="datanasc">Qual é a sua <b>DATA DE NASCIMENTO</b>?</label>
          <input
            name="datanasc"
            type="date"
            id="datanasc"
            required
          />
        </div>

        <div class="form-control">
          <label for="telefone">Qual é o seu número de <b>CELULAR</b>?</label>
          <p class="radio">Nosso primeiro contato sempre será por <b>voz</b>, caso contrário, enviamos<br>
                   um e-mail, uma mensagem por <b>SMS</b> ou <b>WhatsApp</b>.</p>
          <input
            name="telefone"
            type="text"
            id="telefone"
            placeholder="(88) 88888-8888"
            required
          />
        </div>

        <div class="form-control">
          <label for="cidade">Qual <b>CIDADE</b> você mora?</label>
          <input
            name="cidade"
            type="text"
            id="cidade"
            placeholder="Digite a cidade em que você mora..."
            required
          />
        </div>

        <div class="form">
        <p>Você tem fácil acesso para trabalhar em <b>JUAZEIRO DO NORTE - CE</b>?</p>
        <p class="radio">Nosso escritório fica próximo ao Cariri Garden Shopping.</p>
                <input type="radio" id="reside_jn_sim" name="reside_jn" value="Sim, sou de Juazeiro do Norte" required>
                <label for="reside_jn_sim">Sim</label>
                <br>
                <input type="radio" id="reside_jn_nao" name="reside_jn" value="Não sou de Juazeiro do Norte" required>
                <label for="reside_jn_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você aceita trabalhar no <b>MODELO HÍBRIDO</b> (home office / escritório)?</p><p class="radio"></p>
                <input type="radio" id="homeoffice_sim" name="homeoffice" value="Sim, aceito trabalhar Híbrido" required>
                <label for="homeoffice_sim">Sim</label>
                <br>
                <input type="radio" id="homeoffice_nao" name="homeoffice" value="Não aceito trabalhar Híbrido" required>
                <label for="homeoffice_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você aceita trabalhar <b>MEIO PERÍODO</b>?</p><p class="radio"></p>
                <input type="radio" id="meio_periodo_sim" name="meio_periodo" value="Sim, aceito trabalhar meio periodo" required>
                <label for="meio_periodo_sim">Sim</label>
                <br>
                <input type="radio" id="meio_periodo_nao" name="meio_periodo" value="Não aceito trabalhar meio periodo" required>
                <label for="meio_periodo_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você possui <b>COMPUTADOR</b>?</p><p class="radio"></p>
                <input type="radio" id="possui_comp_sim" name="possui_comp" value="Sim, possuo computador" required>
                <label for="possui_comp_sim">Sim</label>
                <br>
                <input type="radio" id="possui_comp_nao" name="possui_comp" value="Não possuo computador" required>
                <label for="possui_comp_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você possui <b>SMARTPHONE</b>?</p><p class="radio"></p>
                <input type="radio" id="possui_smartphone_sim" name="possui_smartphone" value="Sim, possuo smartphone" required>
                <label for="possui_smartphone_sim">Sim</label>
                <br>
                <input type="radio" id="possui_smartphone_nao" name="possui_smartphone" value="Não possuo smartphone" required>
                <label for="possui_smartphone_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">você possui <b>EXPERIÊNCIA PROFISSIONAL</b>?</p><p class="radio"></p>
                <input type="radio" id="possui_experiencia_sim" name="possui_experiencia" value="Sim, possuo experiência" required>
                <label for="possui_experiencia_sim">Sim</label>
                <br>
                <input type="radio" id="possui_experiencia_nao" name="possui_experiencia" value="Não possuo experiência" required>
                <label for="possui_experiencia_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Qual <b>ÁREA</b> que deseja se candidatar?</p><p class="radio"></p>
                <input type="radio" id="produto_tecnologia" name="area" value="Produto & Tecnologia" required>
                <label for="produto_tecnologia">Produto & Tecnologia</label>
                <br>
                <input type="radio" id="marketing_vendas" name="area" value="Marketing & Vendas" required>
                <label for="marketing_vendas">Marketing & Vendas</label>
                <br>
                <input type="radio" id="pessoas_operacao" name="area" value="Pessoas & Operacao" required>
                <label for="pessoas_operacao">Pessoas & Operacao</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você conhece <b>WORDPRESS</b>?</p><p class="radio"></p>
                <input type="radio" id="wordpress_sim" name="wordpress" value="Sim, conheço WordPress" required>
                <label for="wordpress_sim">Sim</label>
                <br>
                <input type="radio" id="wordpress_nao" name="wordpress" value="Não conheço WordPress" required>
                <label for="wordpress_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você conhece <b>ELEMENTOR</b>?</p><p class="radio"></p>
                <input type="radio" id="elementor_sim" name="elementor" value="Sim, conheço o Elementor" required>
                <label for="elementor_sim">Sim</label>
                <br>
                <input type="radio" id="elementor_nao" name="elementor" value="Não, conheço o Elementor" required>
                <label for="elementor_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você conhece <b>NOCODE / LOWCODE</b>?</p><p class="radio"></p>
                <input type="radio" id="nocode_lowcode_sim" name="nocode_lowcode" value="Sim, conheço NOCODE / LOWCODE" required>
                <label for="nocode_lowcode_sim">Sim</label>
                <br>
                <input type="radio" id="nocode_lowcode_nao" name="nocode_lowcode" value="Não conheço NOCODE / LOWCODE" required>
                <label for="nanocode_lowcode_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p>Qual <b>NÍVEL PROFISSIONAL</b> você se considera?</p><p class="radio"></p>
                <input type="radio" id="aprendiz" name="nivel_profissional" value="Aprendiz" required>
                <label for="aprendiz">Aprendiz</label>
                <br>
                <input type="radio" id="junior" name="nivel_profissional" value="Junior" required>
                <label for="junior">Junior</label>
                <br>
                <input type="radio" id="plenio" name="nivel_profissional" value="Pleno" required>
                <label for="pleno">Pleno</label>
                <br>
                <input type="radio" id="senior" name="nivel_profissional" value="Senior" required>
                <label for="senior">Sênior</label>
                <br>
                <input type="radio" id="especialista" name="nivel_profissional" value="Especialista" required>
                <label for="especialista">Especialista</label>
                <br>
                <input type="radio" id="gestor" name="nivel_profissional" value="Gestor" required>
                <label for="gestor">Gestor</label>
                <br>
        </div>

        <div class="form">
        <p>Quanto tempo <b>trabalhou em uma empresa</b>?</p><p class="radio"></p>
                <input type="radio" id="nenhuma_experiencia" name="experiencia" value="Nenhuma experiencia em empresa" required>
                <label for="nenhuma_experiencia">Nenhuma expêriencia em empresa</label>
                <br>
                <input type="radio" id="menos_de_um_ans" name="experiencia" value="Menos de um ano" required>
                <label for="menos_de_um_ano">Menos de um ano</label>
                <br>
                <input type="radio" id="tres_anos" name="experiencia" value="Ate tres anos" required>
                <label for="tres_anos">Até três anos</label>
                <br>
                <input type="radio" id="cinco_anos" name="experiencia" value="Ate cinco anos" required>
                <label for="cinco_anos">Até cinco anos</label>
                <br>
                <input type="radio" id="dez_anos" name="experiencia" value="Ate dez anos" required>
                <label for="dez_anos">Até dez anos</label>
                <br>
                <input type="radio" id="vinte_anos" name="experiencia" value="Ate vinte anos" required>
                <label for="vinte_anos">Até vinte anos</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Já trabalhou como <b>freelancer</b>?</p><p class="radio"></p>
                <input type="radio" id="freelancer_sim" name="freelancer" value="Sim, já fui freelancer" required>
                <label for="freelancer_sim">Sim</label>
                <br>
                <input type="radio" id="freelancer_nao" name="freelancer" value="Não fui freelancer" required>
                <label for="freelancer_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você aceita realizar <b>EXAME</b>?</p>
        <p class="radio">Nosso processo seletivo possui algumas fases, em algum momento<br>
         faremos um exame prático de conhecimento técnico.</p>
                <input type="radio" id="exame_sim" name="exame" value="Sim, aceito fazer o exame" required>
                <label for="exame_sim">Sim</label>
                <br>
                <input type="radio" id="exame_nao" name="exame" value="Não aceito fazer o exame" required>
                <label for="exame_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Possui conhecimento de <b>INGLÊS</b>?</p><p class="radio"></p>
                <input type="radio" id="ingles_sim" name="ingles" value="Sim, possuo um conhecimento em inglês" required>
                <label for="ingles_sim">Sim</label>
                <br>
                <input type="radio" id="ingles_nao" name="ingles" value="Não possuo conhecimento em inglês" required>
                <label for="ingles_nao">Não</label>
                <br>
        </div>

        <div class="form">
        <p>Qual <b>MODELO DE CONTRATAÇÃO</b> você prefere ser contratado?</p><p class="radio"></p>
                <input type="radio" id="clt" name="modelo_contrato" value="CLT" required>
                <label for="clt">CLT</label>
                <br>
                <input type="radio" id="pj" name="modelo_contrato" value="PJ" required>
                <label for="pj">PJ</label>
                <br>
                <input type="radio" id="estagio" name="modelo_contrato" value="Contrato Estagio" required>
                <label for="estagio">Contrato Estágio</label>
                <br>
                <input type="radio" id="aprendiz" name="modelo_contrato" value="Contrato Aprendiz" required>
                <label for="aprendiz">Contrato Aprendiz</label>
                <br>
        </div>

        <div class="form">
        <p class="radio-space">Você possui <b>empresa aberta</b>?</p><p class="radio"></p>
                <input type="radio" id="p_empresa_sim" name="possui_empresa_aberta" value="Sim, possuo empresa aberta" required>
                <label for="p_empresa_sim">Sim</label>
                <br>
                <input type="radio" id="p_empresa_nao" name="possui_empresa_aberta" value="Não possuo empresa aberta" required>
                <label for="p_empresa_nao">Não</label>
                <br>
        </div>

        <button type="submit" name="submit" id="submit">Enviar</button>
      </form>
    </div>

  </body>
</html>