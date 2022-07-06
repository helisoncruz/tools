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
        var_dump($data);
    }

    
    public function charCouter(?array $data): void
    {
        # code...
    }
}

