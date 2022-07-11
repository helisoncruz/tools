<?php $this->layout("_theme"); ?>

<div class="container py-3 py-lg-5">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-3">Converter Maiúsculas e Minúsculas</h2>
            <p>Acidentalmente deixou o caps lock ligado e digitou algo, mas não pode se dar ao trabalho de começar de novo e redigitar tudo? Basta digitar seu texto e escolher o caso para o qual deseja convertê-lo de maiúscula para minúscula, ou converter de minúscula para maiúscula.</p>
        </div>
        <div class="col-12">
            <textarea id="text" name="text" class="form-control p-4 mb-2 bg-white shadow-sm rounded border" placeholder="Comece a digitar ou cole seu texto aqui..."><?= $text ?? ""; ?></textarea>
            <input type="hidden" id="ignored_words" value="a, o, as, os, de, dos, das, do, da, e, ou, para, por, no, na, nos, nas">
            
            <div class="d-flex mb-5" id="resultado">
                <p class="mb-0">Caracteres (com espaços): <span class="textChars">0</span></p>
                <p class="mx-2">|</p>
                <p class="mb-0">Caracteres (sem espaços):  <span class="textCharsNoSpaces">0</span></p>
                <p class="mx-2">|</p>
                <p class="mb-0">Palavras: <span class="textWords">0</span></p>
                <p class="mx-2">|</p>
                <p class="mb-0">Linhas: <span class="textLines">0</span></p>
            </div>
            
            <div class="row g-3">
                <div class="col-auto"><input type="submit" class="btn btn-sm btn-secondary shadow-none" value="Caixa Baixa (minúsculas)" data-lower></div>
                <div class="col-auto"><input type="submit" class="btn btn-sm btn-secondary shadow-none" value="Caixa Alta (MAIÚSCULAS)" data-upper></div>
                <div class="col-auto"><input type="submit" class="btn btn-sm btn-secondary shadow-none" value="Título (Title Case)" data-title></div>
                <div class="col-auto"><input type="submit" class="btn btn-sm btn-secondary shadow-none" value="Alternado (aLtErNaTiNg cAsE)" data-textalt></div>
                <div class="col-auto"><input type="submit" class="btn btn-sm btn-secondary shadow-none" value="Capitalizado (Capitalized Case)" data-cap></div>
                <div class="col-auto"><input type="submit" class="btn btn-sm btn-secondary shadow-none" value="Inverter (InVeRsE CaSe)" data-inverse></div>
                <div class="col-auto"><input type="submit" class="btn btn-sm btn-secondary shadow-none" value="Selecionar Texto" data-select></div>
            </div>
        </div>
    </div>

    <div class="row p-5">
        <div class="col-12">
            <!-- Adesense 1 -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8242320593092908" data-ad-slot="2374530016" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script> (adsbygoogle = window.adsbygoogle || []).push({});  </script>
            <!-- Adesense 1 end -->
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="mb-3">O que é Caixa alta e Caixa baixa?</h2>
            <p>Caixa alta é uma expressão usada em tipografia para referir à escrita com letras maiúsculas. É o mesmo que versais ou capitais.</p>
            <p>Caixa baixa, por sua vez, corresponde à escrita com letras minúsculas.</p>
            <p>A terminologia caixa-alta e caixa-baixa é usada nos sectores e profissões editoriais (editores, revisores, grafistas, jornalistas). Maiúsculas e minúsculas são os termos usados na linguística, e nas ciências humanas em geral.</p>
            <p><a href="https://pt.wikipedia.org/wiki/Caixa_alta_e_caixa_baixa" target="_blank">Fonte: Wikipedia, 2022.</a></p>
        </div>
    </div>

</div>


