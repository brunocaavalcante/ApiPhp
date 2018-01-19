<?php

    namespace Lojaagua\entidades;
/**
 * @Entity
 * @Table(name="item")
 */
class Item{
    /**
        * @var integer @Id
        *      @Column(name="id", type="integer")
        *      @GeneratedValue(strategy="AUTO")
    */
    private $id;
    /**
     * @ManytoOne(targetEntity="Pedido")
     * @JoinColumn(name="pedido_id", referencedColumnName="id")  
     */
    private $pedido;
     /**
     * @var string @Column(name="produto", type="string")
     */
    private $produto;
     /**
     *@var integer @Column(name="qdt", type="integer")
     */
    private $quantidade;

    public function __construct($id = 0,$pedido= "" ,$produto= "" ,$quantidade= 0.0){
    $this->id = $id;
    $this->pedido = $pedido;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    
    }
    
    public static function construct($array){
    $obj = new Item();
    $obj->setId( $array['id']);
    $obj->setPedido( $array['pedido']);
    $obj->setProduto( $array['produto']);
    $obj->setQuantidade( $array['quantidade']);
    return $obj;
    
    }
    
    public function getId(){
    return $this->id;
    }
    
    public function setId($id){
     $this->id=$id;
    }
    
    public function getPedido(){
    return $this->pedido;
    }
    
    public function setPedido($pedido){
     $this->pedido=$pedido;
    }
    
    public function getProduto(){
    return $this->produto;
    }
    
    public function setProduto($produto){
     $this->produto=$produto;
    }
    
    public function getQuantidade(){
    return $this->quantidade;
    }
    
    public function setQuantidade($quantidade){
     $this->quantidade=$quantidade;
    }
    public function equals($object){
    if($object instanceof Item){
    
    if($this->id!=$object->id){
    return false;
    
    }
    
    if($this->pedido!=$object->pedido){
    return false;
    
    }
    
    if($this->produto!=$object->produto){
    return false;
    
    }
    
    if($this->quantidade!=$object->quantidade){
    return false;
    
    }
    
    return true;
    
    }
    else{
    return false;
    }
    
    }
    public function toString(){
    
     return "  [id:" .$this->id. "]  [pedido:" .$this->pedido. "]  [produto:" .$this->produto. "]  [quantidade:" .$this->quantidade. "]  " ;
    }
    
    }
?>