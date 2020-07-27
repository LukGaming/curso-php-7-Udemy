<?php
class Produto{
    private $id;
    private $nome;
    private $qtd_disponivel;
    private $descricao;
    private $valor_produto;
    private $id_vendedor;
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getValorProduto(){
        return $this->valor_produto;
    }
    public function setValorProduto($valor_produto){
        $this->valor_produto = $valor_produto;
    }
    public function getIdVendedor(){
        return $this->id_vendedor;
    }
    public function setIdVendedor($id_vendedor){
        $this->id_vendedor = $id_vendedor;
    }
    public function getQtdDisponivel(){
        return $this->qtd_disponivel;
    }
    public function setQtdDisponivel($qtd_disponivel){
        $this->qtd_disponivel = $qtd_disponivel;
    }
    static function getListofProducts(){
        $sql = new Sql();
        return $sql->select("select * from produto");
    }
    public function getProductById($id_produto){
        $sql = new Sql();
        $resultado = $sql->select("select * from produto WHERE id_produto = :ID_PRODUTO", array(
            ":ID_PRODUTO"=>$id_produto
        ));
        if(count($resultado)>0){
            $row = $resultado[0];
            $this->constructProduto($row);
        }
        else{
            echo "Produto nao encontrado";
        }
    }
    public function constructProduto($data){
        $this->setId($data['id_produto']);
        $this->setNome($data['nome_produto']);
        $this->setQtdDisponivel($data['qtd_disponivel']);
        $this->setDescricao($data['descricao_produto']);
        $this->setIdVendedor($data['id_vendedor']);
        $this->setValorProduto($data['valor_produto']);
    }
    
    public function __toString(){
        return json_encode(array(
            "id"=>$this->getId(),
            "nome"=>$this->getNome(),
            "qtd_disponivel"=>$this->getQtdDisponivel(),
            "valor"=>$this->getValorProduto(),
            "descricao"=>$this->getDescricao(),
            "id_vendedor"=>$this->getIdVendedor()
        ));
    }
    public function __construct($id = "",$nome = "",$qtd_disponivel = "", $descricao = "", $valor_produto = "", $id_vendedor = ""){
        $this->id = $id;
        $this->nome = $nome;
        $this->qtd_disponivel = $qtd_disponivel;
        $this->descricao = $descricao;
        $this->id_vendedor = $id_vendedor;
        $this->valor_produto = $valor_produto;
    }
}

?>
