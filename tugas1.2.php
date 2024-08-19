<?php
class laptop {
    public $merek;
    public $harga;
    public function __construct ($merek,$harga){
        $this->merek =$merek;
        $this->harga =$harga;
    }
    public function intro (){
        echo "The laptop is {$this->merek} and the harga is {$this->harga}.";
    }
    }
//Asus is inherited from laptop
class laptop extends laptop {
    echo "Am I a laptop or a asus?";
}
