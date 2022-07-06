<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png", CONF_VIEW_THEME); ?>" />
    <?= $head; ?>
    
    <!-- WebFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Gentium+Book+Plus:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" type="text/css">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= theme("assets/styles.css", CONF_VIEW_THEME) ?>" />
    <?= $this->section("styles"); ?>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="dual-ring"></div>
    </div>
    <!-- Preloader End -->
    
    <!-- Document Wrapper -->
    <div id="main-wrapper">

        <!-- Header -->
        <?php if($this->section("header")): ?>
            <?= $this->section("header"); ?>
        <?php else: ?>
            <?php $this->insert('partials/header'); ?>
        <?php endif; ?>
        <!-- Header End -->

        <!-- Content -->
        <div id="content" class="py-3 py-lg-5">
            <div class="container">
                <?= $this->section("content"); ?>
            </div>
        </div>
        <!-- Content end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Script -->
    <script src="<?= theme("/assets/scripts.js", CONF_VIEW_THEME); ?>"></script>
    <?= $this->section("scripts"); ?>
</body>
</html>