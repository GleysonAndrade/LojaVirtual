<?php
Class Rotas{
    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    private static $pasta_ADM= 'adm';

    static function get_SiteHOME(){
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }

    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }

    static function get_SiteTEMA(){
        return self:: get_SiteHOME() . '/' .self::$pasta_view;
    }

    static function pag_Carrinho(){
        return self:: get_SiteHOME() . '/carrinho' ;
    }

    static function pag_ClientePedido(){
        return self:: get_SiteHOME() . '/cliente_pedido' ;
    }

    static function pag_ClienteCadastro(){
        return self:: get_SiteHOME() . '/cadastro' ;
    }

    static function pag_ClienteDados(){
        return self:: get_SiteHOME() . '/cliente_dados' ;
    }

    static function pag_ClienteSenha(){
        return self:: get_SiteHOME() . '/cliente_senha' ;
    }

    static function pag_ClienteRecovery(){
        return self:: get_SiteHOME() . '/cliente_recovery' ;
    }

    static function pag_ClienteItens(){
        return self:: get_SiteHOME() . '/cliente_itens' ;
    }

    static function pag_ClienteLogin(){
        return self:: get_SiteHOME() . '/login' ;
    }

    static function pag_Logoff(){
        return self:: get_SiteHOME() . '/logoff' ;
    }

    static function pag_CarrinhoAlterar(){
        return self:: get_SiteHOME() . '/carrinho_alterar' ;
    }
    
    static function pag_Produto(){
		return  self::get_SiteHOME(). '/produto';
	}

	static function pag_ProdutoInfo(){
		return  self::get_SiteHOME(). '/produto_info';
	}

    static function pag_Contato(){
        return self:: get_SiteHOME() . '/contato' ;
    }

    static function pag_MinhaConta(){
        return self:: get_SiteHOME() . '/minhaconta';
    }

    static function pag_ClienteConta(){
        return self:: get_SiteHOME() . '/minhaconta';
    }

    static function pag_PedidoConfirmar(){
        return self:: get_SiteHOME() . '/pedido_confirmar';
    }

    static function pag_PedidoFinalizar(){
        return self:: get_SiteHOME() . '/pedido_finalizar';
    }
        static function get_ImagePasta(){
            return 'media/images/';
        }
    
        static function get_ImageURL(){
            return self::get_SiteHOME() .'/' .self::get_ImagePasta();
    
        }
    
        static function ImageLink($img, $largura, $altura){
            $imagem = self::get_ImageURL() ."thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
    
            return $imagem;
    
        }

        static function get_Pasta_Controller(){
            return self::$pasta_controller;
        }

        //ROTAS PARA ÁREA ADMINISTRATIVA

        static function get_SiteADM(){
            return self:: get_SiteHOME() . '/' .self::$pasta_ADM;
        }  
        
        static function pag_ProdutoADM(){
            return self:: get_SiteADM() . '/adm_produto';
        }

        static function pag_ProdutoNovoADM(){
            return self:: get_SiteADM() . '/adm_produto_novo';
        }

        static function pag_ProdutoEditarADM(){
            return self:: get_SiteADM() . '/adm_produto_editar';
        }

        static function pag_ProdutoDeletarADM(){
            return self:: get_SiteADM() . '/adm_produto_deletar';
        }

        static function pag_ProdutoImgADM(){
            return self:: get_SiteADM() .'/adm_produto_img';
        }

        static function pag_ClienteADM(){
            return self:: get_SiteADM() . '/adm_cliente';
        }

        static function pag_ClienteEditarADM(){
            return self:: get_SiteADM() . '/adm_cliente_editar';
        }

        static function pag_PedidoADM(){
            return self:: get_SiteADM() . '/adm_pedido';
        }

        static function pag_ItensADM(){
            return self:: get_SiteADM() . '/adm_itens';
        }

        static function pag_CategoriaADM(){
            return self:: get_SiteADM() . '/adm_categoria';
        }

        //Métado para Redirecionar
        static function Redirecionar($tempo, $pagina){
            $url = '<meta http-equiv="refresh" content="'.$tempo.';url='.$pagina.'">';
            echo $url;
        }

    static function get_Pagina(){
        if(isset($_GET['pag'])){

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);

            //echo '<pre>';
                //var_dump(self::$pag);
            //echo '</pre>';

            $pagina = 'controller/' .self::$pag[0] . '.php';

            //$pagina = 'controller/' .$_GET['pag'] . '.php';

            if(file_exists($pagina)){
                include $pagina; 

            }else{
                include 'erro.php';
            }

        }else{
            include 'home.php';
        }
    }
}
    
?>