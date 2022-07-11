<?php $this->layout("_theme"); ?>

<div class="container py-3 py-lg-5">
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-2">Gerador de CNPJ</h2>
        </div>
        <div class="col-12 col-8">
            <p>Utilize nosso gerador de cnpj, basta clicar em "Gerar CNPJ" e pronto!!! Um novo número de CNPJ válido será gerado. Você ainda tem opção de colocar ou não os "pontos" entre os números.</p>
        </div>
        <div class="col-12">
            <hr class="my-3">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 col-6">
            <form action="<?= url("gerador/cnpj"); ?>" method="post">
                <?= csrf_input(); ?>
                <div class="row g-3 align-items-center">
                    <div class="col-12 col-auto switch-lg">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="numbers" id="numbers" value="s">
                            <label class="form-check-label" for="numbers">Gerar apaenas números?</label>
                        </div>
                    </div>
                    <div class="col-12 col-auto"> <input type="submit" class="btn btn-sm btn-success shadow-none" value="Gerar CNPJ"> </div>
                    <div class="col-12"> <hr class="my-3"> </div>
                    <div class="col-12"> 
                        <div class="row align-items-center">
                            <div class="col-auto"> RESULTADO: </div>
                            <div class="col-auto"> 
                                <div class="input-group">
                                    <input type="text" id="cnpj" class="form-control form-control-sm cnpj field-to-copy" size="35" placeholder="O CNPJ gerado aparece aqui."> 
                                    <span class="input-group-text"> <span class="material-icons-round copy" data-copy>content_copy</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="alert alert-info text-3">
                <b>IMPORTANTE</b>: Nosso gerador online de CNPJ tem como intenção ajudar estudantes, programadores, analistas e testadores a gerar CNPJ válidos.
                Normalmente necessários parar testar seus softwares em desenvolvimento. A má utilização dos dados aqui gerados é de total responsabilidade
                do usuário. Os números são gerados de forma aleatória, respeitando as regras de criação de cada documento.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <!-- Adesense 1 -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8242320593092908" data-ad-slot="2374530016" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!-- Adesense 1 end -->
        </div>
    </div>

</div>