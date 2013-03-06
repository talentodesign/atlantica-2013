<?php include("header.php") ?>
<title>Atlântica Construtora - Noticias</title>
</head>
<body>
  <div id="header">
    <?php include("topo.php") ?>
  </div>
  <div class="centraliza">
    <div id="sidebar">
      <?php include("menu.php"); ?>
      <img src="<?php servidor(); ?>images/noticias/not-icon.jpg" height="463" width="350" alt="">
    </div>
    <div id="content">
      <div id="noticias" class="centraliza">
        <img src="<?php servidor(); ?>images/noticias/not-ttile.jpg" height="67" width="728" alt="" id="title">
        <div id="lista">
          <?php $i=0; while ($i < 6) {?>
          <div class="noticia">
            <a href="<?php servidor(); ?>noticia/">
              <p class="title"> &#187; INCC-M e IGP-M Fechamento 01/2013</p>
              <p class="resumo">
                 - IGP-M  01/2012 ->    0,34 % <br>
                 <br>
                 - INCC-M 01/2012 ->   0,39 %
              </p>
            </a>
          </div>
          <?php $i++; } ?>
        </div>
        <center><a href=""><img src="<?php servidor(); ?>images/noticias/mais-bt_off.jpg" height="50" width="220" alt="" class="botao"></a></center>
      </div>
    </div>
  </div>
  <div class="separator"></div>
  <div id="footer">
    <?php include("footer.php") ?>
    <?php include("contato_msg.php"); ?>
  </div>
</body>
</html>

