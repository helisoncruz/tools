<?php $this->layout("_theme"); ?>

<div class="container py-3 py-lg-5">
    <div class="row">
        <div class="col-12">
            <?php if($type == "encode"): ?>
                <h2 class="mb-3">Codifique para o formato Base64</h2>
            <?php else: ?>
                <h2 class="mb-3">Decodifique a partir do formato Base64</h2>
            <?php endif; ?>
        </div>
        <div class="col-12"><p>Basta inserir seus dados e pressionar o botão de codificação/decodificação</p></div>
        <?php if($result): ?>
        <div class="col-12">
            <div class="bg-white shadow-sm rounded border p-4 mb-4">
                <h6 class="text-3 mb-4 fw-400 text-success">RESULTADO</h6>
                <div class="text-wrap text-break"><?= $result; ?></div>
            </div>
        </div>
        <?php endif; ?>
        <div class="col-12">
            <form action="<?= url("base64/{$type}"); ?>" method="post">
                <?= csrf_input(); ?>
                <textarea id="texto" name="text" class="form-control p-4 mb-5 bg-white shadow-sm rounded border" placeholder="Comece a digitar ou cole seu texto aqui..."><?= $text ?? ""; ?></textarea>
                <input type="submit" class="btn btn-sm btn-success shadow-none" value="<?= ($type == "encode" ? "Codificar Agora" : "Decodificar Agora"); ?>">
            </form>
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
            <h2 class="mb-3">O que é Base64?</h2>
            <p>Base64 é um método para codificação de dados para transferência na Internet (codificação MIME para transferência de conteúdo) . É utilizado frequentemente para transmitir dados binários por meios de transmissão que lidam apenas com texto, como por exemplo para enviar arquivos anexos por email.</p>
            <p>É constituído por 64 caracteres ([A-Za-z0-9], "/" e "+") que deram origem ao seu nome. O carácter "=" é utilizado como um sufixo especial e a especificação original (RFC 989) definiu que o símbolo "*" pode ser utilizado para delimitar dados convertidos, mas não criptografados, dentro de um stream.</p>
            <p>Exemplo de codificação:</p>
            <pre><code>Texto original: hello world 
Texto convertido para Base64: aGVsbG8gd29ybGQK</code></pre>
            <p>A codificação Base64 é frequentemente utilizada quando existe uma necessidade de transferência e armazenamento de dados binários para um dispositivo designado para trabalhar com dados textuais. Esta codificação é amplamente utilizada por aplicações em conjunto com a linguagem de marcação XML, possibilitando o armazenamento de dados binários em forma de texto.</p>
            <p><a href="http://pt.wikipedia.org/wiki/Base64" target="_blank">Fonte: Wikipedia, 2022.</a></p>
        </div>
    </div>
</div>


