<?php $this->layout("_theme"); ?>

<section class="page-header page-header-text-light bg-dark-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1>Sobre o <?= CONF_SITE_NAME; ?></h1>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                    <li><a href="<?= url(); ?>">Home</a></li>
                    <li class="active">Sobre o <?= CONF_SITE_NAME; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <p>Bem-vindo ao <?= CONF_SITE_NAME; ?>, sua fonte número um para todas as coisas soluções básicas da internet. Estamos dedicados a oferecer a você o melhor de ferramentas práticas, com foco em solucionar problemas, facilidade e uso.</p>
            <p>Nós esperamos que você goste das nossas ferramentas tanto quanto nós gostamos de oferecê-los a você. Se você tiver alguma dúvida ou comentário, não hesite em entrar em contato com nós.</p>
            <p>Sinceramente, equipe <?= CONF_SITE_NAME; ?></p>
        </div>
    </div>
</div>