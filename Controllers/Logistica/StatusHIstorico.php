<?php 
    class StatusHistorico{
        
        private $id;
        private $pedidoId;
        private $statusAnterior;
        private $statusNovo;
        private $timestamp;
        private $origem;
        private $coodernadasOrigem;
        private $observacao;
    public function getId(){
    return $this->id;
}
    public function setId($new_id){
    $this->id = $new_id;
}

        public function __construct($id, $pedidoId, $anterior, $novo, $ts, $origem, $coodernadas, $obs){
            $this->id = $id;
            $this->pedidoId = $pedidoId;
            $this->statusAnterior = $anterior;
            $this->statusNovo = $novo;
            $this->timestamp = $ts;
            $this->origem = $origem;
            $this->coodernadasOrigem = $coodernadas;
            $this->observacao = $obs;        
        }

    public function getId(){
    return $this->id;
}
    public function setId($new_id){
    $this->id = $new_id;
}
    public function getPedidoId(){
    return $this->pedidoId;
}
    public function setPedidoId($idPedido){
    $this->idPedido = $idPedido;
}
    public function getStatusAnterior(){
    return $this->statusAnterior;
}
    public function setStatusAnterior($st_anterior){
    $this->statusAnterior = $st_anterior;
}
    public function getStatusNovo(){
    return $this->statusNovo;
}
    public function setStatusNovo($st_novo){
    $this->statusNovo = $st_novo;
}
    public function getTimestamp(){
    return $this->timestamp;
}
    public function setTimestamp($ts){
    $this->timestamp = $ts;
}
    public function getOrigem(){
    return $this->origem;
}
    public function setOrigem($origem){
    $this->origem = $origem;
}
    public function getCoodernadasOrigem(){
    return $this->coodernadasOrigem;
}
    public function setCoodernadasOrigem($coodernadas){
    $this->coodernadasOrifem = $coodernadas;
}
    public function getObservacao(){
    return $this->observacao;
}
    public function setObservacao($obs){
    $this->observacao = $obs;
}
        public function validarTransicao(){
        
        }

        public function gerarRelatorio(){
        
        }
    }

?>
