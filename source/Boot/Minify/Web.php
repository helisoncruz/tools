<?php
if (strpos(url(), "localhost")) {

    // CSS
    $minifyCSS = new MatthiasMullie\Minify\CSS();
    $minifyCSS->add(__DIR__ . "/../../../shared/bootstrap/css/bootstrap.min.css");

    $cssDir = scandir(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/css");
    foreach ($cssDir as $css) {
        $cssFile = __DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minifyCSS->add($cssFile);
        }
    }

    $minifyCSS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/styles.css");
    // CSS END

    // JS
    $minifyJS = new \MatthiasMullie\Minify\JS();
    $minifyJS->add(__DIR__ . "/../../../shared/jquery/jquery.min.js");
    $minifyJS->add(__DIR__ . "/../../../shared/bootstrap/js/bootstrap.bundle.js");

    $jsDir = scandir(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/js");
    foreach ($jsDir as $js) {
        $jsFile = __DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minifyJS->add($jsFile);
        }
    }

    $minifyJS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_THEME . "/assets/scripts.js");
    // JS END
}