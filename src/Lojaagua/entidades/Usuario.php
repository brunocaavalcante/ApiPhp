<?php

    namespace Lojaagua\entidades;
    
/**
 * @Entity
 * @Table(name="usuario")
 */
    class Usuario{

/**
    * @var integer @Id
    *      @Column(name="id", type="integer")
    *      @GeneratedValue(strategy="AUTO")
*/
        private $id;
/**
    *
    * @var string @Column(type="string", length=255)
*/
        private $email;
 /**
    *
    * @var string @Column(type="date", length=255)
*/
        private $datanasc;
/**
    *
    * @var string @Column(type="string", length=255)
*/
        private $senha;
/**
    *
    * @var string @Column(type="string", length=255)
*/
        private $endereco;

        
        public function __construct($id = 0,$email= "" ,$datanasc = "0000-00-00 00:00:00",$senha= "" ,$endereco= "" ){
        $this->id = $id;
        $this->email = $email;
        $this->datanasc = $datanasc;
        $this->senha = $senha;
        $this->endereco = $endereco;
        
        }
        
        public static function construct($array){
        $obj = new Usuario();
        $obj->setId( $array['id']);
        $obj->setEmail( $array['email']);
        $obj->setDatanasc( $array['datanasc']);
        $obj->setSenha( $array['senha']);
        $obj->setEndereco( $array['endereco']);
        return $obj;
        
        }
        
        public function getId(){
        return $this->id;
        }
        
        public function setId($id){
         $this->id=$id;
        }
        
        public function getEmail(){
        return $this->email;
        }
        
        public function setEmail($email){
         $this->email=$email;
        }
        
        public function getDatanasc(){
        return $this->datanasc;
        }
        
        public function setDatanasc($datanasc){
         $this->datanasc=$datanasc;
        }
        
        public function getSenha(){
        return $this->senha;
        }
        
        public function setSenha($senha){
         $this->senha=$senha;
        }
        
        public function getEndereco(){
        return $this->endereco;
        }
        
        public function setEndereco($endereco){
         $this->endereco=$endereco;
        }
        public function equals($object){
        if($object instanceof Usuario){
        
        if($this->id!=$object->id){
        return false;
        
        }
        
        if($this->email!=$object->email){
        return false;
        
        }
        
        if($this->datanasc!=$object->datanasc){
        return false;
        
        }
        
        if($this->senha!=$object->senha){
        return false;
        
        }
        
        if($this->endereco!=$object->endereco){
        return false;
        
        }
        
        return true;
        
        }
        else{
        return false;
        }
        
        }
        public function toString(){
        
         return "  [id:" .$this->id. "]  [email:" .$this->email. "]  [datanasc:" .$this->datanasc. "]  [senha:" .$this->senha. "]  [endereco:" .$this->endereco. "]  " ;
        }
        
        }
?>