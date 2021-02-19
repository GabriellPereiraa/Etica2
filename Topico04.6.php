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
            <h2 class="font-bold Azul">
                <i class="fas fa-folder"></i> 04.6 - Outras experiências estrangeiras
            </h2>

            <hr class="hr4">
            <p class="Texto">
                Em maio de 1997, em documento preparado pela Secretaria para o 13º encontro do Grupo de Especialistas do Programa das Nações Unidas para Administração Pública e Finanças, a ONU estabeleceu uma série de princípios diretores para a ética no serviço público. O documento privilegia sobretudo a ideia de profissionalização do serviço público e sugere que o comportamento ético do servidor aumenta proporcionalmente, à medida que também aumenta o profissionalismo. Isso se reflete imediatamente nos princípios propostos, que visam sempre à incorporação dos valores éticos ao comportamento profissional do servidor público. Destaquemos alguns dos princípios propostos pela ONU:
            </p>

            <section id="EducacaoEtica">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <h3>Educação ética</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    A permanente educação ética, conforme o documento, é necessária para a internalização de valores, como o respeito pelos outros, a proteção de direitos individuais etc. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            
            <section id="EspiritoPublico">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <h3>Espírito público</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os interesses privados devem estar sempre subordinados ao interesse público. Da mesma forma, a promoção do bem comum deve ser o objetivo maior do servidor público. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Valorizar">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <h3>Valorizar os cidadãos como seres humanos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os cidadãos não são meros clientes ou consumidores em um mercado.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Liderança">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <h3>Liderança</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os ocupantes de cargos públicos devem promover e apoiar estes princípios, através da liderança e do exemplo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico04.5.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico04.6.1.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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