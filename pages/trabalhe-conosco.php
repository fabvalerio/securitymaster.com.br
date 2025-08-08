<header class="slider-int">
    <div class="content">
        <h1>Trabalhe Conosco</h1>
    </div>
</header>



<section class="py-5">
    <div class="container mt-5">


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $base = $_POST['base'];
            $mensagem = $_POST['mensagem'];
            $curriculo = $_FILES['curriculo'];

            // Definir os e-mails com base na escolha
            $emails = [
                "pinda" => "pinda.vagas@securitymaster.com.br",
                "taubate" => "taubate.vagas@securitymaster.com.br",
                "campos" => "campos.vagas@securitymaster.com.br"
            ];

            $para = $emails[$base];
            $assunto = "Novo Currículo - $nome";

            // Criar o corpo do e-mail
            $mensagem_email = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem: $mensagem";

            // Configurar cabeçalhos do e-mail
            $boundary = md5(time());
            $headers = "From: $email\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

            // Corpo do e-mail com anexo
            $mensagem_completa = "--$boundary\r\n";
            $mensagem_completa .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
            $mensagem_completa .= "$mensagem_email\r\n";

            if ($curriculo['error'] == 0) {
                $conteudo_arquivo = file_get_contents($curriculo['tmp_name']);
                $conteudo_arquivo = chunk_split(base64_encode($conteudo_arquivo));
                $nome_arquivo = $curriculo['name'];

                $mensagem_completa .= "--$boundary\r\n";
                $mensagem_completa .= "Content-Type: application/octet-stream; name=\"$nome_arquivo\"\r\n";
                $mensagem_completa .= "Content-Transfer-Encoding: base64\r\n";
                $mensagem_completa .= "Content-Disposition: attachment; filename=\"$nome_arquivo\"\r\n\r\n";
                $mensagem_completa .= "$conteudo_arquivo\r\n";
            }

            $mensagem_completa .= "--$boundary--";

            // Enviar o e-mail
            if (mail($para, $assunto, $mensagem_completa, $headers)) {
                echo "<div class='alert alert-success'>Currículo enviado com sucesso!</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro ao enviar currículo.</div>";
            }
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="mb-3">
                <label for="base" class="form-label">Selecione a Base</label>
                <select class="form-control" id="base" name="base" required>
                    <option value="pinda">Pindamonhangaba</option>
                    <option value="taubate">Taubaté</option>
                    <option value="campos">Campos do Jordão</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="curriculo" class="form-label">Anexe seu Currículo (PDF)</label>
                <input type="file" class="form-control" id="curriculo" name="curriculo" accept=".pdf" required>
            </div>
            <label for="politica">
                <input type="checkbox" id="politica" name="politica" required> Concordo com a <a href="<?php echo $url ?>politica-de-privacidade" target="_new" data-bs-toggle="modal" data-bs-target="#exampleModal">Política de Privacidade</a>
            </label>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel">TERMO DE CIÊNCIA PARA O RECEBIMENTO DE CURRÍCULOS</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>Em cumprimento às determinações expressas pela Lei Geral de Proteção de Dados Pessoais (LGPD), o <span class="company-name">Grupo SECURITY MASTER</span> (AR ANTUNES Sistemas Ltda, A.S. SECURITY ELETRONIC Comercio de Equipamentos de Segurança Eletrônica Ltda, A.S. ZELADORIA e Comercio de Equipamentos de Segurança Eletrônica Ltda, SECURITY FORCE Segurança Ltda, SECURITY MASTER Serviços de Zeladoria Patrimonial Especializada Ltda, RA ANTUNES Sistemas Ltda) informa sobre a realização do tratamento dos dados pessoais existentes em seu currículo profissional.</p>

                <h5>1. Dados Pessoais Tratados:</h5>
                <p>A organização realizará o tratamento dos seguintes dados pessoais: nome completo, endereço, telefone, e-mail, dados referentes à educação, dados referentes à profissão.</p>

                <h5>2. Finalidades do Tratamento dos Dados:</h5>
                <p>O tratamento dos dados pessoais listados no item anterior será tratado com as seguintes finalidades:</p>
                <p>- Recrutamento e participação em processos seletivos e de admissão para compor o quadro de colaboradores da organização;</p>
                <p>- Armazenamento do documento em nosso banco de currículos para utilização em futuros processos seletivos.</p>

                <h5>3. Compartilhamentos:</h5>
                <p>A organização compartilhara os dados pessoais do candidato com os departamentos da organização, pois é necessário para atendimento das finalidades listadas no item anterior:</p>

                <h5>4. Confidencialidade:</h5>
                <p>O <span class="company-name">Grupo SECURITY MASTER</span> compromete-se a manter a confidencialidade das informações enviadas no currículo e utilizá-las exclusivamente para a avaliação do perfil do candidato em processos seletivos.</p>

                <h5>5. Segurança dos Dados:</h5>
                <p>A organização compromete-se a realizar as mais diversas medidas de segurança, técnicas e administrativas, como instruir seus colaboradores a não compartilharem as informações pessoais dos possíveis candidatos com terceiros não autorizados e apenas os colaboradores envolvidos nos processos de admissão de novos funcionários tenham acesso a esses currículos, a fim de que seus dados pessoais estejam sempre protegidos e livres de acessos indesejados e incidentes, como: destruição, perda, alteração, compartilhamento ou qualquer forma de tratamento inadequado ou ilícito.</p>

                <h5>6. Armazenamento:</h5>
                <p>A organização informa que, com o objetivo de conceder oportunidade para ingresso em nossa empresa, através de nossos processos seletivos, irá armazenar a documentação concedida pelos candidatos que já manifestaram interesse por alguma de nossas vagas de emprego, em nosso banco de currículos, pelo período de 6 (seis) meses.</p>
                <p>Caso seu perfil se enquadre nos futuros processos seletivos, poderemos entrar em contato e agendar uma nova entrevista.</p>
                <p>Após o período de 6 (seis) meses, os currículos coletados de maneira física (em papel), serão fragmentados, enquanto aqueles coletados de maneira digital (via e-mail), serão deletados do nosso banco de dados.</p>

                <h5>7. Direitos dos Titulares:</h5>
                <p>Caso o titular queira exercer quaisquer de seus direitos previstos pela LGPD, basta acessar o Selo "Canal de Comunicação LGPD" em nosso site/em nosso e-mail/em nossas redes sociais/em nossa versão QR Code/ em nosso cartão de visita e preencher o "Formulário de Atendimento ao Titular de Dados".</p>

                <h5>8. Consentimento:</h5>
                <p>Ao fornecer meus dados, estou consentindo livremente, de forma explícita e informada, com o tratamento dos mesmos, conforme as condições descritas neste documento.</p>

                <div class="signature">
                    <p>Ao encaminhar meu currículo para o e-mail [informar e-mail de recebimento] para análise e eventual processo seletivo na empresa A.R. Antunes Sistemas Ltda - ME, declaro que li, compreendi e concordo com os termos acima estabelecidos.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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

<?php
include('components/#unidades.php');
?>