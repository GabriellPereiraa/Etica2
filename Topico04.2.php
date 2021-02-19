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
                <i class="fas fa-folder"></i> 04.2 - Ferramentas estratégicas
            </h2>

            <hr class="hr4">

            <p class="Texto">
                Como ferramenta estratégica, o Conselho da OCDE aprovou seis medidas para a condução da ética no serviço público. São elas:
            </p>
            <ul class="fa-ul">
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-check" style="color:#FC6B30"></i></span> Desenvolver e inspecionar regularmente políticas, procedimentos, práticas e instituições que exerçam alguma influência sobre a conduta no serviço público.
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-check" style="color:#FC6B30"></i></span> Fomentar a ação governamental para manter altos padrões de conduta e enfrentar a corrupção no setor público.
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-check" style="color:#FC6B30"></i></span> Incorporar o aspecto ético aos marcos de referências administrativas para garantir práticas de administração congruentes com os valores e princípios do serviço público.
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-check" style="color:#FC6B30"></i></span> Combinar, criteriosamente, os aspectos ideais e regulamentares dos sistemas de condução da ética.
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-check" style="color:#FC6B30"></i></span> Avaliar os efeitos das reformas da administração pública na conduta ética do serviço civil.
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"><i class="fas fa-check" style="color:#FC6B30"></i></span> Utilizar os princípios de condução da ética no serviço público para garantir altos padrões de conduta.
                    </p>
                </li>   
            </ul>
            <p class="Texto">
                Afirmamos, portanto, que “uma vez que as relações de governos se formalizam por meio de acordos e convenções, e são os servidores públicos os agentes desse processo, a necessidade de assegurar um padrão de conduta ético para o servidor torna-se condição para o desenvolvimento”.
            </p>

            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <br>]
            <br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                        <a href="Topico04.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                        <a href="Topico04.3.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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