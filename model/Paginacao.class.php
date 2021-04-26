<?php
class Paginacao extends Conexao{
    public $limite, $inicio, $totalpag, $link = array();
    function GetPaginacao($campo, $tabela){
        $query = "SELECT {$campo} FROM {$tabela}";
        $this->ExecuteSQL($query);
        $total = $this->TotalDados();

        $this->limite = Config::BD_LIMITE_POR_PAG;
        $pagina = ceil($total / $this->limite);
        $this->totalpag = $pagina;

        $p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

        if($p > $pagina){
            $p = $pagina;
        }

        $this->inicio = ($p * $this->limite) - $this->limite;

        $tolerancia = 6;
        $mostrar = $p + $tolerancia;
        if($mostrar > $pagina){
           $mostrar = $pagina;     
        }

        for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
            if($i < 1){
                $i = 1;
            }
            array_push($this->link, $i);
        endfor;
    }
}
?>