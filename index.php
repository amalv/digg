<?php
include(__DIR__.'/includes/pagination.class.php');
$p = new pagination;
$p->items(1000);
$p->limit(10);
$p->parameterName("p");
$page = $_REQUEST['p'];
$p->currentPage($page);
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link type="text/css" rel="stylesheet" media="all" href="./css/subhome-card.css">
  <link rel="stylesheet" href="css/styles.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<?php $p->show(); ?>
</body>
</html>
