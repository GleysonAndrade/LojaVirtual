<?php
class Carrinho{
    private $total_valor, $total_peso, $itens = array();

    function GetCarrinho($sessao=NULL){
        $i = 1; $sub = 1.00; $peso = 0;

      foreach($_SESSION['pro'] as $lista){
        $sub = ($lista['valor_us'] * $lista['qtd']);
        $this->total_valor = $sub;
        $peso = $lista['peso'] * $lista['qtd'];
        $this->total_peso += $peso;
        
        $this->itens[$i] = array(
            'pro_id' => $lista['id'],
            'pro_nome' => $lista['nome'],
            'pro_valor' => $lista['valor'], //1.000,99
            'pro_valor_us' => $lista['valor_us'], //1000.99
            'pro_peso' => $lista['peso'],
            'pro_qtd' => $lista['qtd'],
            'pro_img' => $lista['img'],
            'pro_link' => $lista['link'],
            'pro_subTotal' => Sistema::MoedaBR($sub),
            'pro_subTotal_us' => $sub
        );
        $i++;
      } 
      if(count($this->itens) > 0){
        return $this->itens;
    }else{
        echo '<h4 class="alert alert-danger"> Não há produtos no carrinho </h4>';
      } 
    }

    function GetTotal(){
        return $this->total_valor;
    }

    function GetPeso(){
        return $this->total_peso;
    }

    function CarrinhoAdd($id){
        $produto = new Produto();
        $produto->GetProdutoId($id);
        foreach($produto->GetItens() as $pro){
            $id = $pro['pro_id'];
            $nome = $pro['pro_nome'];
            $valor_us = $pro['pro_valor_us'];
            $valor = $pro['pro_valor'];
            $peso = $pro['pro_peso'];
            $qtd = 1;
            $img = $pro['pro_img_p'];
            $link = Rotas::pag_ProdutoInfo(). '/'.$id.'/'.$pro['pro_slug'];
            $acao = $_POST['acao'];
        }

        switch($acao){
           case 'add':
            if(!isset($_SESSION['pro'][$id]['id'])){
              $_SESSION['pro'][$id]['id'] = $id;
              $_SESSION['pro'][$id]['nome'] = $nome;
              $_SESSION['pro'][$id]['valor'] = $valor; 
              $_SESSION['pro'][$id]['valor_us'] = $valor_us; 
              $_SESSION['pro'][$id]['peso'] = $peso; 
              $_SESSION['pro'][$id]['qtd'] = $qtd;
              $_SESSION['pro'][$id]['img'] = $img; 
              $_SESSION['pro'][$id]['link'] = $link;   
            }else{
                $_SESSION['pro'][$id]['qtd']   += $qtd;
            }
             echo '<h4 class="alert alert-success"> Produto Inserido! </h4>';

           break;

           case 'del':
            $this->CarrinhoDel($id);
            echo '<h4 class="alert alert-success"> Produto removido com sucesso!! </h4>';
            break;

            case 'limpar':
                $this->CarrinhoLimpar();
                echo '<h4 class="alert alert-success"> Produto removidos!! </h4>';   
            break;
        }
    }

    private function CarrinhoDEL($id){
        unset($_SESSION['pro'][$id]);
    }

    private function CarrinhoLimpar(){
        unset($_SESSION['pro']);
    }
}
?>