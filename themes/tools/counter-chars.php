<?php $this->layout("_theme"); ?>

<div class="row">
    <div class="col-12"><h2 class="mb-5">Contador de Caracteres e Contador de Palavras, online e gratuito!</h2></div>
    <div class="col-12"><p>O <b><a tile="Contador de Caracteres: Contagem de Caracteres, Palavras e Linhas Online" href="https://contadorcaracteres.com.br/">Contador de Caracteres</a></b> é uma ferramenta muito simples: ele simplesmente conta caracteres e palavras em um texto. Basta você ir digitando o texto no box e o <b>Contador de Caracteres</b> vai te mostrando, em tempo real, a contagem de palavras e caracteres&nbsp;do seu texto. Se preferir, você também pode copiar e colar do Bloco de Notas (ou do seu Editor de Texto predileto) algum texto que você já tenha escrito para visualizar a contagem de caracteres e palavras.</p></div>
    <div class="col-12"><hr class="my-3"></div>
    <div class="col-12">
        <!-- Adesense 1 -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8242320593092908" data-ad-slot="2374530016" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script> (adsbygoogle = window.adsbygoogle || []).push({});  </script>
        <!-- Adesense 1 end -->
    </div>
    <div class="col-12"><hr class="my-3"></div>
</div>

<div class="row mb-3">
    <div class="col-12"><h2 class="mb-4"><b>Contador de Caracteres</b> e Palavras</h2> </div>
    <div class="col-12"><textarea id="texto" class="form-control" placeholder="Comece a digitar ou cole seu texto aqui..."></textarea> </div>
</div>

<div class="row mb-3" id="resultado">
    <div class="col-12"><p class="mb-0">Caracteres (com espaços): <span class="textChars">0</span></p> </div>
    <div class="col-12"><p class="mb-0">Caracteres (sem espaços):  <span class="textCharsNoSpaces">0</span></p> </div>
    <div class="col-12"><p class="mb-0">Palavras: <span class="textWords">0</span></p> </div>
    <div class="col-12"><p class="mb-0">Linhas: <span class="textLines">0</span></p> </div>
</div>

<div class="row">
    <div class="col-12">
        <!-- Adesense 1 -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8242320593092908" data-ad-slot="2374530016" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script> (adsbygoogle = window.adsbygoogle || []).push({});  </script>
        <!-- Adesense 1 end -->
    </div>
</div>

<?php $this->start('scripts'); ?>
<script>
    $(function(){
        $(document).on('input', '#texto', function() {
            var text = $(this).val();
            var words = text.match(/\S+/g);
            var result = {
                textChars: text.length,
                textCharsNoSpaces: text.replace(/\s+/g, '').length,
                textWords: words ? words.length : 0,
                textLines: text.split(/\r*\n/).length
            }
            $('.textChars').text(result.textChars);
            $('.textCharsNoSpaces').text(result.textCharsNoSpaces);
            $('.textWords').text(result.textWords);
            $('.textLines').text(result.textLines);
        });
    });
</script>
<?php $this->end(); ?>

