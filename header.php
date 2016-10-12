<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">

<head>

<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width">

<title>OWNER MAKER</title>

<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="./js/jquery.carouFredSel-6.2.0-packed.js"></script>

<script>
  $(function() {
  	$('#carousel').carouFredSel({
  		responsive: true,
  		items: {
  			visible: 1,
  			width: 900,
  			height: 500
  		},
  		scroll: {
  			duration: 1500,
  			timeoutDuration: 5000,
  			fx: 'crossfade'
  		},
  	});
  });
</script>

</head>

<body>
<div id="container">

<div id="header">
  <div id="header-logo-home">
    <a href="index.php">
      <img src="img/common/logo.png" alt="OWNER MAKER logo" />
    </a>
  </div>

  <div id="header-logo-menu">
    <a href="aboutus.php" class="header-navi">
      <img src="img/common/navi_01<?php if (basename($_SERVER['PHP_SELF']) == 'aboutus.php') echo '_on' ?>.png"
           alt="OWNER MAKER について" width="163" height="86"
           onmouseover="this.src='img/common/navi_01_on.png'"
           onmouseout="this.src='img/common/navi_01.png'" />
    </a>
    <a href="company.php" class="header-navi">
      <img src="img/common/navi_02<?php if (basename($_SERVER['PHP_SELF']) == 'company.php') echo '_on' ?>.png"
           alt="会社概要" width="163" height="86"
           onmouseover="this.src='img/common/navi_02_on.png'"
           onmouseout="this.src='img/common/navi_02.png'" />
    </a>
    <a href="business.php" class="header-navi">
      <img src="img/common/navi_03<?php if (basename($_SERVER['PHP_SELF']) == 'business.php') echo '_on' ?>.png"
           alt="事業内容" width="163" height="86"
           onmouseover="this.src='img/common/navi_03_on.png'"
           onmouseout="this.src='img/common/navi_03.png'" />
    </a>
    <a href="message.php" class="header-navi">
      <img src="img/common/navi_04<?php if (basename($_SERVER['PHP_SELF']) == 'message.php') echo '_on' ?>.png"
           alt="代表あいさつ" width="163" height="86"
           onmouseover="this.src='img/common/navi_04_on.png'"
           onmouseout="this.src='img/common/navi_04.png'" />
    </a>
  </div>
</div>

<div class="clear"></div>
