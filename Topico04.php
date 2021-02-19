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
                <i class="fas fa-folder"></i> 04 - Modelos de ética
            </h2>

            <hr class="hr4">

            <p class="Texto"><strong>Objetivo:</strong>  Apresentar exemplos de modelos de ética nos planos internacional, latino-americano e nacional.</p>
            
            <hr class="hrLaranja">

            <h2 class="font-bold Azul">
                <i class="fas fa-folder"></i> 04.1 - Modelos de ética multinacionais: A OCDE
            </h2>
            <p class="Texto">
            A confiança no Governo é vital em qualquer sociedade democrática, sobretudo, quando os cidadãos esperam que seus representantes sirvam a pluralidade de interesses com equidade e administrem os recursos de forma correta. Assim, a ética se transforma num suporte indispensável para garantir esta confiança. Entretanto, nos países membros da OCDE manifestou-se, a partir da década de noventa, um certo declive na credibilidade dos governos, com as correspondentes consequências negativas em sua legitimidade e na de suas instituições.
            </p>

            <div>
                <p class="CuriosidadeTitulo"> Curiosidade</p>
                <p class="CuriosidadeTexto">
                    Atualmente, os países componentes da OCDE são: Alemanha, Austrália, Áustria, Bélgica, Canadá, Chile, Coreia, Dinamarca, Espanha, Estados Unidos, Eslovênia, Estônia, Finlândia, França, Grécia, Hungria, Irlanda, Islândia, Israel, Itália, Japão, Letônia, Luxemburgo, México, Noruega, Nova Zelândia, Países Baixos, Polônia, Portugal, Reino Unido, República Checa, Suécia, Suíça e Turquia. O Brasil está categorizado como país-chave em termos de colaboração global (<a href="https://www.oecd.org/">www.oecd.org</a>)
                </p>
            </div>

            <p class="Texto">
                O conselho da OCDE percebeu a gravidade desse problema e reagiu analisando as possíveis causas que provocavam essa desconfiança. Em abril de 1998, a Junta do Conselho solicitou que fosse elaborado um informativo nos países membros sobre a conduta ética no serviço público e a prevenção da corrupção. O órgão encarregado de cumprir essa tarefa foi o Comitê de Gestão Pública da OCDE (em inglês, PUMA). Dois anos depois, nos dias 26 e 27 de junho de 2000, foi apresentado o relatório final da Junta do Conselho da OCDE.
            </p>
            <p class="Texto">
                Assim, o PUMA começou a trabalhar e a colaborar com os governos dos países membros na supervisão do ambiente no setor público com a finalidade de conservar marcos efetivos para fomentar a integridade e prevenir a corrupção entre os servidores públicos. 
            </p>

            <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Obenha mais informações com a leitura do documento OECD, Trust in Government: ethics measures in OECD countries, Washington: OECD, 2000.</p>
                </div>

            </div> <!-- CLASS PAGE TITLE FIM -->
            
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