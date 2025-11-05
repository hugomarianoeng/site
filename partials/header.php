<?php
$TITLE = "Hugo de Oliveira Mariano — Product Marketing & Analytics";
$DESC  = "Modern profile for Hugo de Oliveira Mariano: GTM, analytics, enablement, MSP/IT ops, and security foundations.";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($TITLE) ?></title>
  <meta name="description" content="<?= htmlspecialchars($DESC) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($TITLE) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($DESC) ?>">
  <meta property="og:type" content="website">
  <meta property="twitter:card" content="summary_large_image">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/style.css?v=1">
</head>
<body>
<header class="site-header">
  <div class="container nav">
    <a href="<?= $BASE_URL ?>/#top" class="brand">HM</a>
    <nav>
      <a href="#projects">Projects</a>
      <a href="#skills">Skills</a>
      <a href="#experience">Experience</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>