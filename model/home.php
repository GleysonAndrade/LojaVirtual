<?php
$smart = new Template();    
$smart->assign('BANNER', Rotas::ImageLink('banner.jpg', 750,230));
$smart->display('home.tpl');
include_once Rotas::get_Pasta_Controller() . '/produto.php';
?>