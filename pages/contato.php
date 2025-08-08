<section id="contato" class="py-5">
    <div class="container bg-light p-4 rounded shadow py-5 mt-3">
        <div class="text-center bg-dark text-white py-2 mb-4 rounded">
            <h2>Fale Conosco</h2>
        </div>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="unidade" class="form-label">Unidade</label>
                <select name="unidade" id="unidade" class="form-select">
                    <option value="" disabled selected>Selecione</option>
                    <option value="Pinda">Pinda</option>
                    <option value="Taubaté">Taubaté</option> 
                    <option value="Campos do Jordão">Campos do Jordão</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="name" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Celular</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="">
            </div>
            <div class="col-md-12">
                <label for="assunto" class="form-label">Assunto</label>
                <select name="assunto" id="assunto" class="form-select">
                    <option value="" disabled selected>Selecione</option>
                    <option value="Duvida">Dúvida</option>
                    <option value="Reclamação">Reclamação</option>
                    <option value="Orçamento">Orçamento</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="message" rows="3" placeholder=""></textarea>
            </div>
            <div class="col-12 text-center">
            <label for="politica">
                <input type="checkbox" id="politica" name="politica" required> Concordo com a <a href="<?php echo $url ?>politica-de-privacidade" target="_new" data-bs-toggle="modal" data-bs-target="#exampleModal">Política de Privacidade</a>
            </label>
                <button type="submit" class="btn btn-dark px-4 w-100">Enviar</button>
            </div>
        </form>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h1>TERMO DE CIÊNCIA PARA O RECEBIMENTO DE DADOS PARA CONTATO</h1>

<p>
    Em cumprimento às determinações expressas pela Lei Geral de Proteção de Dados Pessoais (LGPD), o Grupo SECURITY MASTER 
    (AR ANTUNES Sistemas Ltda, A.S. SECURITY ELETRONIC Comércio de Equipamentos de Segurança Eletrônica Ltda, 
    A.S. ZELADORIA e Comércio de Equipamentos de Segurança Eletrônica Ltda, SECURITY FORCE Segurança Ltda, 
    SECURITY MASTER Serviços de Zeladoria Patrimonial Especializada Ltda, RA ANTUNES Sistemas Ltda) informa sobre a realização 
    do tratamento dos dados pessoais enviados através de nossa página na internet.
</p>

<h2>1. Dados Pessoais Tratados:</h2>
<p>
    A organização realizará o tratamento dos seguintes dados pessoais: nome, telefone e e-mail.
</p>

<h2>2. Finalidades do Tratamento dos Dados:</h2>
<p>
    O tratamento dos dados pessoais listados no item anterior será feito com as seguintes finalidades:
</p>
<ul>
    <li>Primeiro Contato</li>
    <li>Cadastro no Sistema</li>
    <li>Proposta</li>
    <li>Envio de Proposta</li>
    <li>Contato Pós</li>
</ul>

<h2>3. Compartilhamentos:</h2>
<p>
    A organização compartilhará os dados pessoais do possível cliente com os departamentos da organização, pois é necessário 
    para atendimento das finalidades listadas no item anterior.
</p>

<h2>4. Confidencialidade:</h2>
<p>
    O Grupo SECURITY MASTER compromete-se a manter a confidencialidade das informações enviadas no currículo e utilizá-las 
    exclusivamente para a avaliação do perfil do candidato em processos seletivos.
</p>

<h2>5. Segurança dos Dados:</h2>
<p>
    A organização compromete-se a realizar as mais diversas medidas de segurança, técnicas e administrativas, como instruir 
    seus colaboradores a não compartilharem as informações pessoais dos possíveis clientes com terceiros não autorizados e 
    apenas os colaboradores envolvidos nos processos comerciais, a fim de que seus dados pessoais estejam sempre protegidos 
    e livres de acessos indesejados e incidentes, como: destruição, perda, alteração, compartilhamento ou qualquer forma 
    de tratamento inadequado ou ilícito.
</p>

<h2>6. Armazenamento:</h2>
<p>
    A organização informa que, com o objetivo de contato para possíveis negócios, irá armazenar os dados fornecidos pelo 
    possível cliente em nosso banco de dados, pelo período de 6 (seis) meses. Após esse período, os dados coletados de 
    maneira digital (via e-mail), serão deletados do nosso banco de dados.
</p>

<h2>7. Direitos dos Titulares:</h2>
<p>
    Caso o titular queira exercer quaisquer de seus direitos previstos pela LGPD, basta acessar o Selo 
    “Canal de Comunicação LGPD” em nosso site/em nosso e-mail/em nossas redes sociais/em nossa versão QR Code/ 
    em nosso cartão de visita e preencher o “Formulário de Atendimento ao Titular de Dados”.
</p>

<h2>8. Consentimento:</h2>
<p>
    Ao fornecer meus dados, estou consentindo livremente, de forma explícita e informada, com o tratamento dos mesmos, 
    conforme as condições descritas neste documento.
</p>

<p>
    Ao encaminhar meus dados para o e-mail <strong>[informar e-mail de recebimento]</strong> para contato e eventual processo 
    de aquisição de produtos ou serviços da A.R. Antunes Sistemas Ltda - ME, declaro que li, compreendi e concordo 
    com os termos acima estabelecidos.
</p>
      </div>
    </div>
  </div>
</div>



<script>
    $(document).ready(function() {
        // Desativa o botão no início
        $('button[type="submit"]').prop('disabled', true);

        // Verifica o estado do checkbox e ativa/desativa o botão
        $('#politica').change(function() {
            if ($(this).is(':checked')) {
                $('button[type="submit"]').prop('disabled', false);
            } else {
                $('button[type="submit"]').prop('disabled', true);
            }
        });
    });
</script>
