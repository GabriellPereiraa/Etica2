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
            <div class="page-title">
                <h2 class="font-bold" style="color: #008445;">
                    Apresentação
                </h2>
                    <p class="Texto">
                    A ética vem ganhando cada vez mais proeminência no discurso atual sobre governança, ao passo que também se tem uma percepção de que o padrão de vida pública tem sofrido um declínio. O Brasil, como muitos outros países, tem examinado e repensado o papel do Estado e todo seu aparelho. De modo que quando se fala em ética no governo, a referência que se faz é ao padrão moral no serviço público.
                    </p>

                <br>
                <hr>
                <h2 class="font-bold" style="color: #008445;">
                    Objetivo
                </h2>
                    <p class="Texto">
                        <i class="fas fa-bullseye" style="color: #FC6B30;"></i> Apresentar as questões éticas ao servidor público;
                    </p>
                    <p class="Texto">
                        <i class="fas fa-bullseye" style="color: #FC6B30;"></i> Discutir a ética profissional no serviço público.
                    </p>

            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                        <a href="Topico01.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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