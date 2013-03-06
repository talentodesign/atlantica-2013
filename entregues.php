<?php include("header.php"); ?>
<?php 
if(isset($_GET["obra"])){
  $obra=$_GET["obra"];
}
else{
  $obra="meridian";
}
 ?>
<title>Atlântica Construtora - Obras Entregues</title>
</head>
<body>
  <div id="header">
    <?php include("topo.php") ?>
  </div>
  <div class="centraliza">
    <div id="sidebar">
      <?php include("menu.php"); ?>
      <div id="lista">
        <img src="<?php servidor(); ?>images/andamento/lista-ob.jpg" height="20" width="180" alt="" id="title">
        <a href="<?php servidor(); ?>entregues/obra/meridian/">
          <p>MERIDIAN CONDOMÍNIO</p>
        </a>
        <a href="<?php servidor(); ?>entregues/obra/jardim-antonieta/">
          <p>EDIFÍCIO JARDIM ANTONIETA</p>
        </a>
        <a href="<?php servidor(); ?>entregues/obra/madison/">
          <p>MADISON RESIDENCE</p>
        </a>
      </div>
    </div>
    <div id="content">
      <div id="andamento" class="centraliza">
        <?php if ($obra=="meridian"): ?>
          <div id="top">
            <img src="<?php servidor(); ?>images/obras/meridian.png" height="340" width="230" alt="" id="perfil">
            <div id="desc">
              <div id="nome">
                MERIDIAN CONDOMÍNIO
              </div>
              <div id="txt">
                • Apartamento de 100,08m² e 98,99m²; <br>
                • 2 quartos sendo uma suite; <br>
                • 2 Sacadas. <br>
                Travessa do Chaco, 2609 <br>
                Entre Almirante Barroso e João Paulo II         
              </div>
            </div>
            <div id="ficha">
              <div id="centro" class="centraliza">
                <span>FICHA TÉCNICA </span><br>
                <p>2 Quartos</p>
                <p>1 Suite </p>
                <p>2 Sacadas</p>
              </div>
            </div>
            <div class="separator"></div>
          </div>
          <div id="mid">
            <div id="esq">
              <img src="<?php servidor(); ?>images/entregues/fotos.jpg" alt="" class="title"><br>
              <div class="galeria">
                <div class="gal-area">
                  <div class="gal">
                    <a href="<?php servidor(); ?>images/obras/meridian/mer01.jpg">
                      <img src="<?php servidor(); ?>images/obras/meridian/mer01.jpg" alt="">
                    </a>
                    </a>
                  </div>
                </div>
                <a href=""><img src="<?php servidor(); ?>images/andamento/seta1.jpg" height="31" width="13" alt="" class="seta next"></a>
              </div>
            </div>
          </div>
          <div class="separator"></div>
          <div id="bot">
            <img src="<?php servidor(); ?>images/andamento/local-title.jpg" height="30" width="120" alt="" id="title">
            <iframe width="774" height="416" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps/ms?client=firefox-a&amp;hl=pt-br&amp;ie=UTF8&amp;msa=0&amp;msid=212850585661227781878.000493c0cabdf522e8849&amp;source=embed&amp;t=h&amp;ll=-1.443187,-48.461401&amp;spn=0.004462,0.008293&amp;z=17&amp;iwloc=000493c0cac5099f217c9&amp;output=embed"></iframe>
          </div>
        <?php endif ?>
        <?php if ($obra=="jardim-antonieta"): ?>
          <div id="top">
            <img src="<?php servidor(); ?>/images/obras/jardim-antonieta.jpg" height="340" width="230" alt="" id="perfil">
            <div id="desc">
              <div id="nome">
                EDÍFICIO JARDIM ANTONIETA
              </div>
              <div id="txt">
                • 103 m² - 3 quartos, sendo 1 suíte <br>
                <br>
                Travessa Nina Ribeiro, 364              
              </div>
            </div>
            <div id="ficha">
              <div id="centro" class="centraliza">
                <span>FICHA TÉCNICA </span><br>
                <p>3 Quartos</p>
                <p>1 Suite</p>
                <p>Salão de Festas</p>
              </div>
            </div>
            <div class="separator"></div>
          </div>
          <div id="mid">
            <div id="esq">
              <img src="<?php servidor(); ?>images/entregues/fotos.jpg" class="title"><br>
              <div class="galeria">
                <div class="gal-area">
                  <div class="gal">
                    <a href="<?php servidor(); ?>images/obras/jardim-antonieta/ant01.jpg">
                      <img src="<?php servidor(); ?>images/obras/jardim-antonieta/ant01.jpg" alt="">
                    </a>
                  </div>
                </div>
                <a href=""><img src="<?php servidor(); ?>images/andamento/seta1.jpg" height="31" width="13" alt="" class="seta next"></a>
              </div>
            </div>
          </div>
          <div class="separator"></div>
          <div id="bot">
            <img src="<?php servidor(); ?>images/andamento/local-title.jpg" height="30" width="120" alt="" id="title">
            <iframe width="774" height="416" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps/ms?client=firefox-a&amp;hl=pt-br&amp;ie=UTF8&amp;msa=0&amp;msid=212850585661227781878.000493c17dac26ad9f6e8&amp;source=embed&amp;t=h&amp;ll=-1.450185,-48.4641&amp;spn=0.002231,0.004147&amp;z=18&amp;iwloc=000493c17db3bf2b3c9a8&amp;output=embed"></iframe>
        <?php endif ?>
        <?php if ($obra=="madison"): ?>
          <div id="top">
            <img src="<?php servidor(); ?>/images/obras/madison.jpg" height="340" width="230" alt="" id="perfil">
            <div id="desc">
              <div id="nome">
                MADISON RESIDENCE
              </div>
              <div id="txt">
                 Apartamento de 137m², todos de frente para a nascente; <br>
                • 3 Suites sendo uma Master; <br>
                • Gabinete, Sala de estar e jantar, Espaço Goumert; <br>
                • Cozinha, Área de serviço e Dependencia de Empregada; <br>
                • Condomínio completo. <br>
                <br>
                Mariz e Barros, 3106 - Marco <br>
                Entre Almirante Barroso e João Paulo II            
              </div>
            </div>
            <div id="ficha">
              <div id="centro" class="centraliza">
                <span>FICHA TÉCNICA </span><br>
                <p>Sala de Estar</p>
                <p>Sala de Jantar</p>
                <p>Cozinha</p>
                <p>Garagem</p>
                <p>Dep. de Empregada</p>
                <p>Espaço Goumert</p>
                <p>Gabinete</p>
              </div>
            </div>
            <div class="separator"></div>
          </div>
          <div id="mid">
            <div id="esq">
              <img src="<?php servidor(); ?>images/entregues/fotos.jpg" class="title"><br>
              <div class="galeria">
                <div class="gal-area">
                  <div class="gal">
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/mad01.jpg" height="360" width="600">
                      <img src="<?php servidor(); ?>images/obras/madison/mad01.jpg">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/mad02.jpg" >
                      <img src="<?php servidor(); ?>images/obras/madison/mad02.jpg">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/mad03.jpg" >
                      <img src="<?php servidor(); ?>images/obras/madison/mad03.jpg">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/mad04.jpg" >
                      <img src="<?php servidor(); ?>images/obras/madison/mad04.jpg">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/mad05.jpg" >
                      <img src="<?php servidor(); ?>images/obras/madison/mad05.jpg">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/mad06.jpg" >
                      <img src="<?php servidor(); ?>images/obras/madison/mad06.jpg">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/mad07.jpg" >
                      <img src="<?php servidor(); ?>images/obras/madison/mad07.jpg">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/mad08.jpg" >
                      <img src="<?php servidor(); ?>images/obras/madison/mad08.jpg">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/madison/madisn-dezembro-2011.jpg" >
                      <img src="<?php servidor(); ?>images/obras/madison/madisn-dezembro-2011.jpg">
                    </a>
                  </div>
                </div>
                <a href=""><img src="<?php servidor(); ?>images/andamento/seta1.jpg" height="31" width="13" alt="" class="seta next"></a>
              </div>
            </div>
          </div>
          <div class="separator"></div>
          <div id="bot">
            <img src="<?php servidor(); ?>images/andamento/local-title.jpg" height="30" width="120" alt="" id="title">
            <iframe width="774" height="416" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps/ms?hl=pt-br&amp;ie=UTF8&amp;msa=0&amp;msid=212850585661227781878.000493c0b5902d87aa791&amp;source=embed&amp;t=h&amp;ll=-1.435947,-48.458633&amp;spn=0.008924,0.016587&amp;z=16&amp;iwloc=000493c0b59622844d1a3&amp;output=embed"></iframe>
        <?php endif ?>
      </div>
    </div>
  </div>
  <div class="separator"></div>
  <div id="footer">
    <?php include("footer.php") ?>
  </div>
</body>
</html>

