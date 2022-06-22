<?php

    namespace App\Canards;

    class AdapteurDindon implements Canard {

        public \App\Dindons\Dindon $dindon;

        public function __construct($dindon) {
            $this->dindon = $dindon;
        }

        public function cancaner() {
            $this->dindon->glouglouter();          
        }

        public function voler() {
            for ($i = 0; $i < 5 ;$i++) {
                $this->dindon->voler();            
            }
        }

    }

?>