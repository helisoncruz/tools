<?php 
namespace Source\App;

use Source\Core\Controller;

class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(?array $data): void
    {
        $head = $this->seo->render(
            "Ferramentas e Aplicativos Online | " . CONF_SITE_NAME,
            "Ferramentas e aplicativos online de manipulação de texto, sorteio, código de barras, data e hora, criptografia, números aleatórios, entre outras.",
            url("/"),
            theme("/assets/images/shared.jpg")
        );
        
        echo $this->view->render("home", [
            "head" => $head
        ]);
    }

    public function charCounter(?array $data): void
    {
        $head = $this->seo->render(
            "Contador de Caracteres, Palavras e Linhas | " . CONF_SITE_NAME,
            "O Contador de Caracteres é uma ferramenta simples, ele conta caracteres e palavras em um texto. Comece a contar agora!",
            url("/contadorcaracteres"),
            theme("/assets/images/contadorcaracteres.jpg")
        );

        echo $this->view->render("counter-chars", [
            "head" => $head
        ]);
    }

    public function codeBase64(?array $data): void
    {
        $result = null;
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if (!empty($data['csrf'])) {
            if (!csrf_verify($data['csrf'])) {
                $result = ($data['type'] == "encode" ? base64_encode($data['text']) : base64_decode($data['text']));
            }
        }


        $title = "Base64 Encode e Decode Online";
        $description = "Codifique para o formato Base64 ou decodifique a partir dele com várias opções avançadas. Nosso site tem uma ferramenta online fácil de usar para converter seus dados.";
        if (!empty($data['type']) && $data['type'] == "decode") {
            $title = "Base64 Decode e Encode Online";
            $description = "Decodifique para o formato Base64 ou decodifique a partir dele com várias opções avançadas. Nosso site tem uma ferramenta online fácil de usar para converter seus dados.";
        }

        $head = $this->seo->render(
            "{$title} | " . CONF_SITE_NAME,
            "{$description}",
            url("/base64/{$data['type']}"),
            theme("/assets/images/base64.jpg")
        );

        echo $this->view->render("code-base64", [
            "head" => $head,
            "type" => $data['type'],
            "text" => $data['text'] ?? "",
            "result" => $result
        ]);
    }


    /**
    * TERMS
    */
    public function terms(): void
    {
        $head = $this->seo->render(
            "Termos de Uso | " . CONF_SITE_NAME,
            "Ao acessar ao site " . CONF_SITE_NAME . " concorda em cumprir estes termos de serviço, todas as leis e regulamentos.",
            url("/termos-de-uso"),
            theme("/assets/images/shared.jpg")
        );

        echo $this->view->render("terms", [
            "head" => $head
        ]);
    }

    /**
    * POLICY
    */
    public function policy(): void
    {
        $head = $this->seo->render(
            "Política de Privacidade | " . CONF_SITE_NAME,
            "A sua privacidade é importante para nós. É política do " . CONF_SITE_NAME . " respeitar a sua privacidade em relação a qualquer informação sua.",
            url("/politica-de-privacidade"),
            theme("/assets/images/shared.jpg")
        );

        echo $this->view->render("policy", [
            "head" => $head
        ]);
    }

}

