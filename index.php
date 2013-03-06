<?php include("header.php") ?>
<title>Atlântica Construtora</title>
</head>
<body>
  <div id="header">
    <?php include("topo.php") ?>
  </div>
  <div class="centraliza">
    <div id="sidebar">
      <?php include("menu.php"); ?>
      <div id="side-not">
        <img src="<?php servidor(); ?>images/noticias-title.png" height="92" width="269" alt="" id="title">
        <div id="noticias">
          <div class="noticia">
            <p class="title">» INCC-M e IGP-M Fechamento 01/2013 </p>
            <p class="resumo">
              - IGP-M  01/2012 ->    0,34 % <br>
              - INCC-M 01/2012 ->   0,39 %
            </p>
            <p class="continue"><a href="">&gt; CONTINUE LENDO</a></p>
          </div>
          <div class="noticia">
            <p class="title">» INCC-M e IGP-M Fechamento 01/2013 </p>
            <p class="resumo">
              - IGP-M  01/2012 ->    0,34 % <br>
              - INCC-M 01/2012 ->   0,39 % <br>
            </p>
            <p class="continue"><a href="">&gt; CONTINUE LENDO</a></p>
          </div>
        </div>
        <center><a href="<?php servidor(); ?>noticias/" height="40" width="159"><img src="<?php servidor(); ?>images/mais-not_off.jpg" alt="" class="botao"></a></center>
      </div>
    </div>
    <div id="content">
      <div id="home">
        <div id="banner">
          <div id="sl">
            <div id="slidorion">
              <div id="slider">
                <div class="slide">
                  <img src="<?php servidor(); ?>images/slider-home/maranello.jpg" height="403" width="489" alt="">
                </div>
                <div class="slide">
                  <img src="<?php servidor(); ?>images/slider-home/sirius.jpg" height="403" width="489" alt="">
                </div>
                <div class="slide">
                  <img src="<?php servidor(); ?>images/slider-home/madison.jpg" height="403" width="238" alt="">
                </div>
              </div> 

              <div id="accordion">
                <div class="link-header">Maranello Residence</div>
                <div class="link-content">
                  • Unidades com 84,25 m² (área privativa); <br>
                  • Três opções de planta: <br>
                     - 2 quartos, sendo 1 suíte <br> 
                     - 3 quartos, sendo 1 suíte <br>
                     - 2 quartos, sendo 1 suíte e gabinete <br>
                     Trav.Humaitá, n°1866 (Av.25 de Setembro/Av.Duque de Caxias) - Marco
                </div>
                <div class="link-header">Sirus Residence</div>
                <div class="link-content">
                  • 103,00 m²(área privativa);<br>
                  - 3 quartos, sendo 1 ou 2 suítes <br>
                  - Sacada Gourmet <br>
                  - 2 vagas de garagem soltas <br>
                  - (*) – sem inclusão de área(s) de garagem(ns) <br>
                  Travessa Mauriti, 1439
                  (Av.Marques de Herval/Av.Pedro Miranda) - Pedreira   
                </div>
                <div class="link-header">Madison Residence</div>
                <div class="link-content">
                  Apartamento de 137m², todos de frente para a nascente; <br>
                  • 3 Suites sendo uma Master; <br>
                  • Gabinete, Sala de estar e jantar, Espaço Goumert; <br>
                  • Cozinha, Área de serviço e Dependencia de Empregada; <br>
                  • Condomínio completo. <br>
                  Mariz e Barros, 3106 - Marco <br>
                  Entre Almirante Barroso e João Paulo II
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="separator"></div>
        <div id="enquete">
          <img src="<?php servidor(); ?>images/enq-title.png" height="96" width="260" alt="" id="title"> <br>
          <img src="<?php servidor(); ?>images/enq-txt.png" height="37" width="298" alt="" id="txt">
          <form action="">
            <input type="radio" name="bairro" id=""> Nazaré
            <br>
            <input type="radio" name="bairro" id=""> Batista Campos
            <br>
            <input type="radio" name="bairro" id=""> Reduto
            <br>
            <input type="radio" name="bairro" id=""> Umarizal
            <br>
            <input type="radio" name="bairro" id=""> Marco
            <br>
            <input type="radio" name="bairro" id=""> Fátima
            <br>
            <input type="radio" name="bairro" id=""> Telégrafo
            <br>
            <input type="radio" name="bairro" id=""> Pedreira
            <br>
            <input type="image" src="<?php servidor(); ?>images/votar-bt_off.png" alt="" class="botao">
          </form>
        </div>
        <div id="coluna">
          <a href=""><img src="<?php servidor(); ?>images/boleto.jpg" height="78" width="417" alt=""></a>
          <div id="venda">
            <img src="<?php servidor(); ?>images/venda-icon.png" height="130" width="369" alt="" id="icon">
            <a href=""><img src="<?php servidor(); ?>images/clique_off.jpg" height="41" width="139" alt="" class="botao"></a>
          </div>
          <a href=""><img src="<?php servidor(); ?>images/financiamento.jpg" height="139" width="415" alt="" id="fin"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="separator"></div>
  <div id="footer">
    <?php include("footer.php") ?>
  </div>
</body>
</html>

