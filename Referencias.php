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

                <h3 class="font-bold">Referências</h3>
                <hr>

                <ul style="list-style: none;">
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> BRASIL. <strong>Constituição da República Federativa do Brasil </strong>(1988). Brasília: Edições Câmara, 2012.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> MENDES, Annhia Valléria Calmon. <strong>Ética na Administração Pública Federal – a implementação de comissões de ética setoriais:</strong> entre o desafio e a oportunidade de mudar o modelo de gestão. Brasília: FUNAG, 2010.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> NOLAN, Lord. <strong>Normas de conduta para a vida pública</strong>. Cadernos ENAP, Brasília, n.12, 1997.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> OCDE. <strong> La ética en el servicio público:</strong> cuestiones y prácticas atuales. Madrid: MAP, 1997.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> OECD. <strong>Trust in Government:</strong> ethics measures in OECD countries. Washington: OECD, 2000.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> WEBER, Max. <strong> A ética protestante e o espírito do capitalismo.</strong> São Paulo: Companhia das Letras, 2004. 
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> ______.<strong> Ciência e política:</strong> duas vocações. São Paulo: Cultrix, 2011.
                    </li>
                    <br>
                </ul>
            </div>

        </div>

        <br>
        <div class="center">
            <div class="btn-group" id="btn-group">
                <a href="Topico04.8.php" class="btn btn-outline-success btn-sm ">Página Anterior</a>
                <a href="#" class="btn btn-outline-success btn-sm">Avaliação</a>
            </div>
        </div>

        <!-- SCRIPT LIGHTBOX -->
        <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });                    
                </script>

    </div> <!-- CONTEUDO FIM -->

<!-- FOOTER -->
<?php include('layout/footer.php') ?>

</div> <!-- DIV MAIN FIM -->

<!-- FOOTER JS -->
<?php include('layout/js.php') ?>

</body>

</html>