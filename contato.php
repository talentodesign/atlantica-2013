<?php include("header.php") ?>
<title>Atlântica Construtora - Contato</title>
</head>
<body>
  <div id="header">
    <?php include("topo.php") ?>
  </div>
  <div class="centraliza">
    <div id="sidebar">
      <?php include("menu.php"); ?>
      <img src="<?php servidor(); ?>images/contato/contato-icon.jpg" height="463" width="350" alt="">
    </div>
    <div id="content">
      <div id="contato" class="centraliza">
        <img src="<?php servidor(); ?>images/contato/contato-title.jpg" height="83" width="289" alt="">
        <div id="formulario">
          <form action="">
            <label for="nome"><img src="<?php servidor(); ?>images/contato/nome.png" height="20" width="68" alt=""></label>
            <br>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="tel"><img src="<?php servidor(); ?>images/contato/tel.png" height="20" width="112" alt=""></label>
            <br>
            <input type="text" name="tel" id="tel">
            <br>
            <label for="email"><img src="<?php servidor(); ?>images/contato/email.png" height="20" width="78" alt=""></label>
            <br>
            <input type="text" name="email" id="email">
            <br>
            <label for="msg"><img src="<?php servidor(); ?>images/contato/msgl.png" height="20" width="131" alt=""></label>
            <br>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea><br>
            <center><input type="image" src="<?php servidor(); ?>images/contato/enviar-bt_off.png" height="34" width="120" alt="" id="cont_bt" class="botao"></center>
          </form>
        </div>
        <div id="end">
          <img src="<?php servidor(); ?>images/contato/end.png" height="137" width="324" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="separator"></div>
  <div id="footer">
    <?php include("footer.php") ?>
    <?php include ("contato_msg.php"); ?>
  </div>
</body>
</html>

