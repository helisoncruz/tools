<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= theme("/assets/images/favicon.ico", CONF_VIEW_THEME); ?>" type="image/x-icon">
    <link rel="icon" href="<?= theme("/assets/images/favicon.ico", CONF_VIEW_THEME); ?>" type="image/x-icon">
    
    <?= $head; ?>
    
    <!-- WebFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Gentium+Book+Plus:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" type="text/css">

    <!-- Adsense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8242320593092908" crossorigin="anonymous"></script>

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

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="footer-copyright pt-3 pt-lg-2 mt-2">
                    <div class="row">
                        <div class="col-lg">
                            <p class="text-center text-lg-start mb-2 mb-lg-0">
                                Copyright &copy; <?= date("Y"); ?> <a href="<?= url("/") ?>" title="<?= CONF_SITE_NAME; ?>"><?= CONF_SITE_NAME; ?></a>. All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"> <a class="nav-link" href="<?= url("/termos-de-uso") ?>" title="Termos de Uso">Termos de Uso</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?= url("/politica-de-privacidade") ?>" title="Política de Privacidade">Política de Privacidade</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Script -->
    <script src="<?= theme("/assets/scripts.js", CONF_VIEW_THEME); ?>"></script>
    <?= $this->section("scripts"); ?>
</body>
</html>