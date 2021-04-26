<?php
class Template extends SmartyBC{
    function __construct()
    {
        parent:: __construct();

        //$smarty = new Smarty();

        $this->setTemplateDir('view/');
        $this->setCompileDir('view/compile/');
        $this->setCacheDir('view/cache/');

    }
}
?>