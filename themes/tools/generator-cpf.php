<?php $this->layout("_theme"); ?>

<div class="container py-3 py-lg-5">
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-2">Gerador de CPF</h2>
        </div>
        <div class="col-8">
            <p>Utilize nosso gerador de cpf, basta clicar em "Gerar CPF" e pronto!!! Um novo número de CPF válido será gerado. Você ainda tem opção de colocar ou não os "pontos" entre os números.</p>
        </div>
        <div class="col-12">
            <hr class="my-3">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-6">
            <form action="<?= url("gerador/cpf"); ?>" method="post">
                <?= csrf_input(); ?>
                <div class="row g-3 align-items-center">
                    <div class="col-12 switch-lg">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="numbers" id="numbers" value="s">
                            <label class="form-check-label" for="numbers">Gerar apaenas números?</label>
                        </div>
                    </div>
                    <div class="col-auto"> <input type="text" id="cpf" class="form-control form-control-sm cpf" size="35" placeholder="O CPF gerado aparece aqui." readonly> </div>
                    <div class="col-auto"> <input type="submit" class="btn btn-sm btn-success shadow-none" value="Gerar CPF"> </div>
                </div>
            </form>
        </div>
        <div class="col-6">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="alert alert-info text-3">
                <b>IMPORTANTE</b>: Nosso gerador online de CNPJ tem como intenção ajudar estudantes, programadores, analistas e testadores a gerar CPF válidos.
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