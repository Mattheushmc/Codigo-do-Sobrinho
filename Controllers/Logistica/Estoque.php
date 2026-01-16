<?php

class Estoque {

    private $produtoId;
    private $quantidadeDisponivel;
    private $quantidadeReservada;
    private $quantidadeMInima;
    private $localizacao;
    private $ultimaAtualizacao;

    public function __construct($id, $qtDisponivel,$qtReservada, $qtMin, $localizacao, $atualizacao){
        $this->produtoId = $id;
        $this->quantidadeDisponivel = $qtDisponivel;
        $this->quantidadeReservada = $qtReservada;
        $this->quantidadeMinima = $qtMin;
        $this->localizacao = $localizacao;
        $this->ultimaAtualizacao = $atualizacao;
    }

    public function getProdutoId(){
    return $this->produtoId;
}
    public function setProdutoId$id){
    $this->produtoId = $id;
}
    public function getQuantidadeDisponivel(){
    return $this->quantidadeDisponivel;
}
    public function setQuantidadeDisponivel($qtDisponivel){
    $this->quantidadeDisponivel = $qtDisponivel;
}
    public function getQuantidadeReservada(){
    return $this->quantidadeReservada;
}
    public function setQuantidadeReservada($qtRes){
    $this->quantidadeReservada = $qtReservada;
}
    public function getQuantidadeMinima(){
    return $this->quantidadeMinima;
}
    public function setQuantidadeMinima($qtMin){
    $this->quantidadeMinima = $qtMin;
}
    public function getLocalizacao(){
    return $this->localizacao;
}
    public function setLocalizacao($localizacao){
    $this->localizao = $localizacao;
}
    public function getUltimaAtualizacao(){
    return $this->ultimaAtualizacao;
}
    public function setUltimaAtualizacao($atualizacao){
    $this->ultimaAtualizacao = $atualizacao;
}
    public function verificarDisponibilidade($quantidade){
    
    }

    public function bloquearEstoque($pedidoId, $quantidade, $timeout){

    }

    public function liberarBloqueio($bloqueioId){
    
    }

    public function confirmarRetirada($bloqueioId){
    
    }

    public function obterNivelCritico(){
    
    }

    public function registrarMovimentacao($tipo, $quantidade){
    
    }

}

?>
