<?php
class categorieM{ 

    private $name=null;
    private $category=null;
    

    function __construct($name,$category){
        //$this->id=$id;
        $this->name=$name;
        $this->category=$category;
        
    }
    
    /*public function getid(){
        return $this->id;
    }*/

    public function getname(){
        return $this->name;
    }

    public function getcategory(){
        return $this->category;
    }


    function setname(string $name){
        $this->name=$name;
    }
    function setcategory(string $category){
        $this->category=$category;
    }
  
    
}
?>