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
                <i class="fas fa-folder"></i> 01 - Ética e serviço público
            </h2>

            <hr class="hr4">

            <p class="Texto"><strong>Objetivo:</strong>  Apresentar a importância do debate da ética aplicada ao serviço público.</p>
            
            <hr class="hrLaranja">

            <p class="Texto">
                Após algumas exposições muito sintéticas sobre possíveis definições de ética e alguns de seus sistemas no decorrer da história, estamos preparados para refletir sobre o papel da ética aplicada ao serviço público, visto que, como buscamos demonstrar, existe uma conexão íntima entre moral e sociedade, uma vez que os atos morais se condicionam socialmente.
            </p>

            <p class="Texto">
                As considerações éticas na função pública têm adquirido uma importância cada vez mais crescente, pois não se pode esquecer que o ofício público supõe como tarefa o serviço aos outros. Assim, a Ética Pública, para fins de uma primeira aproximação, estuda o comportamento dos funcionários ordenados à finalidade do serviço público que lhe é inerente. Pode-se, ainda, asseverar que é a ciência que trata da moralidade das ações humanas enquanto realizadas por servidores públicos, de modo que a chamada Ética Pública, assim como a Ética em si mesma, é também uma ciência prática. Ciência porque o estudo da ética para a administração pública inclui princípios gerais e universais sobre a moralidade dos atos humanos realizados pelo funcionário público ou pelo gestor público. Com base nisso, também se considera prática porque ela se ocupa, fundamentalmente, da livre conduta do indivíduo que desempenha alguma função pública, proporcionando-lhe as normas e critérios necessários para o bem agir. Resumindo, podemos dizer que a ideia de serviço à coletividade, à sociedade, consequentemente, aos outros, é o eixo central da ética pública. Dessa forma, também o é a conservação e a promoção do bem comum.
            </p>

            <p class="Texto">
                Essa ideia de serviço ao público, à coletividade, é o fundamento da administração e deve estar conectada com uma noção de administração pública que presta serviços de qualidade e que promove o exercício dos direitos fundamentais dos cidadãos. Aliás podemos afirmar que
            </p>

            <div class="col-md-12">
                <blockquote class="blockquoteEad">
                        <p class="mb-0">“ não há ‘servidor público’ e sim, ‘servidor do público’.”</p>
                    <footer class="blockquote-footer">- (MENDES, 2010, p. 22).</footer>
                </blockquote>
            </div>
            <br>

            <p class="Texto">
            Uma Administração que se movimente por essa perspectiva, precisa ser uma administração composta por pessoas que estejam convencidas de que a qualidade dos seus serviços ofertados tem muito a ver com um trabalho bem executado e que é importante ir ao encontro dos legítimos interesses da população nos múltiplos e variados expedientes, interesses e necessidades. Nesse sentido, o servidor público tem como responsabilidade assumir um protagonismo, de se sentir responsável, e independentemente da função que ora ocupa, pela dinâmica administrativa, colocando à sua frente os interesses da coletividade.
            </p>
            </div>
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Apresentacao.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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