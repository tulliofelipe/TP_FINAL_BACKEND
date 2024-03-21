<?php
    class categorias{
           private $id;
          private $nome;

          function_construct($id, $nome){
                 $this->id =$id;
                 $this->nome =$nome;
          }
        public function getid(){ 
              return $this->id;   
        }
        public function setid($id){ 
            return $this->id; 
    }
    public function getnome(){ 
        return $this->nome; 
    }
    public function setnome($nome){ 
        return $this->nome; 
    }
    }
?>
