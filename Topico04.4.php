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
                <i class="fas fa-folder"></i> 04.4 - Governança Corporativa
            </h2>

            <hr class="hr4">

            <p class="Texto">
                Os códigos de Bom Governo surgiram a partir do conceito de Corporate Governance – Governança Corporativa, que tem como objetivo fundamental melhorar o funcionamento das empresas, tanto interna quanto externamente, buscando eficácia, transparência e responsabilidade perante a sociedade e seus integrantes. O conceito de Governança Corporativa está visivelmente dominado pelas experiências vividas pelos contextos Americanos e Ingleses, concentrando-se, de modo particular, nas empresas que atuam nas bolsas de valores.
            </p>
            <p class="Texto">
            Podemos dizer que existem diversas vertentes ou maneiras de conceber o Governo Corporativo, seja enquanto
            </p>
            <ul class="fa-ul">
                <li>
                    <span class="fa-li"></span><i class="fas fa-chevron-circle-right"  style="color:#FC6B30"></i> a sua organização: que considera essa matéria a partir de sua estrutura orgânica interna das entidades; ou 
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-chevron-circle-right"  style="color:#FC6B30"></i> a partir de controles societários externos: que são refletidos basicamente no mercado de controle societário. 
                </li>
            </ul>

            <p class="Texto">
                De uma forma ou de outra, o que se entende por uma boa governança está assentado na maneira como são dirigidas as organizações, a fim de melhorar seu funcionamento externo e interno, na constante busca de eficiência, integridade e transparência, a fim de responder, de maneira cada vez mais adequada, à sociedade, assegurando um comportamento ético organizacional integral.
            </p>
            <p class="Texto">
            Um dos principais objetivos do governo corporativo é evitar a manipulação de informação como consequência de uma má condução da ética dentro da organização, bem como também o progresso organizacional que vise alcançar as metas e objetivos almejados. Desse modo, que a reforma da governança não é um fim em si mesma, senão um meio para conseguir resultados de políticas públicas eficientes e efetivas, tanto para os cidadãos quanto para as empresas. A boa governança se refere a construir um melhor entorno socioeconômico, onde as pessoas possam viver, aprender e trabalhar; onde os empreendedores possam inovar e comercializar os resultados de sua criatividade e onde as empresas possam
            </p>
            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <div class="center">
                <div class="btn-group" id="btn-group">
                        <a href="Topico04.3.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                        <a href="Topico04.5.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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