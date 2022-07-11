<?php $this->layout("_theme"); ?>

<div class="container py-3 py-lg-5">
    <div class="row g-4">
        <div class="col-12">
            <h3 class="mb-3 text-info">Ferramentas para Análise de Texto</h3>
            <div class="p-4 shadow-sm rounded bg-white">
                <ul class="m-0 p-0 list-unstyled">
                    <li>
                        <a href="<?= url("/contadorcaracteres"); ?>" title="Contador de Caracteres">
                            <h5 class="text-5 mb-0 text-hover">Contador de Caracteres</h5>
                            <p class="mb-0 text-muted">Calcula quantos caracteres, palavras e linhas existem no texto.</p>
                        </a>
                    </li>
                    <li class="border-top mt-3 pt-3">
                        <a href="<?= url("/converter/maiusculas-minusculas"); ?>" title="Contador de Caracteres">
                            <h5 class="text-5 mb-0 text-hover">Converter Maiúsculas e Minúsculas</h5>
                            <p class="mb-0 text-muted">Ferramenta para converter um texto em letras maiúsculas ou minúsculas.</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="col-12">
            <h3 class="mb-3 text-danger">Criptografia e Codificação</h3>
            <div class="p-4 shadow-sm rounded bg-white">
                <ul class="m-0 p-0 list-unstyled">
                    <li>
                        <a href="<?= url("/base64/encode"); ?>" title="Contador de Caracteres">
                            <h5 class="text-5 mb-0 text-hover">Base64 Encode Online</h5>
                            <p class="mb-0 text-muted">Codifique para o formato Base64 de maneira fácil e rápida.</p>
                        </a>
                    </li>
                    <li class="border-top mt-3 pt-3">
                        <a href="<?= url("/base64/decode"); ?>" title="Contador de Caracteres">
                            <h5 class="text-5 mb-0 text-hover">Base64 Decode Online</h5>
                            <p class="mb-0 text-muted">Decodifique a partir do formato Base64 de maneira fácil e rápida.</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <!-- Adesense 1 -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8242320593092908" data-ad-slot="2374530016" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script> (adsbygoogle = window.adsbygoogle || []).push({});  </script>
            <!-- Adesense 1 end -->
        </div>
    </div>
</div>