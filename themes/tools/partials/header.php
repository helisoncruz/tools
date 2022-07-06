<!-- Header -->
<header id="header">
    <div class="container">
        <div class="header-row">
            <div class="header-column justify-content-start">
                
                <!-- Logo -->
                <div class="logo">
                    <a class="d-flex" href="<?= url(); ?>" title="<?= CONF_SITE_NAME; ?>">
                        <img src="#" width="121" height="33" alt="<?= CONF_SITE_NAME; ?>" />
                    </a>
                </div>
                <!-- Logo end -->
                
                <!-- Collapse Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"> 
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Collapse Button end -->

                <!-- Primary Navigation -->
                <nav class="primary-menu navbar navbar-expand-lg">
                    <div id="header-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <!-- <li><a href="<?= url(); ?>">Ferramentas</a></li> -->
                            <li class="dropdown"> 
                                <a class="dropdown-toggle" href="#" title="Ferramentas">Contadores</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= url("/contadorcaracteres"); ?>">Contador de Caracteres</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Primary Navigation end -->
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
