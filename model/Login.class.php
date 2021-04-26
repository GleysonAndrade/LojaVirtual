<?php
class Login extends Conexao{
    private $user, $senha;
    function __construct()
    {
        parent::__construct();
    }
    function GetLogin($user,$senha){
        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}cliente WHERE cli_email = :email AND cli_pass = :senha";

        $params = array(
            ':email' => $this->getUser(),
            ':senha' => $this->getSenha(),
        );

        $this->ExecuteSQL($query, $params);

        if($this->TotalDados() > 0){
            $lista = $this->ListarDados();
            $_SESSION['cli']['cli_id'] = $lista['cli_id'];
            $_SESSION['cli']['cli_nome'] = $lista['cli_nome'];
            $_SESSION['cli']['cli_sobrenome'] = $lista['cli_sobrenome'];
            $_SESSION['cli']['cli_endereco'] = $lista['cli_endereco'];
            $_SESSION['cli']['cli_numero'] = $lista['cli_numero'];
            $_SESSION['cli']['cli_bairro'] = $lista['cli_bairro'];
            $_SESSION['cli']['cli_cidade'] = $lista['cli_cidade'];
            $_SESSION['cli']['cli_uf'] = $lista['cli_uf'];
            $_SESSION['cli']['cli_cpf'] = $lista['cli_cpf'];
            $_SESSION['cli']['cli_cep'] = $lista['cli_cep'];
            $_SESSION['cli']['cli_rg'] = $lista['cli_rg'];
            $_SESSION['cli']['cli_ddd'] = $lista['cli_ddd'];
            $_SESSION['cli']['cli_fone'] = $lista['cli_fone'];
            $_SESSION['cli']['cli_email'] = $lista['cli_email'];
            $_SESSION['cli']['cli_celular'] = $lista['cli_celular'];
            $_SESSION['cli']['cli_data_nasc'] = $lista['cli_data_nasc'];
            $_SESSION['cli']['cli_data_cad'] = $lista['cli_data_cad'];
            $_SESSION['cli']['cli_pass'] = $lista['cli_pass'];

            Rotas::Redirecionar(0, Rotas::pag_ClienteLogin());

        }else{
            echo '<script> alert("Dados Incorretos!!");</script>';
        }
    }

    static function AcessoNegado(){
        echo '<div class="alert alert-danger"><a href="'.Rotas::pag_ClienteLogin().'"</a> Acesso Negado</div>';
    }

    function GetLoginADM($user,$senha){
        
        $this->setUser($user);
        $this->setSenha($senha);
        
        $query = "SELECT * FROM {$this->prefix}user WHERE user_email = :email AND user_pw = :senha";
        
        $params = array(':email'=>  $this->getUser(),
                        ':senha'=>  $this->getSenha());
        
           $this->ExecuteSQL($query,$params);
           
           // caso o login seja efetivado com exito 
           if($this->TotalDados() > 0):
               
             $lista = $this->ListarDados();
               
             $_SESSION['ADM']['user_id']     =  $lista['user_id'];
             $_SESSION['ADM']['user_nome']   =  $lista['user_nome'];
             $_SESSION['ADM']['user_email']  =  $lista['user_email'];
             $_SESSION['ADM']['user_pw']     =  $lista['user_pw'];
             $_SESSION['ADM']['user_data']     = Sistema::DataAtualBR();
             $_SESSION['ADM']['user_hora']     = Sistema::HoraAtual();

             return TRUE;
           // caso o login seja incorreto 
           else:    
               
               
                echo '<h4 class="alert alert-danger"> O login incorreto </h4>';  
                //  Rotas::Redirecionar(1,  Rotas::pag_ClienteLogin() );
           
                return FALSE;
           endif;
    }

    static function Logado(){
        if(isset($_SESSION['cli']['cli_email']) && isset($_SESSION['cli']['cli_id'])){
            return true;
        }else{
            return false;
        }
    }

    static function LogadoADM(){
        if(isset($_SESSION['ADM']['user_nome']) && isset($_SESSION['ADM']['user_id'])){
            return true;
        }else{
            return false;
        }
    }

    static function Logoff(){
        unset($_SESSION['cli']);
        echo '<h4 class="alert alert-success">Saindo...</h4>';
        Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
    }

    //Mostrar menu do cliente

    static function MenuCliente(){
        
        // verifo se não esta logado 
               if(!self::Logado()):
                   self::AcessoNegado();
                   Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());           
                   // caso nao redirecione  saiu  do bloco
                   exit();          
               // caso esteja mostra a tela minha conta 
               else: 
           $smarty = new Template();
           $smarty->assign('PAG_CONTA', Rotas::pag_ClienteConta());
           $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
           $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
           $smarty->assign('PAG_CLIENTE_PEDIDO', Rotas::pag_ClientePedido());
           $smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_CLienteDados());
           $smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_CLienteSenha());
           $smarty->assign('USER', $_SESSION['cli']['cli_nome']);
           $smarty->display('menu_cliente.tpl');
           
                 endif;
       }

    private function setUser($user){
        $this->user = $user;
    }

    private function setSenha($senha){
        $this->senha = /*Sistema::Criptografia(*/md5($senha)/*)*/;
    }

    function getUser(){
        return $this->user;
    }

    function getSenha(){
        return $this->senha;
    }
}
?>