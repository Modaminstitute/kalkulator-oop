<?php

class Calculator {
    
    public function add($bilangana, $bilanganb) {
        return $bilangana + $bilanganb;
    }

    public function minus($bilangana, $bilanganb) {
        return $bilangana - $bilanganb;
    }

    public function multiply($bilangana, $bilanganb) {
        return $bilangana * $bilanganb;
    }

    public function divide($bilangana, $bilanganb) {
        if ($bilanganb == 0) {
            throw new Exception("Bilangan tidak boleh dibagi nol.");
        }
        return $bilangana / $bilanganb;
    }
}
?>