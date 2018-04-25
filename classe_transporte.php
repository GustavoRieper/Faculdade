<?php
    class transporte{
        protected $tipo;
        protected $cor;
        protected $velocidade;
        
        public function acelerar($n){
           $this->velocidade += $n;
        }       
        public function cor($c){
           $this->cor = $c;
        }
        // ------
        public function mostrar_velocidade(){
            return $this->velocidade;
        }
        public function mostrar_cor(){
            return $this->cor;
        }     
        public function mostrar_tipo(){
            return $this->tipo;
        }
        public function __construct($t){
            $this->tipo = $t;
        }
    }
    $cor = "Azul";
    $carro = new transporte("Automóvel");
    echo($carro->cor($cor));
//  ou echo($carro->cor("Azul"));
    echo($carro->mostrar_cor());
    echo("<br>");
    echo($carro->acelerar(30));
    echo($carro->acelerar(50));
    echo($carro->mostrar_velocidade());
    echo("<br>");
    echo($carro->mostrar_tipo());

    


?>