<?php

namespace App;
use App\Exception\ViewNotFoundException;

class View
{
    public function __construct
    (protected string $view, protected array $params = [])
    {
        
    }

    public static function make
    (string $view, array $params = []) : static
    {
        return new static($view, $params);
    }

    public function render(bool $withLayout = false) : string
    {    
        $headerPath = INCLUDE_PATH . '/header.php';        
        $footerPath = INCLUDE_PATH . '/footer.php';        

        $viewPath = VIEWS_PATH . '/'. $this->view . '.php';

        extract($this->params);
        
        if(file_exists($viewPath))
        {
            $withLayout = true;

        }
        if(! file_exists($viewPath))
        {
            throw new ViewNotFoundException(); 
        }
        if($withLayout) {
        ob_start();

        foreach([$headerPath,$viewPath,$footerPath] as $f) include_once($f);
        return include $pages;
        }
        else
        return include $viewPath;

        return ob_get_clean();
    }
    public function __toString()
    {
        return $this->render();
    }
}
