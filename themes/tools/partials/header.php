<!-- Header -->
<header id="header">
    <div class="container">
        <div class="header-row">
            <div class="header-column justify-content-start">
                
                <!-- Logo -->
                <div class="logo">
                    <a class="d-flex" href="<?= url(); ?>" title="<?= CONF_SITE_NAME; ?>">
                        <img src="<?= theme("/assets/images/logo.png", CONF_VIEW_THEME); ?>" height="100" alt="<?= CONF_SITE_NAME; ?>"/>
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
                            <li><a href="<?= url(); ?>">Home</a></li>
                            <li><a href="<?= url("/sobre"); ?>">Sobre</a></li>
                            <li class="dropdown"> 
                                <a class="dropdown-toggle" href="#" title="Geradores">Geradores</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= url("/gerador/cpf"); ?>" title="Gerador de CPF">Gerador de CPF</a></li>
                                    <li><a class="dropdown-item" href="<?= url("/gerador/cnpj"); ?>" title="Gerador de Cnpj">Gerador de Cnpj</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"> 
                                <a class="dropdown-toggle" href="#" title="Ferramentas">Contadores</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= url("/contadorcaracteres"); ?>" title="Contador de Caracteres">Contador de Caracteres</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"> 
                                <a class="dropdown-toggle" href="#" title="Criptografia e Codificação">Criptografia e Codificação</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= url("/base64/encode"); ?>" title="Base64 Encode Online">Base64 Encode Online</a></li>
                                    <li><a class="dropdown-item" href="<?= url("/base64/decode"); ?>" title="Base64 Decode Online">Base64 Decode Online</a></li>
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
