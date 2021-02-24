<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 4.5 - Padrão britânico de conduta na vida pública
            </h2>

            <hr class="hrLaranja">
            
            <p class="Texto">
            Buscaremos expor, agora, um breve apanhado sobre a experiência britânica. No ano de 1995, no mês de maio, deu-se a criação e a elaboração de um código de conduta, que incorporou os assim chamados “sete princípios da vida pública” propugnados pelo então primeiro-ministro o juiz Michael Patrick Nolan (1928-2007), conhecido como Lord Nolan. Ele presidiu o Comitê sobre normas de conduta na vida pública no Reino Unido. Tal código, por meio de uma formação continuada e da sujeição ao seu cumprimento a uma análise externa, constituiu-se um grande e importante avanço nos princípios democráticos que deveriam reger o Instituto e garantiu que fatos tão indesejáveis de corrupção financeira e política ocorridos no passado não tivessem oportunidade de se repetir.
            </p>

            <section id="Exemplo">
                <div class="row">
                    <div class="col-1 center border" style="background-color:#4885AE;">
                        <p class="Texto" style="color:white;">
                            Exemplo
                        </p>
                    </div>
                    <div class="col-sm center border">
                        <p class="Texto">
                        Havia pagamento de propina para fazer determinadas perguntas na Câmara, a contratação de ex-ministros por parte de empresas que eles mesmos haviam privatizado, conexão entre doações política e nomeações. Ainda, venda de armas para o Iraque, corrupção de corporações locais, rejeição dos ministros em admitir seus erros, entre outros escândalos e abusos.
                        </p>
                    </div>
                </div>
            </section>
            <br>

            <p class="Texto">
            O Relatório Nolan, como ficou conhecido, é um documento sóbrio que surge em um contexto de deterioração da confiança pública na probidade financeira dos deputados. Apresenta as funções de detectar e discutir problemas em seu serviço público e fruto do trabalho de uma comissão parlamentar destinada a examinar as preocupações a respeito dos padrões de conduta de todos os ocupantes de cargos públicos, inclusive procedimentos relacionados com atividades financeiras e comerciais. Além disso, é utilizado para fazer recomendações com respeito a mudanças nos procedimentos, que possam vir a ser necessárias para garantir altos padrões de decência na vida pública.
            </p>
            <p class="Texto">
            O relatório sob o ponto de vista da Câmara, o órgão máximo do Estado, estabelece, pela sua própria metodologia, que o exemplo deve vir de cima. Relativamente à Câmara dos Comuns, a Comissão preocupou-se com certas relações que possam interferir no exercício da função parlamentar, de vez que o dever básico do deputado é para com seus eleitores e para com o país. Exemplo disso, é a proibição de qualquer venda de serviços parlamentares a empresas que façam lobby em nome de clientes e a exigência de um maior rigor no que diz respeito ao Registro de Interesses dos Membros do Parlamento.
            </p>
            <p class="Texto">
                Para que a atividade dos deputados seja mais claramente normatizada, a Comissão propõe que se estabeleça um código de ética, a ser revisto em cada legislatura. O fiel cumprimento do código deverá ser acompanhado por uma pessoa independente, com certa estabilidade e não pertencente aos quadros funcionais da própria Câmara. Esta última, como órgão maior do Estado, escolherá tal pessoa encarregada de zelar pelo cumprimento do código, dando-lhe poderes de investigar e relatar eventuais desvios. Deputados novatos terão a oportunidade de submeter-se a treinamento em assuntos éticos. Mais uma vez, o público deverá estar sempre informado sobre todos esses assuntos.
            </p>
            <p class="Texto">
                Assim, o Relatório Nolan repete, no seu estudo sobre a Câmara dos Comuns, dos ministérios e dos servidores e das mencionadas entidades semiautônomas, o mesmo procedimento analítico: detecta problemas, propõe códigos de conduta, exige registros e fiscalização independente para o cumprimento das respectivas normas e, por fim, sugere processos de educação e de formação rotineira, de modo que cada um conheça suas obrigações e aprenda a cumpri-las bem.
            </p>
            <p class="Texto">
                No entanto, todos esses elementos devem se realizar sob o amparo do que ficou conhecido como Sete Princípios da Vida Pública, os quais listamos a seguir.
            </p>

            <section id="Interesse">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <h3>Interesse Público</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os ocupantes de cargos públicos deverão tomar decisões baseadas unicamente no interesse público. Não deverão decidir com o objetivo de obter benefícios financeiros ou materiais para si, sua família ou seus amigos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           

            <section id="Integridade">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <h3>Integridade</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os ocupantes de cargos públicos não deverão colocarse em situação de obrigação financeira ou de outra ordem, para com indivíduos ou organizações externas, que possa influenciá-los no cumprimento de seus deveres oficiais.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         
            <section id="Objetividade">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <h3>Objetividade</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    No desempenho das atividades públicas, inclusive nomeações, concessão de contratos ou recomendação de pessoas para recompensas e benefícios, os ocupantes de cargos públicos deverão decidir apenas com base no mérito.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          

            <section id="Accountability">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <h3>Accountability (Prestação de contas)</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os ocupantes de cargos públicos são responsáveis perante o público por suas decisões ou ações e devem submeter-se a qualquer fiscalização apropriada ao seu cargo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           

            <section id="Transparência">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <h3>Transparência</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os ocupantes de cargos públicos devem conferir às suas decisões, às suas ações a maior transparência possível. Eles devem justificar suas decisões e restringir o acesso à informação somente se o interesse maior do público assim o exigir.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          

            <section id="Honestidade">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <h3>Honestidade</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os ocupantes de cargos públicos têm o dever de: declarar quaisquer interesses particulares que tenham relação com seus deveres públicos; e de tomar medidas para resolver quaisquer conflitos que possam surgir, de forma a proteger o interesse público.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         

            <section id="Liderança">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <h3>Liderança</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os ocupantes de cargos públicos devem promover e apoiar esses princípios, através da liderança e do exemplo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>

            <p class="Texto">
            Esses princípios aplicam-se a todos os aspectos da vida pública. A Comissão relacionou-os para o uso de todos que de alguma forma prestem serviço ao público. Todas essas ideias representam um esforço no sentido de transportar valores e princípios éticos para o nível das instituições nacionais. Estas não podem admitir interferências privadas ilegítimas e nem tampouco interesses corporativos sob máscaras sociais. Um deputado, um administrador urbano, um médico ou um carteiro devem estar em condições de trabalhar beneficiando o cidadão, que os mantém com os seus impostos. 
            </p>
            <p class="Texto">
            Por esse motivo, o relatório, no tocante ao controle interno, dispõe que a Câmara deve nomear uma pessoa independente como comissário parlamentar das normas. Essa pessoa tem a responsabilidade de:
            </p>
            
            <ul class="fa-ul">
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-arrow-right" style="color:#FC6B30;"></i></span> fazer o registro de interesses dos membros do Parlamento;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-arrow-right" style="color:#FC6B30;"></i></span> conselhar e orientar os deputados sobre o Código de Conduta;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-arrow-right" style="color:#FC6B30;"></i></span> investigar e relatar ações de má conduta.
                    </p>
                </li>
            </ul>
            <br>

            <p class="Texto">
            Desse modo, o Relatório Nolan nos lembra: “ter uma função pública imparcial e incorrupta é um presente que não tem preço”.
            </p>
            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico04.4.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico04.6.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
                </div>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>