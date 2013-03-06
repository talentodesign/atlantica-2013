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
        <div id="item">
          <div class="noticia">
            <p class="title"> &#187; INCC-M e IGP-M Fechamento 01/2013</p>
            <p class="resumo">
               - IGP-M  01/2012 ->    0,34 % <br>
               <br>
               - INCC-M 01/2012 ->   0,39 %
            </p>
          </div>
        </div>
        <center><a href="<?php servidor(); ?>noticias/" height="40" width="159"><img src="<?php servidor(); ?>images/mais-not_off.jpg" alt="" class="botao"></a></center>
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

