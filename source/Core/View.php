<?php
namespace Source\Core;

use League\Plates\Engine;

/**
* View class
* @package Source\Core
* @author Helison S. Cruz <helison@agenciahouse.com.br>
*/
class View 
{
    /** @var Engine */
    private $engine;

    /**
    * View constructor.
    */
    public function __construct(string $path = CONF_VIEW_PATH, string $ext = CONF_VIEW_EXT)
    {
        $this->engine = new Engine($path, $ext);
    }

    /**
    * @param array $data
    * @param null $template
    */
    public function addData(array $data, $templates = null)
    {
        $this->engine->addData($data, $templates);
    }

    /**
    * @param string $name
    * @param string $path
    * @return View
    */
    public function path(string $name, string $path): View
    {
        $this->engine->addFolder($name, $path);
        return $this;
    }

    /**
    * @param string $templateName
    * @param array $data
    * @param string $template
    * @return string
    */
    public function render(string $templateName, array $data, string $template = CONF_VIEW_TEMPLATE): string
    {
        $this->engine->addData($data, $template);
        return $this->engine->render($templateName, $data);
    }

    /**
    * @return Engine
    */
    public function engine(): Engine
    {
        return $this->engine();
    }
}