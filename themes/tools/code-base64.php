<?php $this->layout("_theme"); ?>

<div class="row">
    <div class="col-12">
        <?php if($type == "encode"): ?>
            <h2 class="mb-3">Codifique para o formato Base64</h2>
        <?php else: ?>
            <h2 class="mb-3">Decodifique a partir do formato Base64</h2>
        <?php endif; ?>
    </div>
    <div class="col-12"><p>Basta inserir seus dados e pressionar o botão de codificação/decodificação</p></div>
    <div class="col-12">
        <?php if($result): ?>
            <textarea id="texto" name="result" class="form-control mb-3"><?= $result; ?></textarea>
        <?php endif; ?>
        <form action="<?= url("base64/{$type}"); ?>" method="post">
            <?= csrf_input(); ?>
            <textarea id="texto" name="text" class="form-control mb-5" placeholder="Comece a digitar ou cole seu texto aqui..."><?= $text ?? ""; ?></textarea>
            <input type="submit" class="btn btn-sm btn-success shadow-none" value="<?= ($type == "encode" ? "Codificar Agora" : "Decodificar Agora"); ?>">
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <!-- Adesense 1 -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8242320593092908" data-ad-slot="2374530016" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script> (adsbygoogle = window.adsbygoogle || []).push({});  </script>
        <!-- Adesense 1 end -->
    </div>
</div>


