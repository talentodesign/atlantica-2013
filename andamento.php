<?php include("header.php"); ?>
<?php 
if(isset($_GET["obra"])){
  $obra=$_GET["obra"];
}
else{
  $obra="maranello";
}
 ?>
<title>Atlântica Construtora - Obras em Andamento</title>
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
        <a href="<?php servidor(); ?>andamento/obra/maranello/"><p>MARANELLO RESIDENCE</p></a>
        <a href="<?php servidor(); ?>andamento/obra/sirius/"><p>SIRIUS RESIDENCE</p></a>
      </div>
    </div>
    <div id="content">
      <div id="andamento" class="centraliza">
        <?php if ($obra=="maranello"): ?>
          <div id="top">
            <img src="<?php servidor(); ?>images/obras/maranello.jpg" height="340" width="230" alt="" id="perfil">
            <div id="desc">
              <div id="nome">
                Maranello Residence
              </div>
              <div id="txt">
                • Unidades com 84,25 m² (área privativa); <br>
                • Três opções de planta: <br>
                <br>
                     &nbsp;&nbsp; - 2 quartos, sendo 1 suíte <br>
                     &nbsp;&nbsp; - 3 quartos, sendo 1 suíte <br>
                     &nbsp;&nbsp; - 2 quartos, sendo 1 suíte e gabinete <br>
                <br>
                <br>
                Trav.Humaitá, n°1866
                (Av.25 de Setembro/Av.Duque de Caxias) - Marco              
              </div>
            </div>
            <div id="ficha">
              <div id="centro" class="centraliza">
                <span>FICHA TÉCNICA </span><br>
                <p>Sala de estar/jantar</p> 
                <p>Banheiros<br>(Sociais/Suíte<br>/Serviço)</p>
                <p>Sacada Social</p>
                <p>Cozinha<br>Americana</p>
                <p>Área de Serviço</p>
                <p>1 ou 2 vagas na<br>garagem</p>
                <p>Sacada da Suíte</p>
              </div>
            </div>
            <div class="separator"></div>
          </div>
          <div id="mid">
            <div id="esq">
              <img src="<?php servidor(); ?>images/andamento/planta-title.jpg" height="14" width="122" alt="" class="title"><br>
              <div class="galeria">
                <div class="gal-area">
                  <div class="gal">
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/maranello/mar01.jpg" height="240" width="600">
                      <img src="<?php servidor(); ?>images/obras/maranello/mar01.jpg" alt="">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/maranello/mar02.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/mar02.jpg" alt="">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/maranello/mar03.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/mar03.jpg" alt="">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/maranello/mar01.jpg" height="240" width="600">
                      <img src="<?php servidor(); ?>images/obras/maranello/mar01.jpg" alt="">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/maranello/mar02.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/mar02.jpg" alt="">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/maranello/mar03.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/mar03.jpg" alt="">
                    </a>
                  </div>
                </div>
                <a href=""><img src="<?php servidor(); ?>images/andamento/seta1.jpg" height="31" width="13" alt="" class="seta next"></a>
              </div>
            </div>
            <div id="dir">
              <img src="<?php servidor(); ?>images/andamento/estagio-title.jpg" height="20" width="129" alt="" class="title"><br>
              <div class="galeria">
                <a href=""><img src="<?php servidor(); ?>images/andamento/seta2.jpg" height="31" width="13" alt="" class="seta prev"></a>
                <div class="gal-area">
                  <div class="gal">
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/maranello - 01 de novembro 2011.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/maranello - 01 de novembro 2011.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/maranello-mai-12.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/maranello-mai-12.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/maranello-out-13.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/maranello-out-13.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/maranello-out-14.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/maranello-out-14.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/maranello-out-16.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/maranello-out-16.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/maranello_marco_2012.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/maranello_marco_2012.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra01.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra01.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra02.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra02.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra03.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra03.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra04.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra04.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra05.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra05.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra06.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra06.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra08.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra08.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra09.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra09.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/maranello/marobra09.jpg">
                      <img src="<?php servidor(); ?>images/obras/maranello/marobra09.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="separator"></div>
          <div id="bot">
            <img src="<?php servidor(); ?>images/andamento/local-title.jpg" height="30" width="120" alt="" id="title">
            <iframe width="774" height="416" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps/ms?hl=pt-br&amp;ie=UTF8&amp;msa=0&amp;msid=212850585661227781878.0004953022d1ad3fa2599&amp;source=embed&amp;t=h&amp;ll=-1.437202,-48.466809&amp;spn=0.004462,0.008293&amp;z=17&amp;iwloc=00049530230c4fc9d150c&amp;output=embed"></iframe>
          </div>
        <?php endif ?>
        <?php if ($obra=="sirius"): ?>
          <div id="top">
            <img src="<?php servidor(); ?>images/obras/sirius.jpg" height="340" width="230" alt="" id="perfil">
            <div id="desc">
              <div id="nome">
                Sirius Residence
              </div>
              <div id="txt">
                • 103,00 m²(área privativa);<br>
                <br>
                     &nbsp;&nbsp; - 3 quartos, sendo 1 ou 2 suítes <br>
                     &nbsp;&nbsp; - Sacada Gourmet <br>
                     &nbsp;&nbsp; - 2 vagas de garagem soltas <br>
                     &nbsp;&nbsp; - (*) – sem inclusão de área(s) de garagem(ns)
                <br>
                <br>
                Travessa Mauriti, 1439
                (Av.Marques de Herval/Av.Pedro Miranda) - Pedreira              
              </div>
            </div>
            <div id="ficha">
              <div id="centro" class="centraliza">
                <span>FICHA TÉCNICA </span><br>
                <p>103,00 m²(área privativa)</p> 
                <p>3 quartos, sendo 1 ou 2 suítes</p>
                <p>Sacada Gourmet</p>
                <p>2 vagas de garagem soltas</p>
                <p>(*) – sem inclusão de área(s) de garagem(ns)</p>
              </div>
            </div>
            <div class="separator"></div>
          </div>
          <div id="mid">
            <div id="esq">
              <img src="<?php servidor(); ?>images/andamento/planta-title.jpg" class="title"><br>
              <div class="galeria">
                <div class="gal-area">
                  <div class="gal">
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/sirius/sir08.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir08.jpg" height="304" width="500" alt="">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/sirius/sir09.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir09.jpg" height="304" width="500" alt="">
                    </a>
                    <a rel="gal1" href="<?php servidor(); ?>images/obras/sirius/sir10.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir10.jpg" height="304" width="500" alt="">
                    </a>
                  </div>
                </div>
                <a href=""><img src="<?php servidor(); ?>images/andamento/seta1.jpg" height="31" width="13" alt="" class="seta next"></a>
              </div>
            </div>
            <div id="dir">
              <img src="<?php servidor(); ?>images/andamento/estagio-title.jpg" height="20" width="129" alt="" class="title"><br>
              <div class="galeria">
                <a href=""><img src="<?php servidor(); ?>images/andamento/seta2.jpg" height="31" width="13" alt="" class="seta prev"></a>
                <div class="gal-area">
                  <div class="gal">
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sir01.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir01.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sir02.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir02.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sir03.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir03.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sir04.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir04.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sir05.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir05.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sir06.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir06.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sir07.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sir07.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sirius-mai-12.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sirius-mai-12.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sirius-out-1.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sirius-out-1.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sirius-out-2.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sirius-out-2.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sirius-out-3.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sirius-out-3.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/siriuso_01.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/siriuso_01.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/siriuso_02.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/siriuso_02.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/siriuso_03.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/siriuso_03.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/siriuso_04.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/siriuso_04.jpg" alt="">
                    </a>
                    <a rel="gal2" href="<?php servidor(); ?>images/obras/sirius/sirius_marco_2012.jpg">
                      <img src="<?php servidor(); ?>images/obras/sirius/sirius_marco_2012.jpg" alt="">
                    </a>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="separator"></div>
          <div id="bot">
            <img src="<?php servidor(); ?>images/andamento/local-title.jpg" height="30" width="120" alt="" id="title">
            <iframe width="774" height="416" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Travessa+Mauriti,+1439,+Bel%C3%A9m+-+Par%C3%A1&amp;aq=0&amp;sll=-14.239424,-53.186502&amp;sspn=40.022669,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Travessa+Mauriti,+1439+-+Pedreira,+Bel%C3%A9m+-+Par%C3%A1,+66080-650&amp;t=h&amp;ll=-1.418551,-48.473225&amp;spn=0.035695,0.066347&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
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

