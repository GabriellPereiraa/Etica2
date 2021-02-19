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
                <i class="fas fa-folder"></i> 04.7 - Modelos éticos na América Latina
            </h2>

            <hr class="hr4">
            <p class="Texto">
                Indicamos, a seguir, um modelo de código de ética. Para tanto, destacamos o Código de Ética Profissional do Servidor Público Federal (1994) e o Sistema de Gestão de Ética do Poder Executivo Federal (2008). 
            </p>
            <ul class="fa-ul">
                <li>
                    <span class="fa-li"><i class="fas fa-arrow-right" style="color:#FC6B30;"></i></span> Código de Ética Profissional do Servidor Público Civil do Poder Executivo Federal: <a href="https://goo.gl/WIopjK">https://goo.gl/WIopjK</a>
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-arrow-right" style="color:#FC6B30;"></i></span> DECRETO Nº 1.171, DE 22 DE JUNHO DE 1994: <a href="https://goo.gl/lKheCj">https://goo.gl/lKheCj</a>
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-arrow-right" style="color:#FC6B30;"></i></span> DECRETO Nº 6.029, DE 1º DE FEVEREIRO DE 2007: <a href="https://goo.gl/ZJ8nMT">https://goo.gl/ZJ8nMTj</a>
                </li>
            </ul>

            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico04.7.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Referencias.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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