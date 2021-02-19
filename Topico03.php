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
                <i class="fas fa-folder"></i> 03 - Antecedentes da ética no serviço público
            </h2>

            <hr class="hr4">

            <p class="Texto"><strong>Objetivo:</strong>  - Expor a importância dos códigos de ética no serviço público.
            <p>- Apresentar um histórico do surgimento e a necessidade dos códigos e institutos voltados para o fomento da ética no serviço público.</p>
            <hr class="hrLaranja">

            <p class="Texto">
                Pode-se afirmar que ética pública já existe desde a antiguidade, com o intuito de formar a conduta das pessoas de governo. Ela estava vinculada aos assuntos de governo, tanto na formação dos governantes quanto na prática política, de modo a fomentar as ações acompanhadas de valores que pudessem beneficiar os governados.
            </p>
            <p class="Texto">
            Apesar de um certo descuido a que tem sido submetido nas últimas décadas, o tema da ética pública tem reaparecido com força e se tornado um tema de fundamental análise entre os principais estudiosos de governo e administração pública. Se pudermos delimitar um marco histórico, podemos dizer que o compromisso da ética no âmbito público recobra importância por volta dos anos setenta, nos Estados Unidos, na raiz do famoso e, possivelmente, o maior escândalo político americano conhecido como “Watergate”, que, por tamanha crise institucional, terminou com a renúncia do Presidente Richard Nixon. Esse fato demonstrou ao público que alguns governantes e funcionários praticavam condutas imorais e antiéticas. Foi, então, que se criaram mecanismos para o fomento da ética no setor público como, por exemplo, a <span style="color:#FC6B30">OGE (</span><i>Office of Government Ethics</i> – Em tradução aproximada, algo como “Escritório de Ética no Governo” <span style="color:#FC6B30">)</span>.
            </p>

            <div>
                    <p class="FiqueAtentoTitulo"> Dica</p>
                    <p class="FiqueAtentoTexto">Para maiores informações, sugerimos o site deste organismo: https:// www.oge.gov , que foi instituída pela lei de Ética no Governo (Ethics in Government Act., EGA), em 1978.
</p>
                </div>
            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <div class="center">
                <div class="btn-group" id="btn-group">
                        <a href="Topico02.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                        <a href="Topico04.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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