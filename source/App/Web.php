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
        
        echo $this->view->render("home", [
            "head" => null
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
}

